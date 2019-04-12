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

Route::get('/', 'PageController@index')->name('home');

Route::get('/about', 'PageController@getAbout')->name('about');

Route::get('/skills', 'PageController@getSkills')->name('skills');

Route::get('/experiences', 'PageController@getExperiences')->name('experience');

Route::get('/education', 'PageController@getEducation')->name('education');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
