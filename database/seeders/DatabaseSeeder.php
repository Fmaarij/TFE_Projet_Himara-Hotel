<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Contact::factory(1)->create();
        \App\Models\Contactinformation::factory(1)->create();
        // \App\Models\Team::factory(7)->create();
        // \App\Models\Room::factory(4)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RoomserviceSeeder::class,
            TypeofroomSeeder::class,
            TeamSeeder::class,
            CategorySeeder::class,
            GallerySeeder::class,
            WelcomemsgSeeder::class,
            AboutSeeder::class,
            ProviderSeeder::class,
            RoomSeeder::class,
            HimaraserviceSeeder::class,
            HimaragallerySeeder::class,
            HomepagephotovideoSeeder::class,
            HimararestaurantSeeder::class,
            HomeSeeder::class,
            LatestnewSeeder::class,
            RoomsphotoSeeder::class,
        ]);
    }
}
