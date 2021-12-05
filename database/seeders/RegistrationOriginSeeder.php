<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegistrationOrigin;

class RegistrationOriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RegistrationOrigin::factory()
            ->count(5)
            ->create();
    }
}
