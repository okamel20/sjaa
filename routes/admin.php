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

		Route::get('sochial', ['uses' => 'SettingController@sochialLinks', 'as' => 'sochialLinks' , 'name' => 'روابط التواصل الأجتماعى']);

		Route::put('sochial/{id}', ['uses' => 'SettingController@sochialLinksUpdate', 'as' => 'sochialLinksUpdate' , 'name' => 'تعديل روابط التواصل الأجتماعى']);

		Route::get('vision', ['uses' => 'SettingController@visionIndex', 'as' => 'visionIndex' , 'name' => 'رؤيتنا']);
		Route::put('vision/{id}', ['uses' => 'SettingController@visionUpdate', 'as' => 'visionUpdate' , 'name' => 'تعديل  رؤيتنا']);

		Route::get('goal', ['uses' => 'SettingController@goalIndex', 'as' => 'goalIndex' , 'name' => 'الهدف']);
		Route::put('goal/{id}', ['uses' => 'SettingController@goalUpdate', 'as' => 'goalUpdate' , 'name' => 'تعديل  الهدف']);

		Route::get('message', ['uses' => 'SettingController@messageIndex', 'as' => 'messageIndex' , 'name' => 'الرسالة']);
		Route::put('message/{id}', ['uses' => 'SettingController@messageUpdate', 'as' => 'messageUpdate' , 'name' => 'تعديل  الرسالة']);

		Route::get('publish', ['uses' => 'SettingController@publishIndex', 'as' => 'publishIndex' , 'name' => 'نطاق النشر']);
		Route::put('publish/{id}', ['uses' => 'SettingController@publishUpdate', 'as' => 'publishUpdate' , 'name' => 'تعديل  نطاق النشر']);

		Route::get('magazine', ['uses' => 'SettingController@magazineIndex', 'as' => 'magazineIndex' , 'name' => 'عن المجلة']);
		Route::put('magazine/{id}', ['uses' => 'SettingController@magazineUpdate', 'as' => 'magazineUpdate' , 'name' => 'تعديل  عن المجلة']);


		// end settings route

		// subjects
		Route::get('subjects', ['uses' => 'SubjectsController@index' , 'as' => 'subjects' , 'name' => 'مواضيع الرسائل']);

		Route::get('subjects/create', ['uses' => 'SubjectsController@create' , 'as' => 'subjectsCreate' , 'name' => 'أضافة  موضوع']);

		Route::post('subjects', ['uses' => 'SubjectsController@store']);

		Route::get('subjects/{id}/edit', ['uses' => 'SubjectsController@edit' , 'as' => 'subjectsEdit' , 'name' => 'تعديل بيانات  موضوع']);

		Route::put('subjects/{id}', ['uses' => 'SubjectsController@update']);

		Route::delete('subjects/{id}', ['uses' => 'SubjectsController@destroy' , 'as' => 'subjectsDestroy' , 'name' => 'حذف  موضوع']);

		Route::delete('subjects/destroy/all', ['uses' => 'SubjectsController@deleteAll' , 'as' => 'subjectsDestroyMultiple' , 'name' => 'حذف  متعدد  لمواضيع الرسائل']);

		Route::delete('subjects/active/all', ['uses' => 'SubjectsController@activeAll' , 'as' => 'subjectsactiveMultiple' , 'name' => 'تفعيل متعدد  لمواضيع الرسائل']);
		// end subjects routes

		// contacts
		Route::get('contacts', ['uses' => 'ContactsController@index' , 'as' => 'contacts' , 'name' => 'رسائل اتصل بنا']);

		Route::delete('contacts/{id}', ['uses' => 'ContactsController@destroy' , 'as' => 'contactsDestroy' , 'name' => 'حذف   رسالة اتصل بنا']);

		Route::get('contacts/{id}', ['uses' => 'ContactsController@show' , 'as' => 'contactsShow' , 'name' => 'عرض  رسالة اتصل بنا']);


		Route::delete('contacts/destroy/all', ['uses' => 'ContactsController@deleteAll' , 'as' => 'contactsDestroyMultiple' , 'name' => 'حذف  متعدد  لرسائل اتصل بنا']);

		// end contacts routes


		// authors
		Route::get('authors', ['uses' => 'AuthorsController@index' , 'as' => 'authors' , 'name' => 'كتاب الأخبار ا']);

		Route::get('authors/create', ['uses' => 'AuthorsController@create' , 'as' => 'authorsCreate' , 'name' => 'أضافة كاتب']);

		Route::post('authors', ['uses' => 'AuthorsController@store']);

		Route::get('authors/{id}/edit', ['uses' => 'AuthorsController@edit' , 'as' => 'authorsEdit' , 'name' => 'تعديل بيانات كاتب']);

		Route::put('authors/{id}', ['uses' => 'AuthorsController@update']);

		Route::delete('authors/{id}', ['uses' => 'AuthorsController@destroy' , 'as' => 'authorsDestroy' , 'name' => 'حذف كاتب']);

		Route::delete('authors/destroy/all', ['uses' => 'AuthorsController@deleteAll' , 'as' => 'authorsDestroyMultiple' , 'name' => 'حذف  متعدد للكتاب']);

		Route::delete('authors/active/all', ['uses' => 'AuthorsController@activeAll' , 'as' => 'authorsactiveMultiple' , 'name' => 'تفعيل متعدد للكتاب']);
		// end authors routes

		// news
		Route::get('news', ['uses' => 'NewsController@index' , 'as' => 'news' , 'name' => 'الأخبار']);

		Route::get('news/create', ['uses' => 'NewsController@create' , 'as' => 'newsCreate' , 'name' => 'أضافة خبر']);

		Route::post('news', ['uses' => 'NewsController@store']);

		Route::get('news/{id}/edit', ['uses' => 'NewsController@edit' , 'as' => 'newsEdit' , 'name' => 'تعديل بيانات خبر']);

		Route::put('news/{id}', ['uses' => 'NewsController@update']);

		Route::delete('news/{id}', ['uses' => 'NewsController@destroy' , 'as' => 'newsDestroy' , 'name' => 'حذف خبر']);

		Route::delete('news/destroy/all', ['uses' => 'NewsController@deleteAll' , 'as' => 'newsDestroyMultiple' , 'name' => 'حذف  متعدد للأخبار']);

		Route::delete('news/active/all', ['uses' => 'NewsController@activeAll' , 'as' => 'newsactiveMultiple' , 'name' => 'تفعيل متعدد للأخبار']);
		// end news routes

		// editions
		Route::get('editions', ['uses' => 'EditionsController@index' , 'as' => 'editions' , 'name' => 'الطبعات']);

		Route::get('editions/create', ['uses' => 'EditionsController@create' , 'as' => 'editionsCreate' , 'name' => 'أضافة طبعة']);

		Route::post('editions', ['uses' => 'EditionsController@store']);

		Route::get('editions/{id}/edit', ['uses' => 'EditionsController@edit' , 'as' => 'editionsEdit' , 'name' => 'تعديل بيانات طبعة']);

		Route::put('editions/{id}', ['uses' => 'EditionsController@update']);

		Route::delete('editions/{id}', ['uses' => 'EditionsController@destroy' , 'as' => 'editionsDestroy' , 'name' => 'حذف طبعة']);

		Route::delete('editions/destroy/all', ['uses' => 'EditionsController@deleteAll' , 'as' => 'editionsDestroyMultiple' , 'name' => 'حذف  متعدد  للطبعات']);

		Route::delete('editions/active/all', ['uses' => 'EditionsController@activeAll' , 'as' => 'editionsactiveMultiple' , 'name' => 'تفعيل متعدد  للطبعات']);
		// end editions routes

		// archives
		Route::get('archives', ['uses' => 'ArchivesController@index' , 'as' => 'archives' , 'name' => 'الأرشيف']);

		Route::get('archives/create', ['uses' => 'ArchivesController@create' , 'as' => 'archivesCreate' , 'name' => 'أضافة طبعة مؤرشفة']);

		Route::post('archives', ['uses' => 'ArchivesController@store']);

		Route::get('archives/{id}/edit', ['uses' => 'ArchivesController@edit' , 'as' => 'archivesEdit' , 'name' => 'تعديل بيانات طبعة مؤرشفة']);

		Route::put('archives/{id}', ['uses' => 'ArchivesController@update']);

		Route::delete('archives/{id}', ['uses' => 'ArchivesController@destroy' , 'as' => 'archivesDestroy' , 'name' => 'حذف طبعة مؤرشفة']);

		Route::delete('archives/destroy/all', ['uses' => 'ArchivesController@deleteAll' , 'as' => 'archivesDestroyMultiple' , 'name' => 'حذف  متعدد  للأرشيف']);

		Route::delete('archives/active/all', ['uses' => 'ArchivesController@activeAll' , 'as' => 'archivesactiveMultiple' , 'name' => 'تفعيل متعدد  للأرشيف']);
		// end archives routes

		// pages
		Route::get('pages', ['uses' => 'PagesController@index' , 'as' => 'pages' , 'name' => 'الصفحات']);

		Route::get('pages/create', ['uses' => 'PagesController@create' , 'as' => 'pagesCreate' , 'name' => 'أضافة  صفحة']);

		Route::post('pages', ['uses' => 'PagesController@store']);

		Route::get('pages/{id}/edit', ['uses' => 'PagesController@edit' , 'as' => 'pagesEdit' , 'name' => 'تعديل بيانات  صفحة']);

		Route::put('pages/{id}', ['uses' => 'PagesController@update']);

		Route::delete('pages/{id}', ['uses' => 'PagesController@destroy' , 'as' => 'pagesDestroy' , 'name' => 'حذف  صفحة']);

		Route::delete('pages/destroy/all', ['uses' => 'PagesController@deleteAll' , 'as' => 'pagesDestroyMultiple' , 'name' => 'حذف  متعدد  للصفحات']);

		Route::delete('pages/active/all', ['uses' => 'PagesController@activeAll' , 'as' => 'pagesactiveMultiple' , 'name' => 'تفعيل متعدد  للصفحات']);
		// end pages routes

		// archives
		Route::get('pagecontents', ['uses' => 'PagecontentsController@index']);
		Route::get('pagecontents/create', ['uses' => 'PagecontentsController@create']);
		Route::post('pagecontents', ['uses' => 'PagecontentsController@store']);
		Route::get('pagecontents/{id}/edit', ['uses' => 'PagecontentsController@edit']);
		Route::put('pagecontents/{id}', ['uses' => 'PagecontentsController@update']);
		Route::delete('pagecontents/{id}', ['uses' => 'PagecontentsController@destroy']);
		Route::delete('pagecontents/destroy/all', ['uses' => 'PagecontentsController@deleteAll' ]);
		Route::delete('pagecontents/active/all', ['uses' => 'PagecontentsController@activeAll']);
		// end pagecontents routes

		// sliders
		Route::get('sliders', ['uses' => 'SlidersController@index' , 'as' => 'sliders' , 'name' => 'عرض الشرائح']);

		Route::get('sliders/create', ['uses' => 'SlidersController@create' , 'as' => 'slidersCreate' , 'name' => 'أضافة  شريحة']);

		Route::post('sliders', ['uses' => 'SlidersController@store']);

		Route::get('sliders/{id}/edit', ['uses' => 'SlidersController@edit' , 'as' => 'slidersEdit' , 'name' => 'تعديل بيانات  شريحة']);

		Route::put('sliders/{id}', ['uses' => 'SlidersController@update']);

		Route::delete('sliders/{id}', ['uses' => 'SlidersController@destroy' , 'as' => 'slidersDestroy' , 'name' => 'حذف  شريحة']);

		Route::delete('sliders/destroy/all', ['uses' => 'SlidersController@deleteAll' , 'as' => 'slidersDestroyMultiple' , 'name' => 'حذف  متعدد  للشرائح']);

		Route::delete('sliders/active/all', ['uses' => 'SlidersController@activeAll' , 'as' => 'slidersactiveMultiple' , 'name' => 'تفعيل متعدد  للشرائح']);
		// end sliders routes


		// saidabouts
		Route::get('saidabouts', ['uses' => 'SaidaboutsController@index' , 'as' => 'saidabouts' , 'name' => 'قالو عنا']);

		Route::get('saidabouts/create', ['uses' => 'SaidaboutsController@create' , 'as' => 'saidaboutsCreate' , 'name' => 'أضافة  فى قالوا عنا']);

		Route::post('saidabouts', ['uses' => 'SaidaboutsController@store']);

		Route::get('saidabouts/{id}/edit', ['uses' => 'SaidaboutsController@edit' , 'as' => 'saidaboutsEdit' , 'name' => 'تعديل بيانات   فى قالوا عنا']);

		Route::put('saidabouts/{id}', ['uses' => 'SaidaboutsController@update']);

		Route::delete('saidabouts/{id}', ['uses' => 'SaidaboutsController@destroy' , 'as' => 'saidaboutsDestroy' , 'name' => 'حذف   فى قالوا عنا']);

		Route::delete('saidabouts/destroy/all', ['uses' => 'SaidaboutsController@deleteAll' , 'as' => 'saidaboutsDestroyMultiple' , 'name' => 'حذف  متعدد  لقالوا عنا']);

		Route::delete('saidabouts/active/all', ['uses' => 'SaidaboutsController@activeAll' , 'as' => 'saidaboutsactiveMultiple' , 'name' => 'تفعيل متعدد  لقالوا عنا']);
		// end saidabouts routes

		// users
		Route::get('users', ['uses' => 'UsersController@index' , 'as' => 'users' , 'name' => 'الأعضاء']);

		Route::get('users/create', ['uses' => 'UsersController@create' , 'as' => 'usersCreate' , 'name' => 'أضافة عضو']);

		Route::post('users', ['uses' => 'UsersController@store']);

		Route::get('users/{id}/edit', ['uses' => 'UsersController@edit' , 'as' => 'usersEdit' , 'name' => 'تعديل  بيانات عضو']);

		Route::put('users/{id}', ['uses' => 'UsersController@update']);

		Route::delete('users/{id}', ['uses' => 'UsersController@destroy' , 'as' => 'usersDestroy' , 'name' => 'حذف   عضو']);

		Route::delete('users/destroy/all', ['uses' => 'UsersController@deleteAll' , 'as' => 'usersDestroyMultiple' , 'name' => 'حذف  متعدد  للاعضاء ']);

		Route::delete('users/active/all', ['uses' => 'UsersController@activeAll' , 'as' => 'usersactiveMultiple' , 'name' => 'تفعيل متعدد  للاعضاء ']);
		// end users routes
		
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
