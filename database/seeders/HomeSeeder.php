<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'homes' )->insert( [[
            'title' =>'OUR GUESTS LOVE US',
            'subtitle' =>  'WHAT OUR GUESTS ARE SAYING ABOUT US',
            'created_at' =>now(),
            'updated_at' =>now(),

        ],
        [
            'title' =>'LATEST NEWS',
            'subtitle' =>  'CHECK OUT OUR LATEST NEWS',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]
     ]);
    }
}
