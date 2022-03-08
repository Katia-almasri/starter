<?php

namespace App\Http\Controllers\formController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Model\User;

class inputController extends Controller
{
	private $rules = [
		'name'=>'required|max:20',
		'email'=>'required|max:50',
		'password'=>'required|max:50'
	];
	private $messages = [
		'name.required'=>'name is required',
		'email.required'=>'email is required',
		'password.required'=>'password is required'
	];
   public function showForm(){
   	return view ('forms.inputForm');
   }
   public function getMessages(){
   	return $this->messages;
   }

    public function getRules(){
   	return $this->rules;
   }


   public function processData(Request $request){
   		//1. validate data
   		$valid = validator::make($request->all(),$this->getRules(), $this->getMessages());
      if($valid->fails()){
      	return redirect()->back()->withErrors($valid)->withInputs($request->all());
      }
      User::create(['name'=>$request->name, 'email'=>$request->email, 'password'=>$request->password]);
      return redirect()->back()->with('success','Added successfully'); 
   }	
}
