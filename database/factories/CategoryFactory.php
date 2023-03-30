<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->randomElement(['Domestic Violence','Murder Case','Assault','Theft Case','Defilement','Fraud','Rubbery','Others'])
        ];
    }
}
