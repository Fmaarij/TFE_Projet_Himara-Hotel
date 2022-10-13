<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'providers' )->insert( [ [
            'provider_name' =>"Book Holidays",
            'img' =>  "provider-1.png",
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'provider_name'=>"Luxury Hotel",
            'img' => 'provider-2.png',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'provider_name'=>"Top Hotel",
            'img' => "provider-3.png",
            'created_at' =>now(),
            'updated_at' => now()
        ],


        [
            'provider_name'=>"E-travel",
            'img' => "provider-4.png",
            'created_at' =>now(),
            'updated_at' => now()
        ],

       ] );
    }
}
