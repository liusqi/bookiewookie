<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');

// User creation, deletion
Route::resource('users', 'UsersController');
// User login and logout
Route::resource('sessions', 'SessionsController');
// Postings management
Route::resource('postings', 'PostingsController');

// Pages Controller
Route::get('pages', array(
    'as' => 'pages.index',
    'uses' => 'PagesController@index'
));
Route::get('pages', array(
    'as' => 'pages.about',
    'uses' => 'PagesController@about'
));
Route::get('pages', array(
    'as' => 'pages.contact',
    'uses' => 'PagesController@contact'
));
Route::get('pages', array(
    'as' => 'pages.bookexchange',
    'uses' => 'PagesController@bookexchange'
));
Route::get('pages', array(
    'as' => 'pages.faq',
    'uses' => 'PagesController@faq'
));
Route::get('pages', array(
    'as' => 'pages.resources',
    'uses' => 'PagesController@resources'
));
Route::get('pages', array(
    'as' => 'pages.privacy',
    'uses' => 'PagesController@privacy'
));
Route::get('pages', array(
    'as' => 'pages.termbook',
    'uses' => 'PagesController@termbook'
));