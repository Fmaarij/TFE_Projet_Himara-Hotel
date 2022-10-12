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
            'service_name' =>"TV",
            'service' =>  "fa fa-television",
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'service_name'=>"Wifi",
            'service' => 'fa fa-wifi',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service_name'=>"Breakfast",
            'service' => "fa fa-coffee",
            'created_at' =>now(),
            'updated_at' => now()
        ],


        [
            'service_name'=>"Full AC",
            'service' => "fa fa-ge",
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service_name'=>'3 Persons',
            'service' => ' fa fa-user-circle',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service_name'=>'Transport till airport included',
            'service' => 'fa fa-automobile',
            'created_at' =>now(),
            'updated_at' => now()
        ],

        [
            'service_name' => 'Battery charger',
            'service' => 'fa fa-battery-4',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service_name'=>"Private Bath",
            'service' => 'fa fa-shower',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'service_name'=>"Bathroom",
            'service' => 'fa fa-bath',
            'created_at' =>now(),
            'updated_at' => now()
        ],
       ] );
    }
}
