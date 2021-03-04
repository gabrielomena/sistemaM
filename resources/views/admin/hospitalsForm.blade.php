@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-info">
                <h1>Cadastro de Hospital</h1>
            </div>
        </div>
        <form method="post" class="needs-validation" action="{{route('hospitals.store')}}">
            @csrf
            <div class="form-row">
                <div class="col-sm-8"><!--nome-->
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="col-sm-4"><!--municipio-->
                    <label for="municipio_id">Município</label>
                    <select class="form-control" id="municipio_id" name="municipio_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($municipios as $m)
                            <option value="{{$m->id}}">{{$m->nome}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col-sm-4">
                    <h5>Leitos</h5><!--table Leitos-->
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col-sm-2">
                    <label for="leito_clinico">Clínicos</label><!--Clínicos-->
                    <input type="text" style="max-width:50px;" class="form-control" id="leito_clinico" name="leito_clinico">
                </div>
                <div class="col-sm-2">
                    <label for="leito_cirurgico">Cirurgicos</label><!--Cirurgicos-->
                    <input type="text" style="max-width:50px;" class="form-control" id="leito_cirurgico" name="leito_cirurgico">
                </div>
                <div class="col-sm-2">
                    <label for="leito_obstetrico">Osbtetricos</label><!--obstetrico-->
                    <input type="text" style="max-width:50px;" class="form-control" id="leito_obstetrico" name="leito_obstetrico">
                </div>
                <div class="col-sm-2">
                    <label for="leito_pediatrico">Pediátricos</label><!--Pediátricos-->
                    <input type="text" style="max-width:50px;" class="form-control" id="leito_pediatrico" name="leito_pediatrico">
                </div>
                <div class="col-sm-2">
                    <label for="leito_outro">Outros</label><!--outros-->
                    <input type="text" style="max-width:50px;" class="form-control" id="leito_outro" name="leito_outro">
                </div>
                <div class="col-sm-2">
                    <label for="suporte_ventilatorio">Suporte Ventilatorio</label><!--Suporte Ventilatorio-->
                    <input type="text" style="max-width:50px;" class="form-control" id="suporte_ventilatorio" name="suporte_ventilatorio">
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-2">
                    <label for="uci_adulto">UCI Adulto</label><!--UCI Adultoo-->
                    <input type="text" style="max-width:50px;" class="form-control" id="uci_adulto" name="uci_adulto">
                </div>
                <div class="col-sm-4">
                    <label for="uci_pediatrico">UCI Pediátrico</label><!--UCI Pediátrico-->
                    <input type="text" style="max-width:50px;" class="form-control" id="uci_pediatrico" name="uci_pediatrico">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col-sm-4">
                    <h5>Internação</h5>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-2"> <!--internação dia-->
                    <label for="media_internacao_dia">Média Dia</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="media_internacao_dia" name="media_internacao_dia">
                </div>
                <div class="col-sm-2"> <!--internação mês-->
                    <label for="media_internacao_mes">Média Mês</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="media_internacao_mes" name="media_internacao_mes">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col-sm-4">
                    <h5>Exames Realizados</h5>
                </div>
            </div>
            <div class="form-row"> <!--Exames table-->
                <div class="col-sm-2"> <!--Mamografia-->
                    <label for="mamografia">Mamografia</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="mamografia" name="mamografia">
                </div>
                <div class="col-sm-2"> <!--Ultrassonografia-->
                    <label for="ultrassonografia">Ultrassonografia</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="ultrassonografia" name="ultrassonografia">
                </div>
                <div class="col-sm-2"> <!--Raio x-->
                    <label for="raio_x">Raio X</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="raio_x" name="raio_x">
                </div>
                <div class="col-sm-2"> <!--Eletrocardiograma-->
                    <label for="eletrocardiograma">Eletrocardiograma</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="eletrocardiograma" name="eletrocardiograma">
                </div>
                <div class="col-sm-2">
                    <label>Ano</label><!--tabela ano-->
                    <select class="form-control" id="ano_id" name="ano_id" required>
                        <option value="" selected disabled hidden>Selecione</option>
                        @foreach($anos as $an)
                            <option value="{{$an->id}}">{{$an->ano}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-4 mt-3">
                    <h5>Veículos</h5><!--table veiculos-->
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-2">
                    <label for="administrativo">Administrativos</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="administrativo" name="administrativo">
                </div>
                <div class="col-sm-2">
                    <label for="ambulancia_terrestre">Ambulância Terrestre</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="ambulancia_terrestre" name="ambulancia_terrestre">
                </div>
                <div class="col-sm-2">
                    <label for="ambulancia_fluvial">Ambulância Fluvial</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="ambulancia_fluvial" name="ambulancia_fluvial">
                </div>
                <div class="col-sm-2">
                    <label for="existente">Existente</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="existente" name="existente">
                </div>
                <div class="col-sm-2">
                    <label for="funcional">Funcional</label>
                    <input type="text" style="max-width:70px;" class="form-control" id="funcional" name="funcional">
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-2 mt-3">
                    <button class="btn btn-primary" type="submit"><span class="fa fa-save"></button>
                    <a class="btn btn-danger" title="CANCELAR" href="/hospitals"><span class="fa fa-window-close"></span></a>
                </div>
            </div>
        </form>
    </div>
@endsection



