<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FighterController;
use App\Http\Controllers\FightsController;
use App\Models\fights;

Route::get('/fights', [FightsController::class, 'all']);
Route::get('/events', [FightsController::class, 'main_event']);
Route::get('/events/{slug}', [FightsController::class, 'get_fight']);
Route::get('/fighter/{id}', [FighterController::class, 'index']);
Route::get('/record/{id}', [FightsController::class, 'test']);