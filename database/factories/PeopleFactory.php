<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RegistrationOrigin;
use App\Models\Status;

class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'registration_origin_id' => RegistrationOrigin::all()->random()->id,
            'status_id' => Status::all()->random()->id
        ];
    }
}
