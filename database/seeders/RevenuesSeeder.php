<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Revenues;

class RevenuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Revenues::factory()
            ->count(5)
            ->create();
    }
}
