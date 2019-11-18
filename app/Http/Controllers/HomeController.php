<?php

namespace App\Http\Controllers;

// importando a classe Usuario
use App\Usuario;

// vem padrão
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // acao de receber a rota e retornar um metodo para uma view -'echo eh provisorio'
    //substituiu echo por return view('home'), pagina criada a pouco na pasta view
    //listausuario eh para retornar todos os dados que tem na tabela usuarios, criando um objeto
    public function viewHome(){
       //return view('home');
       $usuario = new Usuario();
       $listaUsuarios = $usuario->all();
       // as duas linhas acima podem ser substituidas por:
       //$listaUsuarios = Usuario::all();

    //    dd($listaUsuarios);
       // dd substitui o var_dump e retorna a informacao mais limpa, e ele dá exit em seguida

       return view('home', ["listaUsuarios"=>$listaUsuarios]);
       // colocando a lista de usuarios - array - na view para exibir na home
    }
}
