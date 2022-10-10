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
        DB::table( 'teams' )->insert( [ [

            'img' =>"staff1.jpg",
            'post' =>  "Housekeeper",
            'name'=> 'James',
            'lastname'=> 'Jinny',
            'details'=>'From London, 29 years old, Bachelor degree in 2016',
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'img' =>"staff1.jpg",
            'post' =>  "Reciptionist",
            'name'=> 'Debora',
            'lastname'=> 'Stijn',
            'details'=>'From Germany, 34 years old, Bachelor degree in 2019',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'img' =>"staff1.jpg",
            'post' =>  "Chef",
            'name'=> 'Louis',
            'lastname'=> 'Tychon',
            'details'=>'From Belgium, 27 years old, Bachelor degree in 2019',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'img' =>"staff1.jpg",
            'post' =>  "Hotel Manager",
            'name'=> 'Yves',
            'lastname'=> 'Peeters',
            'details'=>'From Belgium, 29 years old, No diplome',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'img' =>"staff1.jpg",
            'post' =>  "Room Service",
            'name'=> 'Nawfel',
            'lastname'=> 'Elkhaznaoui',
            'details'=>'From Morroco, 28 years old, Bachelor degree in 2019',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'img' =>"staff1.jpg",
            'post' =>  "Marketing adviser",
            'name'=> 'Mounia',
            'lastname'=> 'Moons',
            'details'=>'From Belgium, 28 years old, Bachelor degree in 2018',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'img' =>"staff1.jpg",
            'post' =>  "Hotel manager",
            'name'=> 'Zakeria',
            'lastname'=> 'Sooudi',
            'details'=>'From Morroco, 22 years old, Bachelor degree in 2019',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'img' =>"staff1.jpg",
            'post' =>  "Room service",
            'name'=> 'Koumeil',
            'lastname'=> 'Koms',
            'details'=>'From Morroco, 29 years old, No diplome',
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
