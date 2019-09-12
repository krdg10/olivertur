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
            $table->text('condicoes');
            $table->text('inclui');
            $table->text('n_inclui');
            $table->text('maisinformacoes');
            $table->string('pagamento')->nullable();
            $table->string('preco');
            $table->string('parcelas');
            $table->string('data')->nullable();
            $table->string('caracteristica1')->nullable();
            $table->string('caracteristica2')->nullable();
            $table->string('caracteristica3')->nullable();
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
