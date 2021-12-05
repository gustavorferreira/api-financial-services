<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RevenueType;

class RevenueTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RevenueType::factory()
            ->count(5)
            ->create();
    }
}
