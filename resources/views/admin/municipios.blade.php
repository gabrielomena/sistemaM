@extends('layouts.app')

@section('content')
    <div class="container">

        <label for="cars">Selecione o Municipio:</label>
        <select>
            @foreach($municipios as $m)
                <option value="{{$m->id}}">{{$m->nome}}</option>
            @endforeach
        </select>

    </div>
@endsection
