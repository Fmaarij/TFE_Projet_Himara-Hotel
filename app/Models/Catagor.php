<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagor extends Model
{
    use HasFactory;
    protected $fillable = [
        'catgorname',

    ];
    public function roomzo(){
        return $this->belongsTo(Room::class);
    }

    public function catagor() {
        return $this->belongsTo(Catagor::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}
