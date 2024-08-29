<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Products;
use App\Models\Category;
class AdminController extends Controller
{
    public function index(){
        //
       
        //
        return view('admin.index');
    }
    public function productlist(){
        //
        $category = Category::orderBy('name', 'ASC')->get();
        $products = Products::orderBy('id', 'DESC')->paginate(20);
        //
        return view('admin.productlist', compact('products', 'category'));
    }
    public function productadd(Request $request){
            $validatedData = $request->validate(
                [
                    'name' => 'required|string|max:255',
                    'price' => 'required|numeric',
                    'category_id' => 'required|integer|exists:categories,id',
                    'image' => 'required|file|mimes:webp,ipeg,png,jpg,gif,svg|max:1048',
                    'quantity' => 'nullable|numeric|min:1',                    
                ]
            );
            
            if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('uploaded'), $imageName);
                $validatedData['image'] = $imageName;
            }

            $product = Products::create($validatedData);

            return redirect()->route('productlist', compact('product'));
    }
    public function productdelete($id){
        $product = Products::find($id);
        $imgpath = "uploaded/".$product->image;
        if(file_exists($imgpath)){
            unlink($imgpath);
        }
        $product->delete();
        return redirect()->route('productlist');
    }
    public function productupdateform($id){
        //
        $category = Category::orderBy('name', 'ASC')->get();
        $products = Products::orderBy('id', 'DESC')->paginate(20);
        $product = Products::find($id);//
        return view('admin.productupdateform', compact('category', 'products','product'));
    }
    public function productupdate(Request $request){
        $validatedData = $request->validate(
            [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'category_id' => 'required|integer|exists:categories,id',
                'image' => 'required|file|mimes:webp,ipeg,png,jpg,gif,svg|max:1048',
                'description' => 'nullable|string',
                'quantity' => 'nullable|numeric|min:1',
                'id' => 'required|integer|exists:products,id',
                
            ]
        );
        
        $id = $request->id;
        $product = Products::findOrFail($id);

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploaded'), $imageName);
            $validatedData['image'] = $imageName;
            //kiểm tra hình cũ và xóa
            $oldImgpath = public_path("uploaded/".$product->image);
            if(file_exists($oldImgpath)){
                unlink($oldImgpath);
            }
        }

        $product->update($validatedData);
        
        return redirect()->route('productlist');
    }
    public function user(){
        return view('admin.user');
    }
    
}
