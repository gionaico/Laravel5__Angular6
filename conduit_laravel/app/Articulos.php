<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    protected $fillable = [
        'name', 'price', 'origin_country', 'brand', 'model'
    ];
}
