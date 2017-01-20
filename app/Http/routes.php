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

// route /date

Route::get('date','DatesController@date');

// route /double

Route::any('double','NumbersController@calculate'); // any - for post and get

// route weather

Route::get('/weather/{land}/{fylke}/{kommune}/{stedsnavn}','WeathersController@show');
