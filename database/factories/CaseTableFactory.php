<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;


class CaseTableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [

            'user_id' => 1,
            'category_id' => $this->faker->randomElement(['1','2','3']),
            'complainant_gender' =>$this->faker->randomElement(['Female','Male']),
            'complainant_age' => $this->faker->randomElement(['28','60','23','60','59','40']),
            'complainant_name' => $this->faker->name(),
            'dig_address' => 'Ns-0998790098',
            'complainant_tel' => $this->faker->phoneNumber(),
            'complainant_occupation' => $this->faker->randomElement(['Traider','Tearcher','Farmer','Mechanic','Programmer']),
            'region' => $this->faker->city(),
            'address' => $this->faker->city(),
            'district' => $this->faker->city(),
            'location' => $this->faker->city(),
            'diary_of_action' => $this->faker->paragraphs(10),
            
        ];
    }
}
