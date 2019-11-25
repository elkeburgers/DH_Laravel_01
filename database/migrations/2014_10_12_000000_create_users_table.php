<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // para criar uma tabela, vem pronto do laravel para completarmos.
        // primeiro parametro eh o nome da tabela, e o segundo eh a funcao blueprint e vai gerar um objeto do tipo blueprint, para transformar em sql gerando o bando de dados lah no workbench
        Schema::create('users', function (Blueprint $table) {
            // criacao de cada coluna da tabela, jah com os atributos, e no parenteses eh o nome da coluna
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    //  funcao para  deletar uma tabela
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
