<?php

namespace App\Http\Controllers\SecondController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use  App\Model\Offer;
use App\Http\Requests\OfferRequest;
use LaravelLocalization;


class adminController extends Controller
{
	

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

    public function store(){
    return Offer::create(['offer_type'=>'ecommerce', 'price'=>5000]);
    }

    public function makeConnect(){
      return Offer::select('offer_type')->get();
    }

    public function insertFromForm(){
      return view('forms.insertForm'); 
    }

    public function saveData(OfferRequest $request){
      Offer::create(['offer_name_en'=>$request->offer_name_en, 'offer_name_ar'=>$request->offer_name_ar, 'price'=>$request->price, 'details_en'=>$request->details_en, 'details_ar'=>$request->details_ar]);
       return redirect()->back()->with('success','saved successfully');
     }

     public function getOffers(){
      $offers = Offer::select('offer_id',
       'offer_name_'.LaravelLocalization::getCurrentLocale().' as offer_name',
       'details_'.LaravelLocalization::getCurrentLocale().' as details',
       'price'
        )->get();
      return view('userOffers.showOffers', compact('offers'));
     }
   }
