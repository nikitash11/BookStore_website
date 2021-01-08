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

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/forms','PagesController@forms');


Route::resource('projects','ProjectsController');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');
Route::patch('/tasks/{task}','ProjectTasksController@update');
Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);

Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');





