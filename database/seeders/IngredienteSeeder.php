<?php

namespace Database\Seeders;

use App\Models\Ingrediente;
use Database\Factories\IngredienteFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingrediente::factory(1)->create();
        Ingrediente::factory(1)->create(['nome' => 'Salsinha']);
        Ingrediente::factory(1)->create(['nome' => 'Pimenta', 'status' => 'indisponivel']);
    }
}
