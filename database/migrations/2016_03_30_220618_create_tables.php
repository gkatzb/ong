<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil', function(Blueprint $table){
            $table->increments('id');
            $table->string('perfil_nome')->unique();
            $table->timestamps();
        });

        Schema::create('usuario', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_perfil')->unsigned();
            $table->string('nome');
            $table->string('login')->unique();
            $table->string('senha');
            $table->rememberToken();
            $table->foreign('id_perfil')->references('id')->on('perfil')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('materia', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome')->unique();
            $table->text('img');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('atividade', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_materia')->unsigned();
            $table->string('nome');
            $table->text('img');
            $table->string('url');
            $table->timestamps();
            $table->foreign('id_materia')->references('id')->on('materia')->onDelete('cascade');
        });

        Schema::create('subatividade', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_atividade')->unsigned();
            $table->string('nome');
            $table->string('url');
            $table->timestamps();
            $table->foreign('id_atividade')->references('id')->on('atividade')->onDelete('cascade');
        });

        Schema::create('desempenho', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_subatividade')->unsigned();
            $table->integer('erros');
            $table->integer('acertos');
            $table->datetime('date_ini');
            $table->datetime('date_fim');
            $table->timestamps();
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->foreign('id_subatividade')->references('id')->on('subatividade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');
        Schema::drop('desempenho');
        Schema::drop('subatividade');
        Schema::drop('atividade');
        Schema::drop('materia');
        Schema::drop('perfil');
    }
}
