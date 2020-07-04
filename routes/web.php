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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth','no.back']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/get-for-ordering', 'HomeController@getForOrdering')->name('home.for-ordering');
    

    Route::group(['prefix' => 'wbs'], function () {

        Route::group(['prefix' => 'material-receiving'], function () {
            Route::get('/', 'WBS\MaterialReceivingController@index')
                ->name('wbs.material-receiving');
        });
        
    });
});


