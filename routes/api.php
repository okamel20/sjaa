<?php
use Illuminate\Http\Request;


Route::group(['namespace'=>'Api'], function() {
	Route::any('login','ApiController@login');
	Route::any('getAllServices','ApiController@getAllServices');
	Route::any('getServiceData','ApiController@getServiceData');
	
	Route::group([
      'middleware' => 'auth:api'
    ], function() {
		Route::any('addOrder','ApiController@addOrder');
		Route::any('myOrders','ApiController@myOrders');
    });

});



