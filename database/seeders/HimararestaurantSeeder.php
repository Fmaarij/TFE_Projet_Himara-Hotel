<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HimararestaurantSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'himararestaurants' )->insert( [
            [
                'title' =>'Himara.',
                'subtitle' =>  'RESTAURANT',
                'subpara' =>'LIVE A GOURMET DINING EXPERIENCE',
                'img' =>'restaurant1.jpg',
                'imgtitle' =>'Salat',
                'imgpara' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
                'price'=>'16.99',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'title' =>'',
                'subtitle' =>  '',
                'subpara' =>'',
                'img' =>'restaurant2.jpg',
                'imgtitle' =>'CROQUETTES',
                'imgpara' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
                'price'=>'9.99',
                'created_at' =>now(),
                'updated_at' => now(),

            ],
            [
                'title' =>'',
                'subtitle' =>  '',
                'subpara' =>'',
                'img' =>'restaurant1.jpg',
                'imgtitle' =>'Salat',
                'imgpara' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
                'price'=>'16.99',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'title' =>'',
                'subtitle' =>  '',
                'subpara' =>'',
                'img' =>'restaurant2.jpg',
                'imgtitle' =>'CROQUETTES',
                'imgpara' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
                'price'=>'9.99',
                'created_at' =>now(),
                'updated_at' => now(),

            ],
            [
                'title' =>'',
                'subtitle' =>  '',
                'subpara' =>'',
                'img' =>'restaurant1.jpg',
                'imgtitle' =>'Salat',
                'imgpara' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
                'price'=>'16.99',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'title' =>'',
                'subtitle' =>  '',
                'subpara' =>'',
                'img' =>'restaurant2.jpg',
                'imgtitle' =>'CROQUETTES',
                'imgpara' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
                'price'=>'9.99',
                'created_at' =>now(),
                'updated_at' => now(),

            ],
            [
                'title' =>'',
                'subtitle' =>  '',
                'subpara' =>'',
                'img' =>'restaurant1.jpg',
                'imgtitle' =>'Salat',
                'imgpara' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
                'price'=>'16.99',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'title' =>'',
                'subtitle' =>  '',
                'subpara' =>'',
                'img' =>'restaurant2.jpg',
                'imgtitle' =>'CROQUETTES',
                'imgpara' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
                'price'=>'9.99',
                'created_at' =>now(),
                'updated_at' => now(),

            ],
        ] );
    }
}

