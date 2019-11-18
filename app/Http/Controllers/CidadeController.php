<?php

namespace App\Http\Controllers;

use App\Cidade;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function viewCidade(){
      
        $cidade = new Cidade();
        $listaCidades = $cidade->all();
 
        return view('cidade', ["listaCidades"=>$listaCidades]);
     }
}
