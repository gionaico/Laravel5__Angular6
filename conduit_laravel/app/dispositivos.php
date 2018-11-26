<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dispositivos extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'id',
            'slug',
            "name",
            "brand",
            "model",
            'description',
            'price',
            "origin_country"
    ];

      /**
     * Get the key name for route model binding.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the attribute name to slugify.
     *
     * @return string
     */
    public function getSlugSourceColumn()
    {
        return 'model';
    }

   
}
