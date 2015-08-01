<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portal', function () {
    return view('portal');
});

Route::get('/hr', function () {
    return view('hr.portal');
    
});

// Provide controller methods with object instead of ID
Route::model('jobapps', 'Jobapp');
Route::model('positions', 'Position');
Route::model('marriages', 'Marriage');


Route::resource('jobapps','JobappsController');
Route::resource('positions','PositionsController');
Route::resource('marriages','MarriageController');

Route::bind('jobapps', function($value, $route) {
	return App\Models\Hr\Jobapp::whereJob_app_no($value)->first();
});