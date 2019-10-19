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

Route::get('/', 'HomeController@indexHome');
Route::get('/news', 'HomeController@news');
Route::get('/newscontents', 'HomeController@newscontents');
Route::get('/news/{id}', 'HomeController@newsId');
Route::get('/author/{id}', 'HomeController@authorId');
Route::get('/page/{id}', 'HomeController@page');
Route::get('/archive', 'HomeController@archive');
Route::get('/editions', 'HomeController@editions');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@postContact');
Route::get('/aboutTextAjax', 'HomeController@aboutTextAjax');
Route::post('/subscribe', 'HomeController@postsubscribe');
Route::get('/signup', 'HomeController@signup');
Route::post('/signup', 'HomeController@postSignup');
Route::get('/SignOut', 'HomeController@SignOut');
Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@postLogin');



Route::get('lang/{lang}',function($lang){
	App::setLocale($lang);
	session()->has('lang')?session()->forget('lang'):App::getLocale();
	$lang == 'ar'?session()->put('lang','ar'):session()->put('lang','en');
	return back();
});



