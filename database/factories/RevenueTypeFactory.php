<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RevenueTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'revenue_name' => $this->faker->name(),
            'description' => $this->faker->text(15)
        ];
    }
}
