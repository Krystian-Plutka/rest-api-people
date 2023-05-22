<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'people_id' => People::factory(),
            'amount' => $this->faker->numberBetween(100, 20000),
            'state' => $this->faker->state(),
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'title' => $this->faker->title(),
            'phone' => $this->faker->numberBetween(100000000, 999999999)
        
        ];
    }
}
