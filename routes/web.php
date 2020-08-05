<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');
Route::get('/', 'MainController@index')->name('index');
Route::group([
    'middleware' => ['auth']
], function () {
    Route::group([
        'middleware' => ['is_admin'],
        'namespace' => 'Admin'
    ], function () {
        Route::get('/orders', 'OrderController@orders')->name('orders');
        Route::resource('games', 'GameController');
        Route::resource('services', 'ServiceController');
        Route::resource('serviceServers', 'ServiceServerController');
    });
    Route::get('/account', 'MainController@account')->name('account');
    Route::post('/edit', 'UserController@userEdit')->name('user-edit');


    Route::group([
        'prefix' => 'basket'
    ], function () {
        Route::post('/confirm', 'BasketController@basketConfirm')->name('basket-confirm');
    });
});
Route::get('/{game}', 'MainController@game')->name('game');
