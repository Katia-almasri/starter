<?php

namespace App\Http\Controllers\SecondController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
	// public function __construct(){
	// 	$this->middleware('auth')->except('getAdminDetails1', 'getAdminDetails2', 'getCustomerIndex');
	// }
    public function getAdminDetails0(){
    	return 'sys admin';
    }

     public function getAdminDetails1(){
    	return 'sys admin';
    }

     public function getAdminDetails2(){
    	return 'sys admin';
    }

     public function getAdminDetails3(){
    	return 'sys admin';
    }

    public function getCustomerIndex(){
        $data = [];
        $data['id'] = 2;
        $data['name'] = 'katia almasri';
        $data['age'] = 21;
        $obj = new \stdClass();
        $obj->name = 'salma';
        $obj2 = new \stdClass();
        $obj2->name = 'runda';
        return view('/Body.portfoilo');
    }

    public function getAboutUs(){
        return view('Body.aboutUs');
    }

    public function getArrays(){
      $obj = new \stdClass();
      $obj->age = 21;
      $obj->name = 'katia';
      $obj->year = 4;

      $data['katia'] = 2;
      $data['runda'] = 9;
      $data['salma'] = 1;
        return view('/welcome', $data);
    }
}
