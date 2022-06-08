<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livros', function(Blueprint $table){
            $table->foreignId ('editora_id')->constrained('editoras');
        });
        Schema::table('midias', function(Blueprint $table){
            $table->foreignId ('livro_id')->constrained('livros');
        });
        Schema::table('comentarios', function (Blueprint $table) {
            $table->foreignId ('livro_id')->constrained('livros');
        });
        // Schema::create('livros_autores', function(Blueprint $table){
        //     $table->id();
        //     $table->foreignId ('livros_id')->constrained('livros');
        //     $table->foreignId ('autores_id')->constrained('autores');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('midias', function (Blueprint $table) {
            $table->dropForeign ('livro_id');
        });
        Schema::table('livros', function (Blueprint $table) {
            $table->dropForeign('editora_id');
        });
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropForeign('livro_id');
        });
        Schema::dropIfExists('livros_autores');
    }
};
