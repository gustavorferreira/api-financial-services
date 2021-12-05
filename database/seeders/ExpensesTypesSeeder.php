<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\ExpensesTypes;

class ExpensesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpensesTypes::factory()
            ->count(5)
            ->create();
    }
}
