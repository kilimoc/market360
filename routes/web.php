<?php


Route::get('/', function () {
    return view('welcome');
});
//Logout
Route::post('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/CreateAccount','PagesController@showAccountCreation')->name('showAccountCreation');
Route::get('/New_SaccoManager','SystemUsersController@showSaccoManagerRegistrationForm')->name('newSaccoManager');
Route::post('/New_SaccoManager','SystemUsersController@storeSaccoManagerDetails')->name('newSaccoManager.submit');
Route::post('/CreateAccount','SystemUsersController@createSystemUser')->name('showAccountCreation.submit');



;



//Admin Routes
Route::prefix('admin')->group(function (){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/home','AdminController@index')->name('admin.home');

});
Route::get('login/saccomanager','Auth\LoginController@showSaccoManagerLoginForm')->name('saccomanagerLogin');
Route::post('login/saccomanager','Auth\LoginController@saccoManagerLogin')->name('saccomanagerLogin.submit');

Route::prefix('SaccoManager')->group(function (){
    Route::get('','SaccoManagerController@myDashBoard')->name('smdashboard');
    Route::get('/New_Vehicle','SaccoManagerController@newVehicleRegistrationForm')->name('newVehicle');
    Route::post('/New_Vehicle','SaccoManagerController@saveVehicleDetails')->name('newVehicle.submit');
    Route::get('/New_Owner','SaccoManagerController@newOwnerRegistrationForm')->name('newOwner');
    Route::post('/New_Owner','SaccoManagerController@saveOwnerDetails')->name('newOwner.submit');
    Route::get('/New_Driver','SaccoManagerController@newDriverRegistrationForm')->name('newDriver');
    Route::post('/New_Driver','SaccoManagerController@saveDriverDetails')->name('newDriver.submit');

    //Reports
    Route::get('/All_Vehicles','SaccoManagerController@getAllVehicles')->name('allVehicles');

});




