<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{   public $timestamps = false;
    protected $fillable = [
        'question','option1','option2','option3','option4','answer',
    ];
}
