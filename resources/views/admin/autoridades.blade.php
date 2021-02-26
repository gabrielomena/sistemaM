@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-info">
            <h1>Lista de Políticos Cadastrados</h1>
        </div>
        <div class="text-right mb-2">
            <a class="btn btn-primary" href="{{route('autoridades.create')}}" role="button">ADICIONAR</a>
        </div>
        <table class="table table-sm">
            <thead>
            <tr>
                <th colspan="2" scope="col">NOME</th>
                <th scope="col">CARGO</th>
                <th scope="col">MUNICÍPIO</th>
            </tr>
            </thead>
            @foreach($autoridades as $a)
                <tr>
                    <td colspan="2">{{$a->nome}} <!--nome-->
                        <div class="collapse" id="expand{{$a->id}}">
                        {{$a->email}}<br> <!--email-->
                        {{$a->tel}}<br> <!--tel-->
                        {{$a->partido->sigla}} <!--partido-->
                        </div>
                    </td>
                    <td>{{$a->tipo->cargo}} <!--cargo-->
                    </td>
                    <td>{{$a->municipio->nome}} <!--municipio-->
                    </td>
                    <td>
                        <span class="form-inline">
                        <a class="btn btn-primary mr-1 ml-1" title="EDITAR" href="{{route('autoridades.edit',$a)}}" role="button"><span class="fa fa-edit"></span></a>
                            <form action="{{route('autoridades.destroy',$a)}}" method="post" class="mr-1 ml-1">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="${{$a->id}}">
                                <button class="btn btn-danger" title="EXCLUIR" onclick="return confirm('Tem Certeza?')" type="submit"><span class="fa fa-trash"></span></button>
                            </form>
                            <button class="btn btn-primary" title="DETALHES" type="button" data-toggle="collapse" data-target="#expand{{$a->id}}" aria-expanded="false"><span class="fa fa-database"></span></button>
                        </span>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
