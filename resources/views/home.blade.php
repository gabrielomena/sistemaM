@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row mb-2 align-items-center">
                            <div class="col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">MUNICÍPIOS</h5>
                                        <p class="card-text">Exibe as informações e a lista de municípios.</p>
                                        <a href="/municipios" class="btn btn-primary">LISTAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">PARTIDOS</h5>
                                        <p class="card-text">Cadastre, edite ou exclua partidos no sistema.</p>
                                        <a href="/partidos" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">AUTORIDADES</h5>
                                        <p class="card-text">Cadastre, edite ou exclua autoridades no sistema.</p>
                                        <a href="/autoridades" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">HOSPITAIS</h5>
                                        <p class="card-text">Cadastre, edite ou exclua hospitais no sistema.</p>
                                        <a href="/hospitals" class="btn btn-primary">GERENCIAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
