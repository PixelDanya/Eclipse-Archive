<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facts extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'image',
        'alt',
        'title',
        'text'
    ];
}
