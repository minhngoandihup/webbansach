<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Products;
class HomeController extends Controller
{
     public function index(){
        //dữ liệu load từ mobile
        $bestsellers = Products::BestSellerProducts(7)->get();
        $newproducts = Products::NewProducts(18)->get();
            //show view
        return view('home', compact('bestsellers', 'newproducts'));
   
    }
    public function productHome(){
        $newestProducts = Products::orderBy('created_at', 'desc')->take(6)->get();
        $bestSellingProducts = Products::orderBy('sales_cout', 'desc')->take(6)->get();
        $mostViewedProducts = Products::orderBy('view_cout', 'desc')->take(6)->get();

        return view('product_home', compact('newestProducts', 'bestSellingProducts', 'mostViewedProducts'));
    }


    public function muahe2024(){
        $newProducts = Products::newProducts(6)->get();
        $bestsellerProducts = Products::bestsellerProducts(6)->get();
        $instockProducts = Products::inStockProducts(3)->get();

        return view('muahe2024', compact('newProducts', 'bestsellerProducts', 'instockProducts'));
    }
   
}
