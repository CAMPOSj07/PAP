<?php

// database/seeders/JogadoresSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Jogador;

class JogadoresSeeder extends Seeder
{
    public function run()
    {
        Jogador::create([
            'nome' => 'Andrew',
            'posicao' => 'Guarda Redes',
        ]);

        Jogador::create([
            'nome' => 'Brian Araujo',
            'posicao' => 'Guarda Redes',
        ]);

        Jogador::create([
            'nome' => 'Marlon Maranhão',
            'posicao' => 'Guarda Redes',
        ]);

        Jogador::create([
            'nome' => 'S. Kritsyuk',
            'posicao' => 'Guarda Redes',
        ]);

        Jogador::create([
            'nome' => 'Vinícius Dias',
            'posicao' => 'Guarda Redes',
        ]);

        Jogador::create([
            'nome' => 'Felipe Silva',
            'posicao' => 'Defesa',
        ]);
        
        Jogador::create([
            'nome' => 'Gabriel Pereira',
            'posicao' => 'Defesa',
        ]);

        Jogador::create([
            'nome' => 'João Barros',
            'posicao' => 'Defesa',
        ]);

        Jogador::create([
            'nome' => 'Kiko Vilas Boas',
            'posicao' => 'Defesa',
        ]);

        Jogador::create([
            'nome' => 'Leonardo Buta',
            'posicao' => 'Defesa',
        ]);

        Jogador::create([
            'nome' => 'Né Lopos',
            'posicao' => 'Defesa',
        ]);

        Jogador::create([
            'nome' => 'Ruben Fernandes',
            'posicao' => 'Defesa',
        ]);

        Jogador::create([
            'nome' => 'Thomas Luciano',
            'posicao' => 'Defesa',
        ]);

        Jogador::create([
            'nome' => 'Zé Carlos',
            'posicao' => 'Defesa',
        ]);

        Jogador::create([
            'nome' => 'André Simões',
            'posicao' => 'Medio',
        ]);
        
        Jogador::create([
            'nome' => 'Claudio Araujo',
            'posicao' => 'Medio',
        ]);

        Jogador::create([
            'nome' => 'J. Castillo',
            'posicao' => 'Medio',
        ]);

        Jogador::create([
            'nome' => 'Fujimoto',
            'posicao' => 'Medio',
        ]);

        Jogador::create([
            'nome' => 'Dominguez',
            'posicao' => 'Medio',
        ]);

        Jogador::create([
            'nome' => 'Gbane',
            'posicao' => 'Medio',
        ]);

        Jogador::create([
            'nome' => 'Martim Neto',
            'posicao' => 'Medio',
        ]);
        
        Jogador::create([
            'nome' => 'Pedro Tiba',
            'posicao' => 'Medio',
        ]);

        Jogador::create([
            'nome' => 'Wilson',
            'posicao' => 'Medio',
        ]);

        Jogador::create([
            'nome' => 'A. Alipour',
            'posicao' => 'Avancado',
        ]);
        
        Jogador::create([
            'nome' => 'Depú',
            'posicao' => 'Avancado',
        ]);

        Jogador::create([
            'nome' => 'Félix Correia',
            'posicao' => 'Avancado',
        ]);

        Jogador::create([
            'nome' => 'Miguel Monteiro',
            'posicao' => 'Avancado',
        ]);

        Jogador::create([
            'nome' => 'Miguel Salgado',
            'posicao' => 'Avancado',
        ]);

        Jogador::create([
            'nome' => 'Miro',
            'posicao' => 'Avancado',
        ]);

        Jogador::create([
            'nome' => 'Murilo',
            'posicao' => 'Avancado',
        ]);

        Jogador::create([
            'nome' => 'Peixinho',
            'posicao' => 'Avancado',
        ]);

        Jogador::create([
            'nome' => 'T. Touré',
            'posicao' => 'Avancado',
        ]);
        // Adicione mais jogadores conforme necessário
    }
}

