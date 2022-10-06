<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeofroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'max/5',
        'reste',
        'bed',
        'maxguests',
    ];
}
