<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
//use App\Brand;
use DB;
class brandController extends Controller
{
    public function addBrand(){

    	return view('admin.addbrand');
    }
    public function manageBrand(){

    	return view('admin.managebrand');
    }

    public function create(Request $request){

    	$data = array();
    	$data['name'] = $request->name;

    	$brand = DB::table('Brands')->insert($data);
    	
    	return Redirect()->back();


    }
}
