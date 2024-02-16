<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biblioteca;
use App\Models\Cadastro;

class BibliotecaController extends Controller
{

    public function index(){

        $cadastro = Cadastro::all();

        return view('welcome', ['cadastro'=> $cadastro]);
    }
}
