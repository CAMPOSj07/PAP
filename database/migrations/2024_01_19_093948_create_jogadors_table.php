<?php

// database/migrations/YYYY_MM_DD_create_jogadores_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogadoresTable extends Migration
{
    public function up()
    {
        Schema::create('jogadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('posicao');
            // Adicione mais campos conforme necessário
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jogadores');
    }
}
