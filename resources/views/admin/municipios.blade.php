@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row border-bottom">
            <div class="col-lg-12">
                <div>MUNICIPIO</div>
            </div>
        </div>
        @foreach($municipio as $a)
            {{-- @dd($a) --}}
            <div class="row">
                <div class="col-lg-7">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#expander{{$a->id}}" aria-expanded="true" aria-controls="collapseOne">
                        {{$a->nome}}
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="collapse" id="expander{{$a->id}}">
                        <div class="card card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#t{{$a->id}}" role="tab" aria-controls="home" aria-selected="true">Informações Gerais</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#t2{{$a->id}}" role="tab" aria-controls="profile" aria-selected="false">Autoridades</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="t{{$a->id}}" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row mt-3">
                                        <div class="col-sm-5">
                                            <i class="fa fa-area-chart "></i> Área Territorial km²: {{$a->dados->area_territorial}}<br>
                                            <i class="fa fa-globe"></i> Densidade Demográfica: {{$a->dados->densidade_demografica}}<br>
                                        </div>
                                        <div class="col-sm-4">
                                            <i class="fa fa-dollar"></i> PIB: {{$a->dados->pib_percapita}}<br>
                                            <i class="fa fa-group"></i> População Estimada: {{$a->dados->populacao_estimada}}<br>
                                            <i class="fa fa-arrow-up"></i> IDH: {{$a->dados->idh}}
                                        </div>
                                        <div class="col-sm-3">
                                            {{-- <i class="fa fa-map-marker"></i> Regional: {{$a->regional->nome}}<br>
                                            <i class="fa fa-map-marker"></i> Estado: {{$a->regional->estado->nome}}<br> --}}

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="t2{{$a->id}}" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row mt-3">

                                        @foreach ($a->autoridade as $auto)
                                        <div class="col-sm-5">
                                            {{$auto->cargo->cargo}} : {{$auto->nome}}
                                        </div>
                                        @endforeach
                                        <div class="col-sm-4">

                                        </div>
                                        <div class="col-sm-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     @endforeach
    </div>
@endsection



