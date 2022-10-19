<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomreview extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_id',
        'user_id',
        'typeofroom_id',
        'star',
        'feedback',

    ];
    public function rooms(){
        return $this->belongsTo(Room::class,'room_id','id');
    }
    public function typeofrooms(){
        return $this->belongsTo(typeofrooms::class,'typeofroom_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}



// room_id
