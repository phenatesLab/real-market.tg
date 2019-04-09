<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Property extends Model
{
    //use Searchable;

    protected $guarded = [];

    public function galleries ()
    {
        return $this->hasMany(Gallery::class);
    }

    public function district ()
    {
        return $this->belongsTo(District::class);
    }

    public function type ()
    {
        return $this->belongsTo(Type::class);
    }


}
