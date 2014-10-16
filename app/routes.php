<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
	//return "Home Page";
});


Route::post('/para', function(){
	
	$inputs =  Input::all();
    return View::make('para')->with('inputs', $inputs);
	//return View::make('para');
});
Route::post('/user', function()
{
	$inputs =  Input::all();
	return View::make('user')->with('inputs', $inputs);
});
