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

Route::get('/', function() {
    return view('welcome');
});

// CATCH ALL ROUTE =======================================================
// all routes that are not home or api will be redirected to the frontend
// this allows Angular to route them
// Route::any('{undefinedRoute}', function ($undefinedRoute) { // TODO: Fix Catch-all
//     return view('index');
// })->where('undefinedRoute', '([A-z\d-\/_.]+)?');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// CATCH ALL ROUTE =======================================================
// all routes that are not home or api will be redirected to the frontend
// this allows angular to route them
Route::any('{undefinedRoute}', function ($undefinedRoute) { //------------------ TO-DO: Fix Catch-all
    return view('welcome');
})->where('undefinedRoute', '([A-z\d-\/_.]+)?');
