<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\ExpenseType;

class ExpenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpenseType::factory()
            ->count(5)
            ->create();
    }
}
