<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/admin/blog/create', 'Admin\BlogController@CreateBlog');
Route::get('/admin/blog/{id}', 'Admin\BlogController@getDataBlog');
Route::post('/admin/blog/edit/{id}','Admin\BlogController@EditBlog');
Route::post('/admin/blog/category/create', 'Admin\BlogController@CreateCategory');
Route::get('/category', 'Admin\BlogController@categories');