<?php

namespace App\Http\Controllers\eCommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function __contruct(){
    	$this->middleware('auth')->except('showProucts', 'getAboutUs');
    }

    public function showProucts(){
    	return view('Products.index');
    }

    public function getAboutUs(){
    	return view('Body.aboutUs');
    }
    //passing data with one value and with 'with'
    public function getComment(){
    	return view('Body.comment')->with('id', 2);
    }
   //passing data with array value and with 'with'
    public function getDetail(){
    	return view('Products.details')->with(['id'=>3, 'name'=>'milkman', 'cost'=>200]);
    }

    //passing data with array value 
    public function getCompany(){
    	$data = [];
    	$data['id'] = 102039;
    	$data['name'] = 'Apple';
    	$data['foundation'] = 1200;

    	return view('Body.company', $data);
    }

    //passing objects
    public function getCustomer(){
    	$customer = new \stdClass();
    	$customer->id = 100;
    	$customer->name = 'steve';

    	return view('Body.profile', compact('customer'));


    }
}
