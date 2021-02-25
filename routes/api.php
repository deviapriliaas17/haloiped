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
Route::get('profile','ProfileController@getData')->middleware('auth:api');
Route::post('profile/edit','ProfileController@edit')->middleware('auth:api');
Route::post('/admin/blog/create', 'Admin\BlogController@CreateBlog');
Route::get('/admin/blog/{id}', 'Admin\BlogController@getDataBlog');
Route::get('/admin/blog/category/{id}','Admin\BlogController@getDataCategory');
Route::put('/admin/blog/category/edit/{id}','Admin\BlogController@EditCategory');
Route::get('/admin/blog', 'Admin\BlogController@blogs');
Route::post('/admin/blog/edit/{id}','Admin\BlogController@EditBlog');
Route::post('/admin/blog/category/create', 'Admin\BlogController@CreateCategory');
Route::get('/category', 'Admin\BlogController@categories');
Route::delete('/admin/blog/category/delete/{id}','Admin\BlogController@DeleteCategory');

Route::post('/admin/layout/home/edit','HomePageController@edit');
Route::get('/admin/layout/home','HomePageController@index');

Route::post('/admin/layout/about/edit','AboutPageController@edit');
Route::post('/admin/layout/contact/edit','ContactPageController@edit');
Route::get('/admin/layout/contact','ContactPageController@getData');
Route::post('/admin/layout/blog/edit','BlogPageController@edit');
Route::get('/admin/layout/blog','BlogPageController@getData');
Route::post('/admin/layout/portfolio/edit','PortfolioPageController@edit');
Route::get('/admin/layout/portfolio','PortfolioPageController@getData');

Route::get('/admin/layout/about','AboutPageController@index');

Route::get('/admin/portfolio','PortfolioController@index');
Route::get('/admin/portfolio/{id}','PortfolioController@getData');
Route::post('/admin/portfolio/create','PortfolioController@store');
Route::post('/admin/portfolio/edit/{id}','PortfolioController@edit');

Route::get('/admin/skill','SkillController@index');
Route::get('/admin/skill/{id}','SkillController@getData');
Route::post('/admin/skill/edit/{id}','SkillController@update');
Route::post('/admin/skill/create','SkillController@store');

Route::post('/admin/focus/create','FocusController@store');
Route::get('/admin/focus','FocusController@index');
Route::get('/admin/focus/{id}', 'FocusController@getData');
Route::post('/admin/focus/edit/{id}','FocusController@edit');


