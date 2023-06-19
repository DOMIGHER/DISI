<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductoModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ProductoModel::factory(10)->create();
    }
}
