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

// API ROUTES =============================================================
Route::group(["prefix" => "v1.0.0"], function()
{
    Route::resource('albums',    'AlbumController');
    Route::resource('songs',     'SongController',     ['only' => ['index', 'show']]);
    Route::resource('playlists', 'PlaylistController', ['only' => ['index', 'show', 'create']]);
});
