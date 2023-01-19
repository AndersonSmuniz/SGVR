<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Database\Factories\CategoriaFactory;
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
        Categoria::factory(1)->create();
        Categoria::factory(1)->create(['nome'=>'Peixe']);
        Categoria::factory(1)->create(['nome'=>'Frango']);
        Categoria::factory(1)->create(['nome'=>'Bebidas',
            'categoria_id'=>1]);

    }
}
