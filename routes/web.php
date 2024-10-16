<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedScheduleController;
use App\Http\Controllers\SiloController;

Route::get('/feed-schedule', [FeedScheduleController::class, 'index']);
Route::post('/feed-schedule', [FeedScheduleController::class, 'store']);
Route::delete('/feed-schedule/{feedSchedule}', [FeedScheduleController::class, 'destroy']);

Route::get('/silo-weight', [SiloController::class, 'showSiloWeight']);