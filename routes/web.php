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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return 'welcome katia';
});

//route parameters:

Route::get('/test2/{id}', function ($id) {
    return 'welcome '.$id;
});

Route::get('/test3/{id?}', function () {
 	return 'welcome ';
});

//named parameters

Route::get('/test2/{id}', function ($id) {
    return 'welcome '.$id;
})->name('testsExam');

//naming and routing namespaces

Route::namespace('Front')->group(function(){
	//all routes here shold be access to folder Front in controller
	Route::get('/users','userControllers@showUserName');
});

Route::namespace('Back')->group(function(){
	Route::get('showCards', 'cardsControllers@showCards');
	Route::get('detailsCards', 'cardsControllers@detailsCards');
	Route::get('filterCards', 'cardsControllers@filterCards');
	Route::get('searchCards', 'cardsControllers@searchCards');

});

Route::group(['namespace'=> 'SecondController'], function(){
	Route::get('/second0', 'adminController@getAdminDetails0');
	Route::get('/second1', 'adminController@getAdminDetails1');
	Route::get('/second2', 'adminController@getAdminDetails2');
	Route::get('/second3', 'adminController@getAdminDetails3');
	Route::get('/second4', 'adminController@getAdminDetails4');
});

Route::get('/login', function(){
	return 'you dont have permission to login this page';
})->name('login');

//Controller resources

Route::resource('/CRUD', 'crudController');

Route::get('/index', 'SecondController\adminController@getCustomerIndex');
Route::get('/aboutus', 'SecondController\adminController@getAboutUs');

Route::get('/cards', 'SecondController\adminController@getArrays');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//for practesing
Route::get('/selles', function(){
	return 'this is sales page';
})->name('sales');

Route::get('/comment/{id}', function($id){
	return 'this is comment page no :'.$id;
})->name('comment');

Route::get('/comment1/{name?}', function(){
	return 'this is comment 1 page';
})->name('comment1');

/*
	namespaces
*/
	// Route::namespace('eCommerce')->group(function(){
	// 	Route::get('/showProducts', 'customerController@showProucts');
	// });

	Route::group(['namespace'=>'eCommerce', 'prefix'=>'commerce'], function(){
		Route::get('/showProducts', 'customerController@showProucts');
		Route::get('/aboutus', 'customerController@getAboutUs');
		Route::get('/productComment', 'customerController@getComment');
		Route::get('/productDetail', 'customerController@getDetail');
		Route::get('/productCompany', 'customerController@getCompany');
		Route::get('/customer', 'customerController@getCustomer');
	});

	//passing values 
		//by with
