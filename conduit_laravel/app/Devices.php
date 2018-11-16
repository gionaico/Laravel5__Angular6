<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
     protected $fillable = [
        'name', 'price', 'origin_country', 'brand', 'model'
    ];
}
