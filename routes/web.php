<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LedController;
use App\Http\Controllers\CountController;

Route::get('/', function () {
    return view('home');
});


Route::get('/', [LedController::class, 'index']);
Route::get('/toggle_led', [LedController::class, 'toggle_led']);
Route::get('/get_led_state', [LedController::class, 'get_led_state']);
Route::get('/button_pressed', [CountController::class, 'button_pressed']);