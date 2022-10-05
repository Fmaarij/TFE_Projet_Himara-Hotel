<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'roomservices' )->insert( [ [
            'service' => 'DOUBLE BED',
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'service' => 'FREE WI-FI',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service' => 'FLAT SCREEN TV',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service' => '80 SQ MT',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service' => 'BREAKFAST',
            'created_at' =>now(),
            'updated_at' => now()
        ],


        [
            'service' => 'FULL AC',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service' => '3 PERSONS',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service' => 'LUNCH',
            'created_at' =>now(),
            'updated_at' => now()
        ],

        [
            'service' => 'BEACH VIEW',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service' => 'FREE INTERNET',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service' => 'PRIVATE TOILETTE',
            'created_at' =>now(),
            'updated_at' => now()
        ],


       ] );
    }
}
