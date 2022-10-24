<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'tagname',

    ];
    // public function rooms(){
    //     return $this->belongsToMany(Room::class);
    // }
    //     public function catagor(){
    //     return $this->belongsToMany(Catagor::class);
    // }
    public function rooms(){
        return $this->belongsToMany(Room::class);
    }
}
