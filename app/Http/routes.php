<?php

Route::get('/', function () {
    return redirect('/system/UserRegister');
});

Route::get('/home', function () {
    return redirect('/system/UserRegister');
});

Route::get('/getstoken', function () {
	return csrf_token();
});

Route::get('/admin/EditUserPribadi/{nrp}', function ($nrp) {
	return $nrp;
});

Route::get('/system/UserRegister', 'System\SystemController@GetUserRegister');
Route::post('/system/UserRegister', 'System\SystemController@postUserRegister');
Route::post('/system/UserRegisterFile', 'System\SystemController@postUserRegisterFile');

Route::get('/system/UserFamily', 'System\SystemController@GetUserFamily');
Route::post('/system/UserFamily', 'System\SystemController@PostUserFamily');
Route::post('/system/UserFamilyFile', 'System\SystemController@PostUserFamilyFile');

Route::post('/system/UserFamilyCheck', 'System\SystemController@GetUserFamilyCheck');

Route::get('/system/UserRegisterCheck/{code}', 'System\SystemController@GetUserRegisterCheck');
Route::post('/system/test', 'System\SystemController@TEST');

Route::get('/admin/UserList', 'Admin\AdminController@GetUserList');
Route::get('/resources/csv/{code}', 'System\ResourceController@GetCSV');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'System\AuthenticationController@PostAccountRegister');
