<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Revenue;

class RevenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Revenue::factory()
            ->count(5)
            ->create();
    }
}
