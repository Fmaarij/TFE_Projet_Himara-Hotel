<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'roles')->insert( [
            [
                'role' => 'Administrator',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Moderator',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Editer',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
            [
                'role' => 'Member',
                'created_at' =>now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
