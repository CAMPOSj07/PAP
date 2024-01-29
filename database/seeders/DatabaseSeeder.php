<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// DatabaseSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Equipa;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Equipa::create(['nome' => 'Equipa 1']);
        Equipa::create(['nome' => 'Equipa 2']);
        // Adicione outras equipas conforme necessário
    }
}
