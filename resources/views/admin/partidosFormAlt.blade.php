@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Alterar Cadastro do Partido</h1>
        </div>
        <form method="post" action="{{route('partidos.edit')}}">
            @csrf
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">SIGLA</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">AÇÕES</th>
                </tr>
                </thead>
                <tr>
                    <td><input type="text" class="form-control" name="sigla" id="sigla" required></td>
                    <td><input type="text" class="form-control" name="descricao" id="descricao" required></td>
                    <td>
                        <button class="btn btn-primary" type="submit">SALVAR</button>
                        <a class="btn btn-danger" href="/partidos">CANCELAR</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
