<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'categories' )->insert( [ [

            'catname' =>"Restaurant",
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'catname' =>"Swimming pool",
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'catname' =>"Spa",
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'catname' =>"Room view",
            'created_at' =>now(),
            'updated_at' => now()

        ],
       ] );
    }
}
