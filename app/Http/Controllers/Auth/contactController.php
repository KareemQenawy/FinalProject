<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{


    function contact(){
    return view("Auth.contact");
    }


}
