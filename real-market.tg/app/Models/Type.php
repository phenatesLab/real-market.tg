<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Type extends Model
{
   // use Searchable;

    protected $fillable = ['name'];

    public function property ()
    {
        return $this->hasMany(Property::class);
    }
}
