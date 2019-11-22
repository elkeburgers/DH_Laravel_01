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

    // aula 22.11 - passo 2
    // primeiro request é nome da rota, segundo Request com maiuscula eh a classe, e vou receber o parametro da funcao que eh um objeto, o terceiro request
    public function request(Request $request, $id=0){
      //  dd($request);
      // dd substitui o var-dump + exit
      if($id==0){
         echo "Passe um parametro.";
         // if para não retornar um erro laravel na tela quando o usuario nao informar o paramentro do id
         }else{
      dd($id);
         }
      //para retornar o id solicitado na rota. Pode ser numero ou string, ele retorna na tela o que escrevemos na url.
      }        

      //o ideal seria criar um controller para cada view, estamos usando o mesmo porque sao apenas testes
      public function exibirFormulario(){
         return view('formulario');
      }

      // para retornar as informacoes do formulario, usa a classe e o objeto request
      // todos os metodos post de formulario sao criptografadas pelo laravel, gerando um token, que o servidor exige receber junto com a cripto key para liberar os dados na tela - para isso, usamos a tag @csrf no blade
      public function cadastrarFormulario(Request $request){
         dd($request->nome);
         // ->nome para a tela retornar o dado cadastrado no campo nome do formulario  (acessar o dado, sem precisar de array associativo)
         // se quiser exbir mais de um parametro, ao inves do dd, que tem exit, usar varios echo.
         // echo ($request->nome);
         // echo ($request->idade);
      }
   
}
