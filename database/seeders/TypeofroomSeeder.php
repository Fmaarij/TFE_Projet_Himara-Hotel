<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeofroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'typeofrooms' )->insert( [ [
            'type_name' =>"Single Room",
            // 'max/5' =>  '5',
            // 'reste'=>'5',
            // 'bed'=>'1',
            // 'maxguests'=>'1',
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'type_name'=>"Double Room",
            // 'max/5' => '5',
            // 'reste'=>'5',
            // 'bed'=>'2',
            // 'maxguests'=>'2',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'type_name'=>"Family Room",
            // 'max/5' => '5',
            // 'reste'=>'5',
            // 'bed'=>'3',
            // 'maxguests'=>'3',
            'created_at' =>now(),
            'updated_at' => now()
        ],


        [
            'type_name'=>"Delux Room",
            // 'max/5' => '5',
            // 'reste'=>'5',
            // 'bed'=>'4',
            // 'maxguests'=>'4',
            'created_at' =>now(),
            'updated_at' => now()
        ],

       ] );
    }
}
