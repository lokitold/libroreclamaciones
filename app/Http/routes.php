<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('reclamo', ['as' => 'libro', 'uses' => 'ClaimController@index']);
Route::get('reclamo/p/{productcode?}', ['as' => 'libro', 'uses' => 'ClaimController@index']);
Route::post('reclamo', ['as' => 'libro-post', 'uses' => 'ClaimController@store']);

Route::auth();

Route::get('/', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});
