<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'niveau'], function () {
    Route::get('/getAll', 'NiveauController@getAll');
    Route::get('/{niveauId}', 'NiveauController@getById');
});


Route::group(['prefix' => 'unite'], function () {
    Route::get('/niveau/{niveauId}', 'UniteController@getUnitesByNiveau');
});


Route::group(['prefix' => 'theme'], function () {
    Route::get('/unite/{uniteId}', 'ThemeController@getThemesByUnite');
});

Route::group(['prefix' => 'type'], function () {
    Route::get('/', 'TypeController@getAll');
    Route::get('/{typeId}', 'TypeController@getById');
});
