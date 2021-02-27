@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-sm">
            <thead>
            <tr>
<!--                <th scope="col">ID</th>-->
                <th scope="col">NOME</th>
                <th scope="col">REGIONAL</th>
            </tr>
            </thead>
            @foreach($municipios as $p)
                <tr>
<!--                    <td>{{$p->id}}</td>-->
                    <td>{{$p->nome}}</td>
                    <td>{{$p->regional->nome}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
