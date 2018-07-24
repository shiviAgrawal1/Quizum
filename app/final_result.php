<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class final_result extends Model
{
     public $timestamps = false;
     protected $fillable = [
        'username','marks'
    ];
}
