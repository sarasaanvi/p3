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
	
	$para = Input::get("paras");
	//verification that no of paragraphs are integer and within 99
	if (is_numeric($para) and (int)$para <=99 and (int)$para >0) {				
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($para);
		$paras = implode('<p>', $paragraphs);	
	} else {
		$error_msg = "Invalid input for no of paragraphs";
		return View::make('error')
		->with('error_msg', $error_msg);		
	}	
    return View::make('para')
	->with('paras', $paras);
	
});
Route::post('/user', function()
{
	$users = Input::get("users");
	//verification that no is an integer and within 99
	$users_data;
	if (is_numeric($users) and (int)$users <=99 and (int)$users >0) {
		$faker = Faker\Factory::create();
		for ($i=0; $i < $users; $i++) {
			$users_data[$i] = $faker;
		}	
	} else {
		$error_msg = "Invalid input for no of users";
		return View::make('error')
		->with('error_msg', $error_msg);
	}
	return View::make('user')
	->with('users_data', $users_data);
});



