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
}
