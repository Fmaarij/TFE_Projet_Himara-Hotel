<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'img'=>$this->faker->imageUrl,
            'typeofroom_id'=>$this->faker->numberBetween(1,4),
            'availablerooms'=>$this->faker->numberBetween(1,8),
            'maxguests'=>$this->faker->numberBetween(1,3),
            'bed'=>$this->faker->numberBetween(1,3),
            'city'=>$this->faker->city,
            'star'=>$this->faker->numberBetween(1,5),
            'description'=>$this->faker->paragraph(5),
            'price'=>$this->faker->numberBetween(47,200),
            'service' => $this->faker->numberBetween(1,11),
        ];
    }
}
// 'img',
// 'typeroom_id',
// 'availablerooms',
// // 'maxrooms',
// 'bed',
// 'maxguests',
// 'city',
// 'star',
// 'description',
// 'price',
// 'service',
