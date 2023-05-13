<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class RegisterController extends Controller
{
    public function register(){
        return view("Auth.register");
    }
    public function handleRegister(Request $request){
        // dd($request->all());
        $data = $request->all();
        //hashing password
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data); //mass assignemnt
        return $user ? redirect("login") : redirect("register");
    }
}
