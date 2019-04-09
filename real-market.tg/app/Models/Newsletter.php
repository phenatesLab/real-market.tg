<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Newsletter extends Model
{
    //use Searchable;

    protected $fillable = ['email'];
}
