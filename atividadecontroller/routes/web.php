<?php

use app\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    Route::get('/buscar/{nome}', [GameController::class, 'search']);
    return view('welcome');
});
