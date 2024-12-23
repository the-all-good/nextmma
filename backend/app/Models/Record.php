<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Scraper;

class Record extends Model
{
    protected $fillable = [
        'fighter_id',
        'win',
        'loss',
        'draw',
        'win_by_ko',
        'loss_by_ko',
        'win_by_sub',
        'loss_by_sub',
    ];

    public static function get_record($id)
    {
        if(!Record::where('fighter_id', $id)->exists()){
            $scrape = new Scraper();
            $scrape->get_record($id);
        }
        return Record::where('fighter_id', $id)->get()->first();
    }
}
