<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API ROUTES ==================================
Route::group(["prefix" => "v1.0.0"], function()
{
    // Entrust provides route filters like the following (see docs):
    // Entrust::routeNeedsPermission('admin/post*', 'create-post');
    // Entrust::routeNeedsRole('admin/advanced*', 'owner');

    Route::post('signup', 'UsersController@create');
    Route::get('users/show', 'UsersController@show');
    Route::get('users', 'UsersController@index');
    Route::post('users/{user}', 'UsersController@update');
    Route::delete('users/{user}', 'UsersController@destroy');

    Route::post('login', 'AuthenticateController@login');

    // Routes for standard CRUD operations on resources
    Route::resource('roles',                'RolesController');
