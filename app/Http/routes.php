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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/clients', 'clientController@Show');
Route::get('/client/{id}', 'clientController@seemore');
Route::get('/website', 'HomeController@pageWeb');
Route::get('/branding', 'HomeController@pageBrand');


Route::get('/book/{id_talent}', 'bookedController@pageBooked');
Route::get('/showbook', 'bookedController@pageShow');


Route::get('/bookedTalent', 'bookedController@show');
