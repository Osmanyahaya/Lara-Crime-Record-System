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
             //'user_id' => User::factory(),
            //'category_id' => Category::factory(),
            'complainant_gender' =>$this->faker->randomElement(['Female','Male']),
            'complainant_age' => $this->faker->randomElement(['18','20','23','60','10']),
            'complainant_name' => $this->faker->name(),
            'complainant_tel' => $this->faker->phoneNumber(),
            'complainant_occupation' => $this->faker->randomElement(['Tearcher','Farmer','Mechanic','Programmer']),
            'region' => $this->faker->city(),
            'district' => $this->faker->city(),
            'location' => $this->faker->city(),
            'diary_of_action' => $this->faker->paragraphs(10),
            
        ];
    }
}
