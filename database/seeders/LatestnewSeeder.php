<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LatestnewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // à revoir
        DB::table( 'latestnews' )->insert( [[
            'img' =>  'blog-post1.jpg',
            'title' =>'10 TIPS FOR HOLIDAY TRAVEL',
            'para' =>'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
            'created_at' =>now(),
            'updated_at' =>now(),

        ],
        [
            'img' =>  'blog-post2.jpg',
            'title' =>'ENJOY YOUR HOLIDAYS',
            'para' =>'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
            'created_at' =>now(),
            'updated_at' =>now(),
        ],
        [
            'img' =>  'blog-post3.jpg',
            'title' =>'HONEYMOON AT HOTEL HIMARA',
            'para' =>'An examination of how the current political and economical climate is affecting the mental healthcare industry...',
            'created_at' =>now(),
            'updated_at' =>now(),
        ]
     ]);
    }
}
