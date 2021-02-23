<?php

use Illuminate\Support\Facades\Route;

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
Route::post('auth/register','AuthController@register')->name('auth/register');
Route::post('auth/login','AuthController@login')->name('auth/login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','FrontController@home');
Route::get('/{any}', function () {
    return view('layouts/app');
})->where('any','.*');


