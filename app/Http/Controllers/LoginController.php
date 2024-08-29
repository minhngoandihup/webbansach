<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    function logins(){
        //


        //
        return view('login');
    }
    public function postLogin(request $request){
       
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
             return redirect()->route('home');
        }return redirect()->back()->with('error','Bạn đăng nhập sai tài khoản hoặc mật khẩu');
    }
}
