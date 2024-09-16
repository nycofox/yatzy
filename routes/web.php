<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [\App\Http\Controllers\GameController::class, 'create'])->name('create');
Route::get('game/{room_code}', [\App\Http\Controllers\GameController::class, 'show'])->name('game.show');
