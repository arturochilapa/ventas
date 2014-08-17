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

Route::resource('/register', 'UsersController@create');
Route::resource('/register/save', 'UsersController@store');
Route::resource('/register/confirm', 'UsersController@confirm');

Route::get('profile', array('before' => 'auth.basic', function()
{
    // Only authenticated users may enter...
}));

Route::resource('/login', 'UsersController@login');
Route::resource('/logout', 'UsersController@logout');
