<?php

#./routes/web.php

# Route 1: App_homepage
# /
# index de WorkController
# Je suis sur la page index des works et page d'accueil
Route::get('/', 'WorkController@index')->name('app_homepage');

# Route 2: App_work_show
# /works/{id}/{slug}
# show de WorkController
# Je suis sur la page show d'un work
Route::get('works/{id}/{slug}', 'WorkController@show')->name('app_work_show');

# Route 3: App_work_download
# /works/{id}/download/{slug}
# download de WorkController
# Je suis sur la page show d'un work et je clic sur download
Route::get('works/{id}/download/{slug}', 'WorkController@download')->name('app_work_download');

# Route 4: App_tag_show
# /tags/{id}//{slug}
# show de TagController
# Je suis sur la page index d'un tag
Route::get('tags/{id}/{slug}', 'TagController@show')->name('app_tag_show');

# Route 5: App_work_comment
# /works/{id}/{slug}/comment
# store de CommentController
# Je suis sur la page show d'un work et j'enregistre un nouveau commentaire
Route::get('works/{id}/{slug}/comment', 'CommentController@store')->name('app_work_comment');

# Route 6: App_user_show
# /users/{id}/{name}
# show de UserController
# Je suis sur la page show d'un user
Route::get('users/{id}/{name}', 'UserController@show')->name('app_user_show');

# Route 7: App_user_edit
# /users/{id}/{name}
# edit de UserController
# Je suis sur la page edit d'un user
Route::get('users/{id}/{name}/edit', 'UserController@edit')->name('app_user_edit');

# Route 8: App_user_update
# /users/{id}/{name}
# update de UserController
# Je suis sur la page edit d'un user et je mets à jour
Route::post('users/{id}/{name}', 'UserController@update')->name('app_user_update');

# Route 9: App_user_create
# /register
# create de Auth\RegisterController
# Je suis sur la page de création d'un user
Route::get('/register', 'Auth\RegisterController@create')->name('app_user_create');

# Route 10: App_user_store
# register
# store de Auth\RegisterController
# Je suis sur la page de création d'un user et je valide
Route::post('register', 'Auth\RegisterController@store')->name('app_user_store');

# Route 11: App_newsletter
# newsletter
# store de NewsletterController
# Je suis sur une page et j'ajoute une newsletter
Route::post('newsletter','NewsletterController@store')->name('app_newsletter');

# Route 12: Voyager
# /admin
# Controlleur de Voyager
# Je me dirige vers le panneau d'administration
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

# Route 13: Voyager
# /logout
# logout de Auth\LoginController
# Je me déconnecte
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');;

