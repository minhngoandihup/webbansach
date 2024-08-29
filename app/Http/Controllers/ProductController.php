<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Products;
use App\Models\Category;
class ProductController extends Controller
{
    public function index(Request $request){
        //
       $category = Category::orderBy('name', 'asc')->get();

        if($request->category_id){
            $product = Products::where('category_id', $request->category_id)->orderBy('id', 'desc')->paginate(12);
        }else{
             $product = Products::orderBy('id', 'desc')->paginate(12);
        }
        //
        return view('product', compact('category', 'product'));
    }
    public function search(Request $request){
        //
        $category = Category::orderBy('name', 'asc')->get();

        $keyword = $request->input('query');
        $product = Products::where('name', 'LIKE', "%$keyword%")->orWhere('description', 'LIKE', "%$keyword%")->orderBy('id', 'DESC')->paginate(12);
        //
        return view('product', compact('category', 'product', 'keyword'));
    }

    public function detail(Request $request){
        if($request->product_id){
            $sp = Products::find($request->product_id);
            $splq = Products::where('category_id', $sp->category_id)->where('id','<>',$sp->id)->get();
            return view('productdetail', compact('sp', 'splq'));
        }


        return view('productdetail');
    }
    
}
