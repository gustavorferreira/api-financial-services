<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\People;
use App\Models\ExpensesTypes;

class PaymentFactory extends Factory
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
            'expense_type_id' => ExpensesTypes::all()->random()->id,
            'payment_date' => $this->faker->dateTime()
        ];
    }
}
