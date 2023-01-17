<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cardapio;
use App\Models\Categorias;
use App\Models\Preco;
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
        $this->call([
            TipoUsuarioSeeder::class,
            UsuarioSeeder::class,
            MesaSeeder::class,
            ReservaSeeder::class,
            PedidoSeeder::class,
            CardapioSeeder::class,
            CategoriaSeeder::class,
            ContaSeeder::class,
            ProdutoSeeder::class,
            PrecoSeeder::class,
            ItemPedidoSeeder::class,
            IngredienteSeeder::class,
            ContaSeeder::class,
            ProdutoCardapioSeeder::class,
            ProdutoIngredienteSeeder::class,

        ]);
    }
}
