<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class City extends Model
{
    //use Searchable;

    protected $fillable = ['name'];

    public function districts ()
    {
        return $this->hasMany(District::class);
    }

    public function properties ()
    {
        return $this->hasManyThrough(Property::class, District::class);
    }
}
