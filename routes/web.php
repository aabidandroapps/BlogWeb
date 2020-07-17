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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//View blog 
Route::get('/Blog/View', 'BlogController@index')->name('/Blog/View');
// 

//add blog 
Route::get('/Blog/Add', 'BlogController@create')->name('/Blog/Add');
// 

//store blog 
Route::post('/Blog/Store', 'BlogController@store')->name('/Blog/Store');
// 

//edit blog 
Route::get('/Blog/Edit/{id}', 'BlogController@edit')->name('/Blog/Edit');
// 

//edit blog 
Route::post('/Blog/Update/{id}', 'BlogController@update')->name('/Blog/Update');
//

//edit blog 
Route::get('/Blog/Delete/{id}', 'BlogController@destroy')->name('/Blog/Delete');
// 