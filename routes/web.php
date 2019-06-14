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


Route::get('/', 'WorkController@index')->name('app_homepage');

Route::get('works/{id}/{slug}', 'WorkController@show')->name('app_work_show');

Route::get('tags/{id}/{slug}', 'TagController@show')->name('app_tag_show');


//USER
Route::get('users/{id}/{name}', 'UserController@show')->name('app_user_show');
Route::get('users/{id}/{name}/edit', 'UserController@edit')->name('app_user_edit');
Route::post('users/{id}/', 'UserController@update')->name('app_user_update');


//NEWSLETTER
Route::post('newsletter','NewsletterController@store')->name('newsletter');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');;

