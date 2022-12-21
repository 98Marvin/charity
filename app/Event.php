<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
         'name',
         'details',
         'image',
         'date',
         'time',
         'location'
    ];
}
