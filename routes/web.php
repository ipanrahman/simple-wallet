<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'auth','middleware'=>['throttle:60,1']], function () use ($router) {
    $router->post('login', [
        'uses' => 'AuthController@authenticate',
    ]);

    $router->post('register', [
        'uses' => 'AuthController@register',
    ]);
});

$router->group(['prefix' => 'api', 'middleware' => ['jwt.auth', 'throttle:60']], function () use ($router) {
    $router->get('users', 'UserController@index');
});
