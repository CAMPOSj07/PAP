<?php

// database/factories/JogadorFactory.php

namespace Database\Factories;

use App\Models\Jogador;
use Illuminate\Database\Eloquent\Factories\Factory;

class JogadorFactory extends Factory
{
    protected $model = Jogador::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'idade' => $this->faker->numberBetween(18, 35),
            'posicao' => $this->faker->randomElement(['Avançado', 'Medio', 'Defesa', 'Guarda Redes']),
            // Adicione outros campos conforme necessário
        ];
    }
}

