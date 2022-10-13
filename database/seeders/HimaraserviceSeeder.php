<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HimaraserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table( 'himaraservices' )->insert( [ [
            'title' =>"Himara.",
            'coloredpart' =>  'Service',
            'subpara'=>'CHECK OUT OUR AWESOME SERVICES',
            'img'=>'restaurant.jpg',
            'imgtitle'=>'Restaurant',
            'icon_id'=>1,
            'titletitle'=>'Restaurant',
            'titlepara' =>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'created_at' =>now(),
            'updated_at' => now(),

        ],
        [
            'title' =>"Himara.",
            'coloredpart' =>  'Service',
            'subpara'=>'CHECK OUT OUR AWESOME SERVICES',
            'img'=>'spa.jpg',
            'imgtitle'=>'Spa - Beauty & Health',
            'icon_id'=>2,
            'titletitle'=>'Spa - Beauty & Health',
            'titlepara' =>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'created_at' =>now(),
            'updated_at' => now(),
        ],
        [
            'title' =>"Himara.",
            'coloredpart' =>  'Service',
            'subpara'=>'CHECK OUT OUR AWESOME SERVICES',
            'img'=>'conference.jpg',
            'imgtitle'=>'Conference Room',
            'icon_id'=>3,
            'titletitle'=>'Conference Room',
            'titlepara' =>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'created_at' =>now(),
            'updated_at' => now(),
        ],
        [
            'title' =>"
            Himara",
            'coloredpart' =>  'Service',
            'subpara'=>'CHECK OUT OUR AWESOME SERVICES',
            'img'=>'swimming.jpg',
            'imgtitle'=>'
            Swimming Pool',
            'icon_id'=>4,
            'titletitle'=>'
            Swimming Pool',
            'titlepara' =>'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.',
            'created_at' =>now(),
            'updated_at' => now(),
        ],

       ] );
    }
}
