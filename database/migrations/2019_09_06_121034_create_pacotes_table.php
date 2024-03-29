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
            $table->string('nome', 31);
            $table->string('condicoes', 601);
            $table->string('inclui', 601);
            $table->string('n_inclui', 601);
            $table->string('maisinformacoes', 601);
            $table->string('pagamento', 151)->nullable();
            $table->float('preco');
            $table->smallInteger('parcelas')->unsigned();
            $table->string('data', 51)->nullable();
            $table->string('caracteristica1', 31)->nullable();
            $table->string('caracteristica2', 31)->nullable();
            $table->string('caracteristica3', 31)->nullable();
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
