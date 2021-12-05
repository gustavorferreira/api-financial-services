<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\People;
use App\Models\ExpenseType;

class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idpeo' => People::all()->random()->idpeo,
            'expense_type_id' => ExpenseType::all()->random()->id,
            'value' => $this->faker->randomDigit(),
            'fees' => $this->faker->randomNumber(),
            'expense_date' => $this->faker->date(),
            'reference_date' => $this->faker->date()
        ];
    }
}
