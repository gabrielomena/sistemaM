@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table table-sm">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
            </tr>
            </thead>
            @foreach($municipios as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nome}}</td>
                </tr>
            @endforeach
        </table>
    </div>

<!--        <label for="cars">Selecione o Municipio:</label>
        <select>
            @foreach($municipios as $m)
                <option value="{{$m->id}}">{{$m->nome}}</option>
            @endforeach
        </select>-->

    </div>
@endsection
