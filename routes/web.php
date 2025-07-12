<?php

use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;

Route::get('/poll', [PollController::class, 'index']);
Route::post('/vote/{option}', [PollController::class, 'vote']);
