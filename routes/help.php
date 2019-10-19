<?php

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function() {
	Config::set('auth.defines', 'admin');
	Route::get('dashboard','AdminController@dashboard');
	Route::get('login','AdminController@login');
	Route::post('login','AdminController@postLogin');
	Route::get('forgot','AdminController@forgot');
	Route::post('forgot','AdminController@postForgot');
	Route::get('reset/password/{token}','AdminController@resetPassword');
	Route::post('reset/password/{token}','AdminController@postresetPassword');

	Route::group(['middleware'=>'admin:admin'], function() {
		Route::any('logout','AdminController@logout');
	    Route::get('/',  ['uses' => 'AdminController@index', 'as' => 'adminAll' , 'name' => trans('admin.Dashboard')]);
		Route::get('profile', ['uses' => 'AdminController@profile', 'as' => 'profile' , 'name' => trans('admin.profile')]);

		// settings 
		Route::get('setting', ['uses' => 'SettingController@index', 'as' => 'settingIndex' , 'name' => trans('admin.setting')]);

		Route::put('setting/{id}', ['uses' => 'SettingController@update', 'as' => 'settingUpdate' , 'name' => trans('admin.settingUpdate')]);
		// end settings route
		
		// admins
		Route::get('admins', ['uses' => 'AdminsController@index' , 'as' => 'admins' , 'name' => trans('admin.adminControllerIndex')]);

		Route::get('admins/create', ['uses' => 'AdminsController@create' , 'as' => 'adminsCreate' , 'name' => trans('admin.addAdmin')]);

		Route::post('admins', ['uses' => 'AdminsController@store']);

		Route::get('admins/{id}/edit', ['uses' => 'AdminsController@edit' , 'as' => 'adminsEdit' , 'name' => trans('admin.editAdmin')]);

		Route::put('admins/{id}', ['uses' => 'AdminsController@update']);

		Route::delete('admins/{id}', ['uses' => 'AdminsController@destroy' , 'as' => 'adminsDestroy' , 'name' => trans('admin.adminsdelete')]);

		Route::delete('admins/destroy/all', ['uses' => 'AdminsController@deleteAll' , 'as' => 'adminsDestroyMultiple' , 'name' => trans('admin.adminsDestroyMultiple')]);

		Route::delete('admins/active/all', ['uses' => 'AdminsController@activeAll' , 'as' => 'adminsactiveMultiple' , 'name' => trans('admin.adminsactiveMultiple')]);
		// end admins routes

		
		// groups
		Route::get('groups', ['uses' => 'GroupsController@index' , 'as' => 'groups' , 'name' => trans('admin.groupsControllerIndex')]);

		Route::get('groups/create', ['uses' => 'GroupsController@create' , 'as' => 'groupsCreate' , 'name' => trans('admin.addGroup')]);

		Route::post('groups', ['uses' => 'GroupsController@store']);

		Route::get('groups/{id}/edit', ['uses' => 'GroupsController@edit' , 'as' => 'groupsEdit' , 'name' => trans('admin.editGroup')]);

		Route::put('groups/{id}', ['uses' => 'GroupsController@update']);

		Route::delete('groups/{id}', ['uses' => 'GroupsController@destroy' , 'as' => 'groupsDestroy' , 'name' => trans('admin.groupsdelete')]);

		Route::delete('groups/destroy/all', ['uses' => 'GroupsController@deleteAll' , 'as' => 'groupsDestroyMultiple' , 'name' => trans('admin.groupsDestroyMultiple')]);

		Route::delete('groups/active/all', ['uses' => 'GroupsController@activeAll' , 'as' => 'groupsactiveMultiple' , 'name' => trans('admin.groupsactiveMultiple')]);

		// end groups routes

		
	});

	Route::get('lang/{lang}',function($lang){

		App::setLocale($lang);
		session()->has('lang')?session()->forget('lang'):App::getLocale();
		$lang == 'ar'?session()->put('lang','ar'):session()->put('lang','en');

		return back();
	});
	
});
