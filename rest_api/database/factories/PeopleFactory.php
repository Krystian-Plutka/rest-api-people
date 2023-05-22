<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;


class PeopleFactory extends Factory
{
    
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'lastname' => $this->faker->lastname(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'username' => $this->faker->username(),
            'date' => $this->faker->date(),
            'telephone' => $this->faker->numberBetween(100000000, 999999999)
        ];
    }
}
