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

Route::get('/', 'WelcomeController@index');

Route::get('action/{id}', 'WelcomeController@todoDetails');

Route::get('add', 'WelcomeController@add');

Route::get('delete', 'WelcomeController@delete');

Route::post('addTodo', 'WelcomeController@addTodo');

Route::post('deleteTodo', 'WelcomeController@deleteTodo');

//Route::get('home', 'HomeController@index');


