<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FighterController;
use App\Models\fights;

Route::get('/fights', function() {
    return fights::all()->toJson();
});
Route::get('/fighter/{id}', [FighterController::class, "index"]);