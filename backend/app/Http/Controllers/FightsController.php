<?php

namespace App\Http\Controllers;

use App\Models\fights;
use App\Models\Fighter;
use Illuminate\Http\Request;

class FightsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = fights::all();
        return view('welcome', ['fights' => $results]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(fights $fights)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fights $fights)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fights $fights)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fights $fights)
    {
        //
    }
}
