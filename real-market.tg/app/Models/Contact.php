<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Contact extends Model
{
    //use Searchable;

    protected $fillable = [
        'last_name',
        'first_name',
        'email',
        'telephone',
        'subject',
        'message'
    ];
}
