<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RevenuesTypes;

class RevenuesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RevenuesTypes::factory()
            ->count(5)
            ->create();
    }
}
