<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder {
    // foreach($aboutuse as)
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'abouts' )->insert( [
            'title' =>'Hotel Himara.',
            'year' =>  'since 1992',
            'subpara' =>'HIGH QUALITY ACCOMMODATION SERVICES',
            'para' =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda",
            'imgtitle' =>'Luxury Hotel',
            'imgpara' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
            'img'=>'logo.jpg',
            // 'provider'=>[],
            'provider' =>'[
                "provider-1.png",
                "provider-2.png",
                "provider-3.png",
                "provider-4.png"
            ]',

            'created_at' =>now(),
            'updated_at' => now(),

        ] );
    }


}

