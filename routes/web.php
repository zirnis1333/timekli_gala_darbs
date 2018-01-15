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
Route::get('/', 'RakstsController@index');
//Route::resource('conference', 'ConferenceController', ['except' => ['edit', 'update', 'destroy']]);
Route::get('/raksti', 'RakstsController@userRaksti');
Route::get('/NewRaksts', 'RakstsController@create');
Route::get('/raksts/{id}', 'RakstsController@show');
Route::get('/raksts/edit/{id}', 'RakstsController@edit');
Auth::routes();


//Route::get('admin', 'AdminController');
Route::get('FAQ', 'HomeController@faq');
/*Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin', 'AdminController');
Route::resource('country', 'CountryController', ['only' => ['create', 'store']]);
Route::resource('city', 'CityController', ['only' => ['create', 'store']]);
Route::resource('discount', 'DiscountController', ['only' => ['create', 'store']]);
Route::get('countries/conferences', 'ConferenceController@indexByCountry');
Route::get('conferences/search','ConferenceController@getSearch');
Route::post('conferences/search','ConferenceController@postSearch');



Route::get('/registration/{id}', 'RegistrationController@create');
Route::post('/registration/{id}', 'RegistrationController@store');*/

/*Route::get('/', function () {
    return view('home');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
