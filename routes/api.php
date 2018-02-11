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

// List Article
Route::get('articles', 'ArticleController@index');

// Show Article
Route::get('article/{id}', 'ArticleController@show');

// Create new article
Route::post('article','ArticleController@store');

// Update post artcile
Route::put('article','ArticleController@store');

// delete Article
Route::delete('article/{id}','ArticleController@destroy');
