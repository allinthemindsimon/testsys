<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milk extends Model
{
    protected $fillable = [
        'amount_litres',
        'cow_id'
    ];

    public function cow()
    {
        return $this->belongsTo("App\Cow");
    }
}
