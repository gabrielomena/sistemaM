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
                                <div class="col-sm-6">
                                    Área Territorial km²: {{$p->dados->area_territorial}}
                                    Densidade Demográfica: {{$p->dados->densidade_demografica}}
                                </div>
                                <div class="col-sm-6">
                                    Regional: {{$p->regional->nome}}<br>
                                    PIB Percapita: {{$p->dados->pib_percapita}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    População Estimada: {{$p->dados->populacao_estimada}}<br>
                                    IDH: {{$p->dados->idh}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection



