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

Route::get('/admin', function () {
    return 'welcome';
});

Route::get('/admin/test1', function () {
    return 'welcome katia';
});

//route parameters:

Route::get('/admin/test2/{id}', function ($id) {
    return 'welcome '.$id;
});


//namespaces
Route::namespace('Front')->group(function(){
	//all routes here shold be access to folder Front in controller
	Route::get('/admin/users','adminControllers@showAdminName');
});

//prefixes
Route::group(['prefix' => 'admin', 'namespace' => 'Front'], function(){
	Route::get('/details','adminControllers@showAdminName');	
});

//middleware

// Route::group(['prefix' => 'admin', 'namespace' => 'Front', 'middleware' => 'auth'], function(){
// 	Route::get('/showUsers','adminControllers@showUsersName');	
// });

//Another way of writing middleware:

Route::get('/admin/test3/{id?}', function () {
    return 'welcome ';
})->middleware('auth');