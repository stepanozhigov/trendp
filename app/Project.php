<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'title', 'status', 'img', 'url', 'description'
    ];
}
