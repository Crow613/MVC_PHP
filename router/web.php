<?php

use Core\Route;
use App\Http\Controllers\TestController;


Route::get('/', [TestController::class, 'index']);
Route::post('/email', [TestController::class, 'email']);
