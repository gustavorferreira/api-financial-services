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
            'name' => $this->faker->name(),
            'registration_origin_id' => RegistrationOrigin::all()->random()->id,
            'status_id' => Status::all()->random()->id
        ];
    }
}
