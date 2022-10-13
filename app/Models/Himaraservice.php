<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Himaraservice extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'coloredpart',
        'subpara',
        'img',
        'imgtitle',
        'icon_id',
        'titletitle',
        'titlepara',
    ];

    public function roomservice() {
        return $this->belongsTo(roomservice::class,'icon_id','id');
    }
}
