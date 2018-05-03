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

Route::get('/', 'IndexController@index');
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
	Route::get('/dashboard', 'IndexController@dashboard')->name('dashboard');

	Route::get('/contact-list', 'ListsController@index')->name('contact-list');
	Route::get('/my-contacts', 'ListsController@listofContacts')->name('my-contacts');
	Route::post('/import-contacts', 'ListsController@importList')->name('import-contacts');
        
});


Route::get('/home', 'HomeController@index')->name('home');
