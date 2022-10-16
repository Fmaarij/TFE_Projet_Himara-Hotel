<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeofroom extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'type',
        'room_id'

        // 'max/5',
        // 'reste',
        // 'bed',
        // 'maxguests',
    ];


    public function room() {
        return $this->hasMany(Room::class);
    }
    public function roomsphoto() {
        return $this->hasMany(Roomsphoto::class);
    }

}
