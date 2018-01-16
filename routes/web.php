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

Auth::routes();
Route::get('/', 'RakstsController@index');
Route::get('/valoda/{locale}', 'UserController@setLocale');
Route::get('home', 'HomeController@faq');
Route::get('/raksti', 'RakstsController@userRaksti');

Route::get('/Raksts/Izveidot', 'RakstsController@create');
Route::post('/Raksts/Izveidot', 'RakstsController@store');
Route::get('/raksts/{id}', 'RakstsController@show');
Route::get('/raksts/edit/{id}', 'RakstsController@edit');
Route::post('/raksts/edit/{id}', 'RakstsController@update');
Route::get('/raksts/delete/{id}', 'RakstsController@delete');

Route::get('Admin/Raksti/visi', 'RakstsController@all');
Route::post('Admin/Raksti/visi', 'RakstsController@statusChange');
Route::get('Admin/Raksti/neapstiprinati', 'RakstsController@unaccepted');
Route::post('Admin/Raksti/neapstiprinati', 'RakstsController@statusChange');

Route::get('/sort/{sort}', 'UserController@sort');
Route::get('/about', 'UserController@about');

Route::get('/admin', 'HomeController@admin');
Route::get('Tags/list', 'TagsController@listed');
Route::get('Tags/create', 'TagsController@create');
Route::post('Tags/create', 'TagsController@store');
Route::get('Tags/Edit/{id}', 'TagsController@edit');
Route::post('Tags/Edit/{id}', 'TagsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
