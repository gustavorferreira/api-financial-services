<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExpensesTypesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'expense_name' => $this->faker->name(),
            'description' => $this->faker->text(15)
        ];
    }
}
