<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/CRUD', function () {
    return ('welcome crud ddddddd');
});

Route::get('/CRUD/anotherPage', function () {
    return 'welcome crud test1';
});


Route::group(['namespace'=> 'Back'], function(){
	Route::get('/CRUD/test2/{id}', 'cardsControllers@showCards'); 

});

 //route parameters:

Route::get('CRUD/test55', function ($id) {
    return 'welcome fffffffff'.$id;
});

Route::get('/CRUD/test3', function () {
 	return 'welcome crud';
});

