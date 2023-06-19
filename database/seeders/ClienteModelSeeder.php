<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClienteModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ClienteModel::factory(10)->create();
    }
}
