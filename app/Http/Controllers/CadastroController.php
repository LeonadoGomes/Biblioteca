<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function index()
    {
        return view('layouts.cadastro.cadastro');
    }

    public function cadastrar(Request $request)
    {
        $palavraExistente = Cadastro::where('ingles', $request->ingles)->orWhere('portugues', $request->portugues)->exists();
        if ($palavraExistente) {
            session()->flash('msg', 'Palavra já cadastrada');
            return redirect('/');
        }

        $cadastro = new Cadastro;

        $cadastro->ingles = $request->ingles;
        $cadastro->portugues = $request->portugues;

        $cadastro->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $cadastro = Cadastro::findOrFail($id);
        return view('layouts.cadastro.editCadastro', ['cadastro' => $cadastro]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $cadastro = Cadastro::findOrFail($request->id)->update($data);
        session()->flash('msg1', 'Palavra Atualizada');
        return redirect('/');
    }

    public function destroy($id)
    {
        Cadastro::findOrFail($id)->delete();
        session()->flash('msg2', 'Palavra Apagada');
        return redirect('/');
    }
}
