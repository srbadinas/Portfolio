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

Route::group(['middleware' => 'viewed'], function() {
    Route::get('/', 'PageController@index')->name('home');

    Route::get('/about', 'PageController@getAbout')->name('about');

    Route::get('/skills', 'PageController@getSkills')->name('skills');

    Route::get('/experiences', 'PageController@getExperiences')->name('experience');

    Route::get('/education', 'PageController@getEducation')->name('education');

    Route::get('/projects', 'PageController@getProjects')->name('project');
});

//Auth::routes();

Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

//  Route::get('/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@ShowRegistrationForm']);
//  Route::post('/register', ['as' => 'register', 'uses' => 'Auth\RegisterController@register']);


Route::group(['middleware' => 'auth'], function () {
    // Project
    Route::get('admin/projects', 'ProjectController@index')->name('projects.index');
    Route::get('admin/projects/create', 'ProjectController@create')->name('projects.create');
    Route::post('admin/projects/create', 'ProjectController@store')->name('projects.store');
    Route::get('admin/projects/{id}', 'ProjectController@edit')->name('projects.edit');
    Route::put('admin/projects/{id}', 'ProjectController@update')->name('projects.update');

    Route::get('admin/projects/images/{id}', 'ProjectController@viewImages')->name('projects.images');
    Route::post('admin/projects/images/{id}', 'ProjectController@storeImage')->name('projects.images');

    // Skills
    Route::get('admin/skills', 'SkillController@index')->name('skills.index');
    Route::get('admin/skills/create', 'SkillController@create')->name('skills.create');
    Route::post('admin/skills/create', 'SkillController@store')->name('skills.store');
    Route::get('admin/skills/{id}', 'SkillController@edit')->name('skills.edit');
    Route::put('admin/skills/{id}', 'SkillController@update')->name('skills.update');
});

//Route::get('/home', 'HomeController@index')->name('home');
