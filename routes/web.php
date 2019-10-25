<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/login','PagesController@showLogin')->name('showLogin');
