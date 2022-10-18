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
        'star',
        'feedback',
    ];
    public function rooms(){
        return $this->belongsTo(Rooms::class);
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}



// room_id
