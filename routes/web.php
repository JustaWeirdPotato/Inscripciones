<?php

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

Route::get('/', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

    Route::get('/users', 'HomeController@index');
    Route::get('/users/create', 'HomeController@create')->name('create');
    Route::post('/users', 'HomeController@store')->name('store');
    Route::delete('/users/{users}', 'HomeController@destroy');
    Route::patch('/users/{users}', 'HomeController@update')->name('update');
    Route::put('/users/{users}', 'HomeController@update')->name('update2');  
    Route::get('/users/{users}', 'HomeController@show');
    Route::get('/users/{users}/edit', 'HomeController@edit')->name('edit');
    Route::get('/users/{id}/destroy', [
        'uses' => 'HomeController@destroy',
        'as' => 'admin.users.destroy'
    ])->name('destroy');
});
