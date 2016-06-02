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
Route::post('reclamo', ['as' => 'libro-post', 'uses' => 'ClaimController@register']);

Route::auth();

Route::get('/', 'HomeController@index');
