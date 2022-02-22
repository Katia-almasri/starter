<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cardsControllers extends Controller
{
    public function __construct(){
    	$this->middleware('auth')->except('searchCards', 'showCards');
    }

    public function showCards(){
    	return 'inside showCards';
    }

    public function detailsCards(){
    	return 'inside detailsCards';
    }

    public function filterCards(){
    	return 'inside filterCards';
    }

    public function searchCards(){
    	return 'inside searchCards';
    }
}
