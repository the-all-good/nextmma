<?php

use Illuminate\Support\Facades\Route;
use App\Scraper;
use App\Models\fights;

Route::get('/', function () {
    $fights = fights::all();
    return view('welcome', ['fights' => $fights]);
});

Route::get('/events', function() {
    // $scraper = new Scraper();
    // return $scraper->scrape_fighters();
});