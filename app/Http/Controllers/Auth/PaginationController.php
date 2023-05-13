<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    function pagination(){
        return view("Auth.pagination");
    }
}
