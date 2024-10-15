<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedScheduleController;

Route::get('/feed-schedule', [FeedScheduleController::class, 'index']);
Route::post('/feed-schedule', [FeedScheduleController::class, 'store']);
Route::delete('/feed-schedule/{feedSchedule}', [FeedScheduleController::class, 'destroy']);