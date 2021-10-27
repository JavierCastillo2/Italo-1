<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compani;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Compani::create([
            'name'=> 'Empresa1',
            'nit'=> '5554',

        ]);
    }
}
