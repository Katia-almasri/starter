<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class adminControllers extends Controller
{
   public function showAdminName(){
        return 'Runda Almasri';
   }

   public function showUsersName(){
   	return 'a\nb\nc\nd\ne';
   }
}
