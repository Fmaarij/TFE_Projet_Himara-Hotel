<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contactinformation>
 */
class ContactinformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            // 'adress'=>$this->faker->address,
            'adress'=>"Pl. de la Minoterie 10, 1080 Molenbeek-Saint-Jean",
            'latitude'=>50.8745298,
            'longitude'=>4.3352711,
            'email'=>$this->faker->email,
            'gsm'=>$this->faker->numerify('###-###-####'),
            'phone'=>$this->faker->numerify('###-###-####'),
            'website' => $this->faker->domainName,
        ];
    }
}
