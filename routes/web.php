<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'FrontController@index')->name('welcome');
Route::get('/donate', 'FrontController@donate')->name('donate');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/causes', 'FrontController@causes')->name('causes');
Route::get('/events', 'FrontController@events')->name('events');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/blog', 'FrontController@blog')->name('blog');
Route::get('/volunteer', 'FrontController@volunteer')->name('volunteer');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
   
    Route::get('/events', 'EventsController@index')->name('events.index');
    Route::get('/events/create', 'EventsController@create')->name('events.create');
    Route::post('/events/store', 'EventsController@store')->name('events.store');
    Route::get('/events/{id}/edit', 'EventsController@edit')->name('events.edit');
    Route::put('/events/{id}/update', 'EventsController@update')->name('events.update');
    Route::delete('/events/{id}/delete', 'EventsController@delete')->name('events.delete');
   
    Route::get('/sponsors', 'SponsorsController@index')->name('sponsors.index');
    Route::get('/sponsors/create', 'SponsorsController@create')->name('sponsors.create');
    Route::post('/sponsors/store', 'SponsorsController@store')->name('sponsors.store');
    Route::get('/sponsors/{id}/edit', 'SponsorsController@edit')->name('sponsors.edit');
    Route::put('/sponsors/{id}/update', 'SponsorsController@update')->name('sponsors.update');
    Route::delete('/sponsors/{id}/delete', 'SponsorsController@delete')->name('sponsors.delete');
    
    Route::get('/causes', 'CausesController@index')->name('causes.index');
    Route::get('/causes/create', 'CausesController@create')->name('causes.create');
    Route::post('/causes/store', 'CausesController@store')->name('causes.store');
    Route::get('/causes/{id}/edit', 'CausesController@edit')->name('causes.edit');
    Route::put('/causes/{id}/update', 'CausesController@update')->name('causes.update');
    Route::delete('/causes/{id}/delete', 'CausesController@delete')->name('causes.delete');
    
    Route::get('/volunteers', 'VolunteersController@index')->name('volunteers.index');
    Route::get('/volunteers/create', 'VolunteersController@create')->name('volunteers.create');
    Route::get('/volunteers/{id}/edit', 'VolunteersController@edit')->name('volunteers.edit');
    Route::delete('/volunteers/{id}/delete', 'VolunteersController@delete')->name('volunteers.delete');
  
    Route::get('/donations', 'DonationsController@index')->name('donations');
    
});