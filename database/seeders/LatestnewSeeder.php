<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LatestnewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // à revoir
        DB::table( 'latesnews' )->insert( [[
            'imgname' =>'Reatuant',
            'img' =>  'restaurant.jpg',
            'videoname' =>'',
            'videolink'=>'',
            'created_at' =>now(),
            'updated_at' =>now(),

        ],
        [
            'imgname' =>'Video',
            'img' =>  'video.jpg',
            'videoname' =>'Himara Albania',
            'videolink'=>'https://www.youtube.com/watch?v=_kTDkfo46KY',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]
     ]);
    }
}
