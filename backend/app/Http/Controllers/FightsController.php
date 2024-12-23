<?php

namespace App\Http\Controllers;

use App\Models\fights;
use App\Models\Fighter;
use App\Models\Record;
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

    public function all()
    {
        return fights::all()->toJson();
    }

    public function main_event()
    {
        return collect(fights::all())->groupBy('slug')->keys()->toJson();
    }

    public function get_fight($slug)
    {
        return collect(fights::where('slug', $slug)->get())->map(function ($fight){
            $fight->fighter_1_id = Fighter::where('id', $fight->fighter_1_id)->firstOr(function () {
                return Fighter::get_fighter($fight->fighter_1_id);
            });
            $fight->fighter_1_id->record = Record::where('fighter_id', $fight->fighter_1_id)->firstOr(function () use ($fight) {
                return Record::get_record($fight->fighter_1_id->id);
            });
            $fight->fighter_2_id = Fighter::where('id', $fight->fighter_2_id)->firstOr(function () {
                return Fighter::get_fighter($fight->fighter_2_id);
            });
            $fight->fighter_2_id->record = Record::where('fighter_id', $fight->fighter_2_id)->firstOr(function () use ($fight) {
                return Record::get_record($fight->fighter_2_id->id);
            });

            return $fight;
        })->toJson();
    }

    public function test($id){
        return Record::get_record($id);
    }
}
