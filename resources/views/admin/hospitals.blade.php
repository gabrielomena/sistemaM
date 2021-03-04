@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-info">
                <h1>Lista de Hospitais Cadastrados</h1>
            </div>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('hospitals.create')}}" role="button">ADICIONAR</a>
        </div>
        @foreach($hospitals as $h)
            <div class="row">
                <div class="col-sm-6">
                    {{$h->nome}}
                </div>
                <div class="col-sm-4">
                    {{$h->municipio->nome}}
                </div>
                <div class="col-sm-2">
                    <div class="form-inline">
                        <a class="btn btn-primary ml-1" title="EDITAR" href="" role="button"><span class="fa fa-edit"></span></a>
                        <form action="{{route('hospitals.destroy',$h->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="id" value="${{$h->id}}">
                            <button class="btn btn-danger mr-1 ml-1" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                        </form>
                        <button class="btn btn-primary" title="DETALHES" type="button" data-toggle="collapse" data-target="#expand{{$h->id}}" aria-expanded="false"><span class="fa fa-database"></span></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection



