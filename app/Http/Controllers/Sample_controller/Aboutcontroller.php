<?php

namespace App\Http\Controllers\Sample_controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
    function myview(){
        return view('frontend.About');
    }
}
