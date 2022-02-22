<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class userControllers extends Controller
{
   public function showUserName(){
        return "username: Katia Almasri";
   }
}
