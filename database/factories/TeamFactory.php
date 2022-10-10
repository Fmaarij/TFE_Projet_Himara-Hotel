<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
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
            'post'=>$this->faker->jobTitle,
            'name'=>$this->faker->name,
            'lastname'=>$this->faker->lastName,
            'details'=>$this->faker->paragraph(2),
        ];
    }
}
