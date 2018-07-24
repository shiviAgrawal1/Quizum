<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
     protected $fillable = [
        'username','q_no','response',
    ];
}
