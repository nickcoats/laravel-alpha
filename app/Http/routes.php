<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/**
 * General Page Routes
 */

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('team', 'PagesController@team');
Route::get('team-member/{member}', 'PagesController@team_member');
Route::get('approach', 'PagesController@services');

// Service Page Routes
Route::get('investment-wealth-management', 'PagesController@investment_wealth_management');
Route::get('business-estate-planning', 'PagesController@business_estate_planning');
Route::get('life-insurance-long-term-care', 'PagesController@insurance_long_term_care');
Route::get('corporate-retirement-plans', 'PagesController@corporate_retirement_plans');
Route::get('family-office-services', 'PagesController@family_office_services');

// Blog Routes
Route::get('news-education', 'PagesController@articles');
Route::get('news-education/{slug}', 'PagesController@view_article');

// Contact Route
Route::get('contact', 'PagesController@contact');

Route::get('login', 'HomeController@login');


/**
 * Admin Routes
 */

Route::get('admin', 'AdminController@index');


/**
 * Content Resources
 */

Route::resource('article', 'ArticlesController');
Route::resource('bio', 'BiosController');


/**
 * Authentication
 */

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/**
 * Mail Route
 */

Route::post('send-mail', function(){

	session_start();
	if( isset($_POST['name']) && strtoupper($_POST['captcha']) == $_SESSION['captcha_id'] )
	{
		$to = 'coatsnickj@gmail.com, iancampbell.kw@gmail.com';
		$subject = 'New Website Contact Form Entry';
		$headers = 'From: AlphaCMG.com' . "\r\n" . 'Reply-To: ' . $_POST['email'];

		$message = 'Name: ' . $_POST['name'] . "\n" .
		           'E-mail: ' . $_POST['email'] . "\n" .
		           'Subject: ' . $_POST['subject'] . "\n" .
		           'Message: ' . $_POST['message'];

		mail($to, $subject, $message, $headers);
	}

});
