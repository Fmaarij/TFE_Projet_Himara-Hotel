<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'sliders' )->insert( [
            [
                'img'=>'slider1.jpg',
                'title1' =>'Where your Dreams True',
                'title2' =>"You'll never forget your stay",
                'title3' =>'',
                'title4' =>'',
                'waar'=>'1',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'img'=>'slider13.jpg',
                'title1' =>'Enjoy your holidays',
                'title2' =>'Family room from £89 per night',
                'title3' =>'',
                'title4' =>'',
                'waar'=>'2',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'img'=>'slider3.jpg',
                'title1' =>'Touche the dream',
                'title2' =>'Live You Myth In Himara Hotle',
                'title3' =>'Star Luxury Hotel',
                'title4' =>'',
                'waar'=>'3',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
        ] );
    }
}
