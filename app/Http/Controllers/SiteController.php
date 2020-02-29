<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
    	return view('website.home');
    }

    public function product(){
    	return view('website.product');
    }
}
