<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/login','PagesController@showLogin')->name('showLogin');
Route::get('/CreateAccount','PagesController@showAccountCreation')->name('showAccountCreation');
Route::post('/CreateAccount','SystemUsersController@createSystemUser')->name('showAccountCreation.submit');
