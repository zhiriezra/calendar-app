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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add-event', 'HomeController@createEvent')->name('create.event');
Route::post('/store-event', 'HomeController@storeEvent')->name('store.event');
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/edit-event/{id}', 'HomeController@edit')->name('edit.event');
Route::post('/update-event/{id}', 'HomeController@updateEvent')->name('update.event');
Route::get('/remove-event/{id}', 'HomeController@destroyEvent')->name('remove.event');

Route::get('/test', 'HomeController@test')->name('test');