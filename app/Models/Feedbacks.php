<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
   protected $fillable = [
    'hash',
    'first_name',
    'last_name',
    'email',
    'message'
   ];
}
