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

Route::get('/dice-roll/{guess}', function($guess) 
{
	$data = [
		'face_number' => rand(1, 6),
		'guess' => $guess
	];
	return View::make('dice-roll')->with($data);
});

Route::get('orm-test', function ()
{
	$post = Post::findOrFail(2);
	$post->delete();
});

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/hello/{name}/{day}', function($name, $day) 
{
	return "Hello $name! Today is $day.";
});

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

Route::get('/login', 'HomeController@showLogin');

Route::get('/logout', 'HomeController@doLogout');

Route::post('/login', 'HomeController@doLogin');


