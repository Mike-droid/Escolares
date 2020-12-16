@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enlaces') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav class="nav justify-content-center">
                        <a class="nav-link" href="alumnos">Alumnos</a>
                        <a class="nav-link" href="carreras">Carreras</a>
                        <a class="nav-link" href="departamentos">Departamentos</a>
                        <a class="nav-link" href="grupos">Grupos</a>
                        <a class="nav-link" href="horarios">Horarios</a>
                        <a class="nav-link" href="materias">Materias</a>
                        <a class="nav-link" href="periodos">Periodos</a>
                        <a class="nav-link" href="personales">Personales</a>
                        <a class="nav-link" href="reticulas">Retículas</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
