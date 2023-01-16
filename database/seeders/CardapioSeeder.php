<?php

namespace Database\Seeders;

use App\Models\Cardapio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cardapio::factory(1)->create();
        Cardapio::factory(1)->create(['nome'=>'FERIADO/FDS']);
        Cardapio::factory(1)->create(['nome'=>'EVENTOS']);
        Cardapio::factory(1)->create(['nome'=>'casamentos',
            'status'=>'inativo']);
    }
}
