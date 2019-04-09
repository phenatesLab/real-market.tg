<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class District extends Model
{
   // use Searchable;

    protected $fillable = [
        'name',
        'city_id'
    ];

    public function city ()
    {
        return $this->belongsTo(City::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
