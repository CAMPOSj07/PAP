<?php

// database/seeders/JogadoresTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jogador;

class JogadoresTableSeeder extends Seeder
{
    public function run()
    {
        // Criar 30 jogadores de exemplo
        Jogador::factory(30)->create();
    }
}
