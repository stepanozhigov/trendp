<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table = 'vacancys';

    public $timestamps = false;
    
    protected $fillable = [
        'title', 'status', 'linck_hh', 'description'
    ];
}
