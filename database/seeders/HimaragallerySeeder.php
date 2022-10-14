<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HimaragallerySeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'himaragalleries' )->insert( [
            'title' =>'Himara.',
            'coloredpart' =>  'Gallery',
            'subpara' =>'Check out our image gallery',
            'direct'=>'VIEW GALLERY IMAGES',
            'created_at' =>now(),
            'updated_at' =>now(),

             ] );
        }
    }
