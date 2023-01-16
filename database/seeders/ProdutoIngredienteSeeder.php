<?php

namespace Database\Seeders;

use App\Models\ProdutoIngrediente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoIngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProdutoIngrediente::factory(1)->create();

    }
}
