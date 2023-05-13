<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


// use Auth;
class LoginController extends Controller
{
    function login(){
        return view("Auth.login");
    }
    function handleLogin(Request $request){
        // dd($request->all()); //
        $cred = \Auth::attempt(['email' => $request->email, 'password' => $request->password]);   //return true or false//
        if($cred){
            return redirect("/");
        }else{
            return redirect()->back();
        }
    }

    function logout(){
        Auth::logout();
        return redirect("/");
    }
}
