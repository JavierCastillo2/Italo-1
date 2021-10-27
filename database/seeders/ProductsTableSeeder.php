<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=> 'Producto1',
            'description'=> 'Descipcion1',
            'precio'=> '200.1',
            'companies_id' => '1',
            'image' => 'ff.jpg'
        ]);
    }
}
