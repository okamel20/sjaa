<?php

use Faker\Generator as Faker;

$factory->define(App\Setting::class, function (Faker $faker) {
    return [
	        'app_name_en'	=> 'tasahil',
	        'app_name_ar'	=> 'تساهيل',
	        'app_logo'		=> '',
	        'fb_link'		=> 'https://www.facebook.com/',
	        'tw_link'		=> 'https://twitter.com/',
	        'gogle_link'	=> 'https://www.google.co.uk/?gws_rd=ssl',
	        'phone_one'		=> '123456789',
	        'lat'			=> '24.7086658761889',
	        'long'			=> '46.68333307503667',
	        'address_en'	=> '2832, Al Olaya, Riyadh 12244 7330, Saudi Arabia',
	        'address_ar'	=> '2832، العليا، الرياض 12244 7330، السعودية',
	        'terms_en'		=> 'test',
	        'terms_ar'		=> 'test',
	        'terms_br'		=> 'test',
	        'sefty_en'		=> 'test',
	        'sefty_ar'		=> 'test',
	        'about_en'		=> 'test',
	        'about_ar'		=> 'test',
	        'view'			=> 0,
	        'token'			=> 'test',
	    ];
});
