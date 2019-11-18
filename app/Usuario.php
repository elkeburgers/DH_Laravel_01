<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //model criado via  terminal, apos fazer conexao com banco de dados via .env (dados padraojah  estavam corretos)
    // public $tableName="usuarios";
    // informacao redundante porque ele jah sabe o nome da tabela por conta do nome da classe. Usado quando a tabela tem um nome diferente.
    // normalmente fica vazio aqui
}
