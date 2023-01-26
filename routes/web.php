<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/{user:id}', 'show');
});

// Для примера
// Route::group(['prefix' => '/users', 'controller' => UserController::class], function () {
//     Route::get('/', 'index');
//     Route::get('/{user:id}', 'show');
// });
