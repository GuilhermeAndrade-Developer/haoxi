<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Budget;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $budget = new Budget();
        $budget->name       = Str::random('10');
        $budget->email      = Str::random('10').'@gmail.com';
        $budget->phone      = '1999999999';
        $budget->cpf_cnpj   = '53.001.559/0001-00';
        $budget->save();
    }
}
