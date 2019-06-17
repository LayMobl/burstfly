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

Route::get('works/{id}/download/{slug}', 'WorkController@download')->name('app_work_download');

Route::get('tags/{id}/{slug}', 'TagController@show')->name('app_tag_show');

Route::get('works/{id}/{slug}/comment', 'CommentController@store')->name('app_work_comment');

//NEWSLETTER
Route::post('newsletter','NewsletterController@store')->name('newsletter');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');;



// COMMENT

Route::post('comment','CommentController@store')->name('comment_store');
