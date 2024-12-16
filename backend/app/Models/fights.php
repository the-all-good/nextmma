<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Fighter;
use App\Scraper;

class fights extends Model
{
    protected $fillable = [
        'id',
        'date',
        'time',
        'timestamp',
        'slug',
        'is_main',
        'category',
        'status',
        'fighter_1_id',
        'fighter_2_id',
        'fighter_win_id'
    ];

    public function get_fighter($id)
    {
        if(!Fighter::where('id', $id)->exists()){
            $scrape = new Scraper();
            $scrape->get_fighter($id);
        }
        return Fighter::where('id', $id)->get()->first();
    }
}
