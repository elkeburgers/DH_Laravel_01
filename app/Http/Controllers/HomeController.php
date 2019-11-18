<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // acao de receber a rota e retornar um metodo para uma view
    public function viewHome(){
        echo "Estou na home";
    }
}
