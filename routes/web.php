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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function ()
{
	Route::get('/welcome', function ()
	{
		 return view('welcome');
	});
	Route::get('/form', 'GeneralController@form')->name('registro');
	Route::get('/users', 'GeneralController@userlist')->name('users');
	Route::get('/users/delete{id}', 'GeneralController@userdelete')->name('userdelete');

	Route::post('/form/donation{id}', 'GeneralController@donation')->name('donation');

	Route::get('/donor/{id}', 'GeneralController@donor')->name('donor');
	Route::get('/form/later{id}', 'GeneralController@later')->name('later');
	Route::get('/form/no{id}', 'GeneralController@no')->name('no');
	Route::get('/form/unresponded{id}', 'GeneralController@unresponded')->name('unresponded');
	Route::get('/form/stopcalling{id}', 'GeneralController@stopcalling')->name('stopcalling');

	Route::get('/calls/{id?}', 'GeneralController@calls')->name('calls');

	Route::get('/dashboard', 'GeneralController@list')->name('lista');
});

