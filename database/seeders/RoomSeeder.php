<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'rooms' )->insert( [ [
            'img' =>  "single1.jpg",
            'typeofroom_id' =>"1",
            'availablerooms'=>"8",
            'maxguests'=>'2',
            'bed'=>'1',
            'city'=>'Paris',
            'star'=>'4',
            'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
            'price'=>'230',
            'service' =>'[
                "fa fa-ge",
                "fa fa-automobile",
                "fa fa-shower",
                "fa fa-coffee"
            ]','Ptoshow'=>1,
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'img' =>  "single1.jpg",
            'typeofroom_id' =>"1",
            'availablerooms'=>"7",
            'maxguests'=>'2',
            'bed'=>'1',
            'city'=>'Paris',
            'star'=>'4',
            'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
            'price'=>'230',
            'service' =>'[
                "fa fa-ge",
                "fa fa-automobile",
                "fa fa-shower",
                "fa fa-coffee"
            ]','Ptoshow'=>1,
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'img' =>  "single1.jpg",
            'typeofroom_id' =>"1",
            'availablerooms'=>"6",
            'maxguests'=>'2',
            'bed'=>'1',
            'city'=>'Paris',
            'star'=>'4',
            'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
            'price'=>'290',
            'service' =>'[
                "fa fa-ge",
                "fa fa-automobile",
                "fa fa-shower",
                "fa fa-coffee"
            ]','Ptoshow'=>1,
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
        'img' =>  "double.jpg",
        'typeofroom_id' =>"2",
        'availablerooms'=>"8",
        'maxguests'=>'2',
        'bed'=>'1',
        'city'=>'Bruxelles',
        'star'=>'5',
        'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
        'price'=>'200',
        'service' =>'[
            "fa fa-ge",
            "fa fa-automobile",
            "fa fa-shower",
            "fa fa-coffee"
        ]',
        'Ptoshow'=>1,
        'created_at' =>now(),
        'updated_at' => now()
        ],
        [
            'img' =>  "double.jpg",
            'typeofroom_id' =>"2",
            'availablerooms'=>"7",
            'maxguests'=>'2',
            'bed'=>'1',
            'city'=>'Bruxelles',
            'star'=>'5',
            'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
            'price'=>'219',
            'service' =>'[
                "fa fa-ge",
                "fa fa-automobile",
                "fa fa-shower",
                "fa fa-coffee"
            ]','Ptoshow'=>1,
            'created_at' =>now(),
            'updated_at' => now()
            ],
            [
                'img' =>  "double.jpg",
                'typeofroom_id' =>"2",
                'availablerooms'=>"6",
                'maxguests'=>'2',
                'bed'=>'1',
                'city'=>'Bruxelles',
                'star'=>'5',
                'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
                'price'=>'210',
                'service' =>'[
                    "fa fa-ge",
                    "fa fa-automobile",
                    "fa fa-shower",
                    "fa fa-coffee"
                ]',
                'Ptoshow'=>1,
                'created_at' =>now(),
                'updated_at' => now()
                ],
        [
        'img' =>  "family.jpg",
        'typeofroom_id' =>"3",
        'availablerooms'=>"8",
        'maxguests'=>'7',
        'bed'=>'7',
        'city'=>'Paris',
        'star'=>'4',
        'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
        'price'=>'185',
        'service' =>'[
            "fa fa-ge",
            "fa fa-automobile",
            "fa fa-shower",
            "fa fa-coffee"
        ]',
        'Ptoshow'=>1,
        'created_at' =>now(),
        'updated_at' => now()
        ],
        [
            'img' =>  "family.jpg",
            'typeofroom_id' =>"3",
            'availablerooms'=>"7",
            'maxguests'=>'7',
            'bed'=>'7',
            'city'=>'Paris',
            'star'=>'4',
            'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
            'price'=>'180',
            'service' =>'[
                "fa fa-ge",
                "fa fa-automobile",
                "fa fa-shower",
                "fa fa-coffee"
            ]','Ptoshow'=>1,
            'created_at' =>now(),
            'updated_at' => now()
            ],
            [
                'img' =>  "family.jpg",
                'typeofroom_id' =>"3",
                'availablerooms'=>"6",
                'maxguests'=>'7',
                'bed'=>'7',
                'city'=>'Paris',
                'star'=>'4',
                'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
                'price'=>'165',
                'service' =>'[
                    "fa fa-ge",
                    "fa fa-automobile",
                    "fa fa-shower",
                    "fa fa-coffee"
                ]',
                'Ptoshow'=>1,
                'created_at' =>now(),
                'updated_at' => now()
                ],
        [
            'img' =>  "luxury.jpg",
            'typeofroom_id' =>"4",
            'availablerooms'=>"8",
            'maxguests'=>'5',
            'bed'=>'5',
            'city'=>'Rome',
            'star'=>'4',
            'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
            'price'=>'180',
            'service' =>'[
                "fa fa-ge",
                "fa fa-automobile",
                "fa fa-shower",
                "fa fa-coffee"
            ]','Ptoshow'=>1,
            'created_at' =>now(),
            'updated_at' => now()
            ],
            [
                'img' =>  "luxury.jpg",
                'typeofroom_id' =>"4",
                'availablerooms'=>"7",
                'maxguests'=>'5',
                'bed'=>'5',
                'city'=>'Rome',
                'star'=>'4',
                'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
                'price'=>'190',
                'service' =>'[
                    "fa fa-ge",
                    "fa fa-automobile",
                    "fa fa-shower",
                    "fa fa-coffee"
                ]',
                'Ptoshow'=>1,
                'created_at' =>now(),
                'updated_at' => now()
                ],
                [
                    'img' =>  "luxury.jpg",
                    'typeofroom_id' =>"4",
                    'availablerooms'=>"6",
                    'maxguests'=>'5',
                    'bed'=>'5',
                    'city'=>'Rome',
                    'star'=>'4',
                    'description'=>'Best room ever created','description1'=>' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda',
                    'price'=>'188',
                    'service' =>'[
                        "fa fa-ge",
                        "fa fa-automobile",
                        "fa fa-shower",
                        "fa fa-coffee"
                    ]',
                    'Ptoshow'=>1,
                    'created_at' =>now(),
                    'updated_at' => now()
                    ],

       ] );
    }
}
