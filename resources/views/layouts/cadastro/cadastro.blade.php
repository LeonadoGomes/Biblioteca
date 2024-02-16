@extends('layouts.main')
@section('title', 'Cadastro de Palavras')
@section('content')

    <div id="cadastro" class="col-md-6">
        <form action="/salvar" method="POST">
            @csrf
            <div class="form-group">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Inglês</label>
                <input type="text" class="form-control" placeholder="Inglês" name="ingles">
            </div>
            <div class="form-group">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Português</label>
                <input type="text" class="form-control" placeholder="Português" name="portugues">
            </div>
            <input  id="botaoSalvar" type="submit" class="btn btn-primary" value="Salvar">

        </form>

    </div>

@endsection

