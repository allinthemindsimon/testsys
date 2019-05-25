<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milk extends Model
{
    protected $fillable = [
        'amount',
        'cow_id'
    ];
}
