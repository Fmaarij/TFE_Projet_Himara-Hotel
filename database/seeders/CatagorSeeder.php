<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatagorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'catagors' )->insert( [
        [
            'catgorname' =>"Single Room",
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'catgorname' =>"Double Room",
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'catgorname' =>"Family Room",
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'catgorname' =>"Delux Room",
            'created_at' =>now(),
            'updated_at' => now()

        ],
       ] );
    }
}
