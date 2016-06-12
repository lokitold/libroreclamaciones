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



Route::get('reclamo', ['as' => 'libro', 'uses' => 'ClaimController@status']);
Route::get('reclamo/{productcode}', ['as' => 'librocode', 'uses' => 'ClaimController@index']);
Route::get('reclamo/p/{productcode?}', ['as' => 'libroproducto', 'uses' => 'ClaimController@index']);
Route::post('reclamo', ['as' => 'libro-post', 'uses' => 'ClaimController@store']);

Route::auth();


Route::group(['middleware' => ['auth','auth.product']], function () {
    Route::get('/', 'HomeController@index');
    Route::post('cambiar-rol', ['as' => 'cambiar-rol', 'uses' => 'HomeController@cambiarRol']);

    Route::resource('products', 'ProductController');
    Route::resource('users', 'UserController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('rols', 'RolController');
    Route::resource('permissionRoles', 'PermissionRoleController');
    Route::resource('userRolProducts', 'UserRolProductController');
    Route::resource('books', 'BookController');
    Route::get('books.reasignar', ['as' => 'books.reasignar', 'uses' => 'BookController@reasignar'] );

});


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

//Route::get('login', 'Auth\AuthController@getLogin');
//Route::post('login', 'Auth\AuthController@postLogin');
//Route::get('logout', 'Auth\AuthController@logout');
//
//// Registration Routes...
//Route::get('register', 'Auth\AuthController@getRegister');
//Route::post('register', 'Auth\AuthController@postRegister');
//
//// Password Reset Routes...
//Route::get('password/reset', 'Auth\PasswordController@getEmail');
//Route::post('password/email', 'Auth\PasswordController@postEmail');
//Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
//Route::post('password/reset', 'Auth\PasswordController@postReset');
//
//Route::get('/home', 'HomeController@index');

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');








