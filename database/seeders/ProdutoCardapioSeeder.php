<?php

namespace Database\Seeders;

use App\Models\ProdutoCardapio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoCardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProdutoCardapio::factory(1)->create();
    }
}
