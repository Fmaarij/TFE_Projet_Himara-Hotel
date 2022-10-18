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
                'city' => 'San Francisco',
                'country' => 'USA',
                'age' => 24,
                'role_id' =>4,
                'latestnews_id'=>1,
                "room_id"=>1,
                'img'=>'user5.jpg',
                'email' =>'Kev@gmail.com',
                'password'=>bcrypt( 'Kev@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Kity',
                'lastname' => 'Kat',
                'city' => 'Berlin',
                'country' => 'Germany',
                'age' => 24,
                'role_id' =>4,
                'latestnews_id'=>2,
                "room_id"=>3,
                'img'=>'user4.jpg',
                'email' =>'Kity@gmail.com',
                'password'=>bcrypt( 'Kity@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Bola',
                'lastname' => 'Bola',
                'city' => 'Bratislava',
                'country' => 'Slovakia',
                'age' => 24,
                'role_id' =>4,
                'latestnews_id'=>2,
                "room_id"=>2,
                'img'=>'user3.jpg',
                'email' =>'bola@gmail.com',
                'password'=>bcrypt( 'bola@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Cactus',
                'lastname' => 'Mohammed',
                'city' => 'Amesterdam',
                'country' => 'Holand',
                'age' => 29,
                'role_id' =>3,
                'latestnews_id'=>3,
                "room_id"=>1,
                'img'=>'user2.jpg',
                'email' =>'cactus@gmail.com',
                'password'=>bcrypt( 'cactus@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

            [
                'name' => 'Kadri',
                'lastname' => 'Hamza',
                'city' => 'Copenhagen',
                'country' => 'Danmark',
                'age' => 25,
                'role_id' =>2,
                'latestnews_id'=>4,
                "room_id"=>1,
                'img'=>'user1.jpg',
                'email' =>'kadri@gmail.com',
                'password'=>bcrypt( 'kadri@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

            [
                'name' => 'Elias',
                'lastname' => 'Daoud',
                'city' => 'Delhi',
                'country' => 'India',
                'age' => 22,
                'role_id' =>1,
                'latestnews_id'=>5,
                "room_id"=>1,
                'img'=>'admin.jpg',
                'email' =>'elias@gmail.com',
                'password'=>bcrypt( 'elias@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Jinny',
                'lastname' => 'Jin',
                'city' => 'London',
                'country' => 'UK',
                'age' => 25,
                'role_id' =>4,
                'latestnews_id'=>4,
                "room_id"=>3,
                'img'=>'user6.jpg',
                'email' =>'Jinny@gmail.com',
                'password'=>bcrypt( 'Jinny@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Michael',
                'lastname' => 'Peeters',
                'city' => 'Brussels',
                'country' => 'Belgium',
                'age' => 29,
                'role_id' =>4,
                'latestnews_id'=>4,
                "room_id"=>4,
                'img'=>'user7.jpg',
                'email' =>'Michael@gmail.com',
                'password'=>bcrypt( 'Michael@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Javad',
                'lastname' => 'Yahaoui',
                'city' => 'Kabul',
                'country' => 'Afghanistan',
                'age' => 29,
                'role_id' =>4,
                'latestnews_id'=>5,
                "room_id"=>4,
                'img'=>'user8.jpg',
                'email' =>'Javad@gmail.com',
                'password'=>bcrypt( 'Javad@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ] );
    }
}

