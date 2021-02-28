@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row border-bottom">
            <div class="col-lg-12">
                <div>MUNICIPIO</div>
            </div>
        </div>
        @foreach($municipios as $p)
            <div class="row">
                <div class="col-lg-6">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#expander{{$p->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$p->nome}}
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="collapse" id="expander{{$p->id}}">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <i class="fa fa-area-chart "></i> Área Territorial km²: {{$p->dados->area_territorial}}<br>
                                    <i class="fa fa-globe"></i> Densidade Demográfica: {{$p->dados->densidade_demografica}}<br>
                                </div>
                                <div class="col-sm-4">
                                    <i class="fa fa-dollar"></i> PIB: {{$p->dados->pib_percapita}}<br>
                                    <i class="fa fa-group"></i> População Estimada: {{$p->dados->populacao_estimada}}<br>
                                    <i class="fa fa-arrow-up"></i> IDH: {{$p->dados->idh}}
                                </div>
                                <div class="col-sm-3">
                                    <i class="fa fa-map-marker"></i> Regional: {{$p->regional->nome}}<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     @endforeach
    </div>
@endsection



