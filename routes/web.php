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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Profiles routes
Route::get( '/profile/{user}', 'ProfilesController@index' )
    ->name( 'profile.show' );

//Watches routes
Route::get( '/w', 'WatchesController@index' );
Route::get( '/w/create', 'WatchesController@create' );
Route::post( '/w', 'WatchesController@store' );
Route::get( '/w/{watch}', 'WatchesController@show' );
Route::put( '/w/{watch}', 'WatchController@edit' );
Route::delete( '/w/{watch}', 'WatchesController@destroy' );


