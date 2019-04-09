<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'image',
        'property_id'
    ];

    public function property ()
    {
        return $this->belongsTo(Property::class);
    }
}
