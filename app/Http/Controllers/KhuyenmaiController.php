<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class KhuyenmaiController extends Controller
{
    function khuyenmais(){
        //
        $khuyenmai = Products::inStock();
        return view('khuyenmai', compact('khuyenmai'));

        //
        
    }
}
