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

// Route auth
$router->group(['prefix' => 'auth', 'middleware' => ['throttle:60,1']], function () use ($router) {
    $router->post('login', [
        'uses' => 'AuthController@authenticate',
    ]);

    $router->post('register', [
        'uses' => 'AuthController@register',
    ]);
});

$router->group(['prefix' => 'api', 'middleware' => ['jwt.auth', 'throttle:60,1']], function () use ($router) {
    // Route users
    $router->group(['prefix' => 'users'], function ($router) {
        $router->get('/', 'UserController@index');
        $router->get('/profile', 'UserController@profile');
    });
    // Route wallets
    $router->group(['prefix' => 'wallets'], function ($router) {
        $router->get('/deposit', 'WalletController@deposit');
    });

    // Route transactions
    $router->group(['prefix' => 'transactions'], function ($router) {
        $router->get('/', 'TransactionController@index');
        $router->post('/', 'TransactionController@store');
        $router->get('/{id}','TransactionController@show');
        $router->put('/{id}', 'TransactionController@update');
        $router->delete('/{id}', 'TransactionController@destroy');
    });
});
