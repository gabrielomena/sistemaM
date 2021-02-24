@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Partidos Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('partidos.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">SIGLA</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">AÇÕES</th>
            </tr>
            </thead>
            @foreach($partidos as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->sigla}}</td>
                    <td>{{$p->descricao}}</td>
                    <td>
                        <a class="btn btn-primary" id="" href="{{route('partidos.edit',$p)}}" role="button">EDITAR</a>
                        <a class="btn btn-danger" href="{{route('partidos.delete',$p)}}" role="button">DELETAR</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
