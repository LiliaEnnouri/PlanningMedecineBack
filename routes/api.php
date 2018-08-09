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
    Route::put('/definirOrdre', 'ThemeController@definirOrdre');
});

Route::group(['prefix' => 'type'], function () {
    Route::get('/', 'TypeController@getAll');
    Route::get('/{typeId}', 'TypeController@getById');
});


Route::group(['prefix' => 'plageUnite'], function () {
    Route::post('/addPlages', 'PlageUniteController@addPlages');
});


Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout');
    Route::post('/refresh', 'Auth\LoginController@refresh');
    Route::get('/me', 'Auth\LoginController@me');

});