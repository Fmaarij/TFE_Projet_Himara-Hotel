<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'galleries' )->insert( [ [

            'galurl' =>"staff1.jpg",
            'galcaption' =>  "Restaurant",
            'category_id' =>'1',
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'galurl' =>"staff1.jpg",
            'galcaption' =>  "Swimming pool",
            'category_id' =>'2',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'galurl' =>"staff1.jpg",
            'galcaption' =>  "Spa",
            'category_id' =>'3',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'galurl' =>"staff1.jpg",
            'galcaption' =>  "Room view",
            'category_id' =>'2',
            'created_at' =>now(),
            'updated_at' => now()
        ],


       ] );
    }
}

// 'img'=>"C:\laragon\www\ProjetSiteHimaraHotel\public\images\staff/staff1.jpg",
// 'post'=>$this->faker->jobTitle,
// 'name'=>$this->faker->name,
// 'lastname'=>$this->faker->lastName,
// 'details'=>$this->faker->paragraph(2),
