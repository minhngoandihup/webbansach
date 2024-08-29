<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class RegisterController extends Controller
{
    function registers(){
        //


        //
        return view('register');
    } 
        public function postRegister(request $request){
        
            $request->merge(['password'=>Hash::make($request->password)]);
            try {
                User::create($request->all());
            } catch (\Throwable $th) {
                //throw $th;
                dd($th);
            }
            return redirect()->route('login');
        }
    
}
