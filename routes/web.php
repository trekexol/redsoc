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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', 'OrganizationController@index')->name('home');
/*
Route::group(["prefix"=>'users'],function(){
    Route::get('/','UserController@index')->name('users');
    Route::get('register','UserController@create')->name('users.create');
    Route::post('store', 'UserController@store')->name('users.store');
   
    Route::get('{id}/edit','UserController@edit')->name('users.edit');
    Route::delete('{id}/delete','UserController@destroy')->name('users.delete');
    Route::patch('{id}/update','UserController@update')->name('users.update');

});*/