<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model {
    use HasFactory;

    // protected $guarded= []; //it makes all filed noneable

    protected $fillable = [
        'img',
        'typeofroom_id',
        'availablerooms',
        // 'maxrooms',
        'bed',
        'maxguests',
        'city',
        'star',
        'Ptoshow',
        'checkin',
        'checkout',
        'description',
        'price',
        'service',
    ];
    // public function roomservices() {
    //     return $this->belongsTo( Roomservice::class, 'id' );
    // }

    public function typeofroom() {
        return $this->belongsTo(Typeofroom::class,'typeofroom_id','id');
    }
    public function roomreview() {
        return $this->hasMany(Roomreview::class);
    }

    // protected $table = "rooms";

    public function catagor() {
        return $this->belongsTo(Catagor::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
