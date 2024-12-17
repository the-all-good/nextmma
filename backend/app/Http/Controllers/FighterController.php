<?php

namespace App\Http\Controllers;

use App\Scraper;
use App\Models\Fighter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FighterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $cache = Cache::get($id);
        if($cache === null){
            $fighter = Fighter::where('id', $id)->first();
        
            if(!$fighter){
                $scrape = new Scraper();
                $fighter = $scrape->get_fighter($id);
            }
            Cache::put($id, $fighter);
            $cache = $fighter;
        }
        
        if(!$cache instanceof Fighter){
            return $cache->getContent();
        }
        return $cache->toJson();
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
    public function show(Fighter $fighter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fighter $fighter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fighter $fighter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fighter $fighter)
    {
        //
    }
}
