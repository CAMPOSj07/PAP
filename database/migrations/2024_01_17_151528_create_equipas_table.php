<?php
// database/migrations/yyyy_mm_dd_create_equipas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipasTable extends Migration
{
    public function up()
    {
        Schema::create('equipas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            // Adicione mais colunas conforme necessário
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipas');
    }
}
