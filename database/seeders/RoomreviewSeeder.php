<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomreviewSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'roomreviews' )->insert( [
            [
                'room_id'=>1,
                'typeofroom_id' =>1,
                'user_id'=>1,
                'star'=>3,
                'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'room_id'=>2,
                'typeofroom_id' =>1,
                'user_id'=>2,
                'star'=>3,
                'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],           [
                'room_id'=>3,
                'typeofroom_id' =>1,
                'user_id'=>3,
                'star'=>3,
                'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],           [
                'room_id'=>4,
                'typeofroom_id' =>1,
                'user_id'=>4,
                'star'=>3,
                'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],           [
                'room_id'=>5,
                'typeofroom_id' =>1,
                'user_id'=>5,
                'star'=>3,
                'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

            [
                'room_id'=>6,
                'typeofroom_id' =>1,
                'user_id'=>6,
                'star'=>5,
                'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'room_id'=>7,
                'typeofroom_id' =>1,
                'user_id'=>7,
                'star'=>5,
                'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],  [
                'room_id'=>8,
                'typeofroom_id' =>1,
                'user_id'=>8,
                'star'=>5,
                'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],  [
                'room_id'=>9,
                'typeofroom_id' =>1,
                'user_id'=>9,
                'star'=>5,
                'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            //  [
            //     'room_id'=>2,
            //     'typeofroom_id' =>1,
            //     'user_id'=>1,
            //     'star'=>5,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],


            //  [
            //     'room_id'=>3,
            //     'typeofroom_id' =>1,
            //     'user_id'=>1,
            //     'star'=>5,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],

            // [
            //     'room_id'=>3,
            //     'typeofroom_id' =>1,
            //     'user_id'=>2,
            //     'star'=>4,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>3,
            //     'typeofroom_id' =>1,
            //     'user_id'=>3,
            //     'star'=>4,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],

            // [
            //     'room_id'=>3,
            //     'typeofroom_id' =>1,
            //     'user_id'=>4,
            //     'star'=>4,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],

            // [
            //     'room_id'=>3,
            //     'typeofroom_id' =>1,
            //     'user_id'=>5,
            //     'star'=>4,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],


            // [
            //     'room_id'=>4,
            //     'typeofroom_id' =>2,
            //     'user_id'=>6,
            //     'star'=>3,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>4,
            //     'typeofroom_id' =>2,
            //     'user_id'=>7,
            //     'star'=>3,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>4,
            //     'typeofroom_id' =>2,
            //     'user_id'=>8,
            //     'star'=>3,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>4,
            //     'typeofroom_id' =>2,
            //     'user_id'=>9,
            //     'star'=>3,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>4,
            //     'typeofroom_id' =>2,
            //     'user_id'=>1,
            //     'star'=>3,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],



            // [
            //     'room_id'=>5,
            //     'typeofroom_id' =>2,
            //     'user_id'=>5,
            //     'star'=>3,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>6,
            //     'typeofroom_id' =>2,
            //     'user_id'=>6,
            //     'star'=>3,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>7,
            //     'typeofroom_id' =>3,
            //     'user_id'=>7,
            //     'star'=>5,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>8,
            //     'typeofroom_id' =>3,
            //     'user_id'=>8,
            //     'star'=>5,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>9,
            //     'typeofroom_id' =>3,
            //     'user_id'=>9,
            //     'star'=>5,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>10,
            //     'typeofroom_id' =>4,
            //     'user_id'=>2,
            //     'star'=>5,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>11,
            //     'typeofroom_id' =>4,
            //     'user_id'=>3,
            //     'star'=>5,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
            // [
            //     'room_id'=>12,
            //     'typeofroom_id' =>4,
            //     'user_id'=>5,
            //     'star'=>5,
            //     'feedback'=>'Best service ever, every thing was clean, the workers are awesome ',
            //     'created_at'=>now(),
            //     'updated_at'=>now(),
            // ],
        ] );
    }
}
