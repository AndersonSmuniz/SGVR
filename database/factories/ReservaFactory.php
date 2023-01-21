<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'mesa_id' => 1,
            'numero_pessoas' => random_int(0, 10),
            'inicio' => now()->addDays(random_int(0, 10)),
            'status' => 'Aberto'
        ];
    }
}
