<?php
// database/seeders/EquipasTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipasTableSeeder extends Seeder
{
    public function run()
    {
        $equipas = [
            'FC Amares',
            'CD Celeiros',
            'Arsenal Da Devesa',
            'MARCA',
            'GD Figueiredo',
            'Dumiense/CJPII',
            'Lomarense',
            'GDR Ribeira do Neiva',
            'Este FC',
            'Carreira FC',
            'FC Tadim',
            'Arsenal Crespos',
            'Freiriz e Panoiense FC',
        ];

        foreach ($equipas as $equipa) {
            DB::table('equipas')->insert([
                'nome' => $equipa,
                // Adicione mais campos, se necessário
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
