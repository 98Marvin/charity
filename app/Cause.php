<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    protected $fillable = [
        'name',
        'details',
        'image',
        'raised',
        'goal',
   ];
}
