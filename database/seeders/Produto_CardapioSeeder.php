<?php

namespace Database\Seeders;

use App\Models\Produto_Cardapio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produto_CardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto_Cardapio::factory(10)->create();
    }
}
