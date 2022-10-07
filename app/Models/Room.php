<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model {
    use HasFactory;

    // protected $guarded= []; //it makes all filed noneable

    protected $fillable = [
        'img',
        'typeroom_id',
        'availablerooms',
        // 'maxrooms',
        'bed',
        'maxguests',
        'city',
        'star',
        'description',
        'price',
        'service',
    ];
    // public function roomservices() {
    //     return $this->belongsTo( Roomservice::class, 'id' );
    // }

    public function typeofroom() {
        return $this->belongsToMany(Typeofroom::class);
    }
}
