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
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">MUNICÍPIOS</h5>
                                <p class="card-text">Cadastre, edite ou exclua municípios no sistema.</p>
                                <a href="/municipios" class="btn btn-primary">LISTAR</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">PARTIDOS</h5>
                                <p class="card-text">Cadastre, edite ou exclua partidos no sistema.</p>
                                <a href="/partidos" class="btn btn-primary">LISTAR</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">POLÍTICOS</h5>
                                <p class="card-text">Cadastre, edite ou exclua políticos no sistema.</p>
                                <a href="" class="btn btn-primary">LISTAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
