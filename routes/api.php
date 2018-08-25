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

Route::group(['prefix' => 'seance'], function () {
    Route::get('/getAll', 'SeanceController@getAll');
    Route::get('/{seanceId}', 'SeanceController@getById');
    Route::get('/unite/{uniteId}', 'SeanceController@getSeancesByunite');
    Route::get('/withThemeWithPlage/unite/{uniteId}', 'SeanceController@getSeancesByuniteWithThemeWithPlage');

});



Route::group(['prefix' => 'unite'], function () {
    Route::get('/niveau/{niveauId}', 'UniteController@getUnitesByNiveau');
    Route::get('/affecterEnseignant','UniteController@affecterEnseignant');
});


Route::group(['prefix' => 'theme'], function () {
    Route::get('/unite/{uniteId}', 'ThemeController@getThemesByUnite');
    Route::put('/definirOrdre', 'ThemeController@definirOrdre');
    Route::get('/{themeId}', 'ThemeController@getById');

});

Route::group(['prefix' => 'type'], function () {
    Route::get('/', 'TypeController@getAll');
    Route::get('/{typeId}', 'TypeController@getById');
});


Route::group(['prefix' => 'plageUnite'], function () {
    Route::post('/addPlages', 'PlageUniteController@addPlages');
    Route::get('/{plageId}', 'PlageUniteController@getById');

});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/getAll', 'AdministrateurController@getAll');
    Route::post('/add', 'AdministrateurController@add');

});

Route::group(['prefix' => 'enseignant'], function () {
    Route::get('/getAll', 'EnseignantController@getAll');
    Route::post('/add', 'EnseignantController@add');
    Route::get('/unites/{enseignantId}', 'EnseignantController@getUnites');
});


Route::group(['middleware' => 'api','prefix' => 'auth'], function ($router) {
    Route::post('/login/admin', 'Auth\LoginController@loginAdmin');
    Route::post('/login/enseignant', 'Auth\LoginController@loginEnseignant');
    Route::post('/logout', 'Auth\LoginController@logout');
    Route::post('/refresh', 'Auth\LoginController@refresh');
    Route::get('/me', 'Auth\LoginController@me');

});