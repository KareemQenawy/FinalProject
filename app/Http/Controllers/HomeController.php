<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function get_home_page(){
        $latestProdcuts= Product::orderBy('id','desc')->take(3)->get();
        // dd($latestProdcuts);
        return view('home' , ['latestProdcuts'=>$latestProdcuts]);
    }
    function get_about_us(){
       return view("about");
    }
}
