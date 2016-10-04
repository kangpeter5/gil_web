<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::get('/affiliates', 'PagesController@getAffiliates');
Route::get('/gallery', 'PagesController@getGallery');

Route::resource('posts','PostController');