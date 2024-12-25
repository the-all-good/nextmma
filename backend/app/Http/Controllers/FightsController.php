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
        $fights = collect(fights::all())->filter(function ($fight) {
            if($fight->status !== 'Cancelled'){
                return $fight;
            }
        })->groupBy('slug')->keys();
        return $fights->map(function ($slug) {
            $fight = fights::where('slug', $slug)->where('is_main', 1)->first();
            return $fight;
        })->toJson();
    }

    public function get_fight($id)
    {
        $slug = fights::where('id', $id)->first()->slug;

        return collect(fights::where('slug', $slug)->get())->map(function ($fight){
            $fight->fighter_1_id = Fighter::where('id', $fight->fighter_1_id)->firstOr(function () use ($fight) {
                return Fighter::get_fighter($fight->fighter_1_id);
            });
            $fight->fighter_1_id->record = Record::where('fighter_id', $fight->fighter_1_id)->firstOr(function () use ($fight) {
                return Record::get_record($fight->fighter_1_id->id);
            });
            $fight->fighter_2_id = Fighter::where('id', $fight->fighter_2_id)->firstOr(function () use ($fight) {
                return Fighter::get_fighter($fight->fighter_2_id);
            });
            $fight->fighter_2_id->record = Record::where('fighter_id', $fight->fighter_2_id)->firstOr(function () use ($fight) {
                return Record::get_record($fight->fighter_2_id->id);
            });

            return $fight;
        })->toJson();
    }

    public function test($id){
        return Fighter::get_fighter($id);
    }
}
