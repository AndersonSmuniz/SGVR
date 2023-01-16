<?php

namespace Database\Seeders;

use App\Models\Categorias;
use Database\Factories\CategoriasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorias::factory(1)->create();
        Categorias::factory(1)->create(['nome'=>'Peixe']);
        Categorias::factory(1)->create(['nome'=>'Frango']);
        Categorias::factory(1)->create(['nome'=>'Bebidas',
            'categoria_id'=>1]);

    }
}
