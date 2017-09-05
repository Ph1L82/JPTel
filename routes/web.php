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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/consumption', function (){
	return view('app.consumption');
});
Route::post('/consumption/Month', 'ConsumptionController@getClinicsConsumptionByMonth')->name('cmonth');
Route::get('/help', function (){
	return view('app.help');
});
Route::get('/about', function (){
	return view('app.about');
});

}); // auth