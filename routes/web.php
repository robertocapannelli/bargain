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

Route::get( '/', function() {
    return view( 'welcome' );
} );

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );

//Profiles routes
Route::get( '/profile/{user}', 'ProfilesController@index' )->name( 'profile.show' );

//API
Route::get('/api/watches', 'Api\WatchesController@index');


//Watches routes
Route::get( '/watches', 'WatchesController@index' )->name( 'watches.index' );
Route::post( '/watches', 'WatchesController@store' );
Route::get( '/watches/create', 'WatchesController@create' )->name( 'watches.create' );
Route::get( '/watches/{watch}', 'WatchesController@show' )->name( 'watches.show' );
Route::get( '/watches/{watch}/edit', 'WatchesController@edit' )->name( 'watches.edit' );
Route::put( '/watches/{watch}', 'WatchesController@update' );
Route::delete( '/watches/{watch}', 'WatchesController@destroy' );


