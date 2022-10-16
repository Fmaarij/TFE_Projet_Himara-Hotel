<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomsphoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomtype_id'
    ];


    public function typeofroom() {
        return $this->belongsTo(Typeofroom::class,'roomtype_id','id');
    }
}
