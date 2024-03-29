<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->string('nome')->nullable();
            $table->integer('post_id')->unsigned()->nullable();
            $table->integer('pacote_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('pacote_id')->references('id')->on('pacotes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     * https://www.cloudways.com/blog/laravel-multiple-files-images-upload/ base do upload. ver quando for fazer
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos');
    }
}
