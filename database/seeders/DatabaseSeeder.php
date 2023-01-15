<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cardapio;
use App\Models\Categorias;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([TipoUsuarioSeeder::class,
            UsuarioSeeder::class,
            CardapioSeeder::class,
            CategoriaSeeder::class,
        ]);


    }
}
