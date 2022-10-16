<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsphotoSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'roomsphotos' )->insert( [
            [
                'roomtype_id' =>1,
                'img' =>  'single1.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>1,
                'img' =>  'single2.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>1,
                'img' =>  'single3.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>1,
                'img' =>  'single4.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>1,
                'img' =>  'single5.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>2,
                'img' =>  'double.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>2,
                'img' =>  'double1.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>2,
                'img' =>  'double2.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>2,
                'img' =>  'double3.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>2,
                'img' =>  'double4.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>3,
                'img' =>  'family.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>3,
                'img' =>  'family1.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>3,
                'img' =>  'family2.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>3,
                'img' =>  'family3.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>3,
                'img' =>  'family4.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>4,
                'img' =>  'luxury.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>4,
                'img' =>  'luxury1.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>4,
                'img' =>  'luxury2.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>4,
                'img' =>  'luxury3.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'roomtype_id' =>4,
                'img' =>  'luxury4.jpg',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
        ] );
    }
}
// $table->foreignId( 'roomtype_id' )->constrained()->onDelete( 'cascade' );
// $table->string( 'img' );
