<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fighter extends Model
{
    protected $fillable = [
        'id',
        'name',
        'nickname',
        'photo',
        'gender',
        'birth_date',
        'height',
        'weight',
        'reach',
        'stance',
        'category',
        'last_update',
    ];

    public static function get_fighter($id)
    {
        if(!Fighter::where('id', $id)->exists()){
            $scrape = new Scraper();
            $scrape->get_record($id);
        }
        return Fighter::where('id', $id)->get()->first();
    }
}
