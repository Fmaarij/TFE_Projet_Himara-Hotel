<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'users' )->insert( [
            [
                'name' => 'Kevin',
                'lastname' => 'Assiabo',
                'age' => 24,
                'role_id' =>4,
                'img'=>'user4.jpg',
                'email' =>'Kev@gmail.com',
                'password'=>bcrypt( 'Kev@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Bola',
                'lastname' => 'Bola',
                'age' => 24,
                'role_id' =>4,
                'img'=>'user3.jpg',
                'email' =>'bola@gmail.com',
                'password'=>bcrypt( 'bola@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Cactus',
                'lastname' => 'Mohammed',
                'age' => 29,
                'role_id' =>3,
                'img'=>'user2.jpg',
                'email' =>'cactus@gmail.com',
                'password'=>bcrypt( 'cactus@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

            [
                'name' => 'Kadri',
                'lastname' => 'Hamza',
                'age' => 25,
                'role_id' =>2,
                'img'=>'user1.jpg',
                'email' =>'kadri@gmail.com',
                'password'=>bcrypt( 'kadri@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

            [
                'name' => 'Elias',
                'lastname' => 'Daoud',
                'age' => 22,
                'role_id' =>1,
                'img'=>'admin.jpg',
                'email' =>'elias@gmail.com',
                'password'=>bcrypt( 'elias@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

        ] );
    }
}

