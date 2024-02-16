@extends('layouts.main')
@section('title', 'Editar Cadastro de Palavras')
@section('content')

    <div id="cadastro" class="col-md-6">
        <form action="/cadastro/update/{{$cadastro->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Inglês</label>
                <input type="text" class="form-control" placeholder="Inglês" name="ingles" value="{{$cadastro->ingles}}">
            </div>
            <div class="form-group">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Português</label>
                <input type="text" class="form-control" placeholder="Português" name="portugues"  value="{{$cadastro->portugues}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>

        </form>

    </div>

@endsection

