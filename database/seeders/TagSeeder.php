<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'tags')->insert( [
            [
                'tagname' => 'Red',
               'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'tagname' => 'Dark',
               'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'tagname' => 'Yellow',
               'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'tagname' => 'Blue',
               'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'tagname' => 'Pink',
               'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'tagname' => 'Green',
               'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'tagname' => 'Gray',
               'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'tagname' => 'Brown',
               'created_at' =>now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
