<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoProdutosTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //aqui apos  a criacao da tabela que comecamos os comandos:
        // usa uma string para nome da tabela, e a funcao criada eh anonima que recebe o objeto blueprint (classe do laravel) e chama de table para fazer sentido
        // CUIDADO com o PARENTESES do create, ele fica  no final de tudo, nao antes das chaves
        Schema::create('produtos', function(Blueprint $table){
            // agora as colunas, usando a variavel acima, o atributo e o nome da coluna:
            $table->bigIncrements('id');
            // para definir a quantidade de caracteres, usa virgula; se nao definir, cria com padrao perto de 700 caracteres:
            $table->string('nome', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // tenho que colocar essa funcao para se no futuro eu precisar excluir esta tabela, eu ter como. Porem soh exclui tabela inteira, nao apenas um pedaco dela.
        Schema::dropIfExists('produtos');
    }
}
