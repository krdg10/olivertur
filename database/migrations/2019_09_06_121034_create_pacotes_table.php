<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacotes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('condicoes');
            $table->string('inclui');
            $table->string('n_inclui');
            $table->string('pagamento');
            $table->string('preco');
            $table->string('parcelas');
            $table->string('caracteristica1');
            $table->string('caracteristica2');
            $table->string('caracteristica3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacotes');
    }
}
