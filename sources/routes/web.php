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


// route khong co tham so
Route::get('helloword',function(){
	echo "<h1>Hello laravel</h1>";
});

//chuyen tham so cho routes
Route::get('sayhello/{name?}',function($name = null){
	echo "Hello"." ".$name;
});

Route::get('sum/{numone?}/{numtwo?}',function($numone = null,$numtwo = null){
	$sum =  $numone + $numtwo;
	echo "Value is"." ". $sum;
});

//group routes
Route::group(['prefix'=>'admin'],function(){
	Route::get('home',function(){
		echo "This is home pages";
	});
	Route::group(['prefix'=>'product'],function(){
		Route::get('view',function(){
			return "This is view product pages";
		});
	});
});

//call controller

Route::get('controller','IndexController@getName');

//call controller use parametter

Route::get('add/{num1?}/{num2?}','IndexController@sumAction');

Route::get('getview','IndexController@getViewAction');

//master page in laravel

Route::get('header','IndexController@getHeaderAction');
Route::get('content','IndexController@getContentAction');
Route::get('home','IndexController@getHomeAction');