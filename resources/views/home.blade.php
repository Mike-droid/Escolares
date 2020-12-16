@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav class="nav justify-content-center">
                        <a href="alumnos" class="nav-link">Alumnos</a>
                        <a href="carreras" class="nav-link">Carreras</a>
                        <a href="departamentos" class="nav-link">Departamentos</a>
                        <a href="grupos" class="nav-link">Grupos</a>
                        <a href="horarios" class="nav-link">Horarios</a>
                        <a href="materias" class="nav-link">Materias</a>
                        <a href="periodos" class="nav-link">Periodos</a>
                        <a href="personales" class="nav-link">Personales</a>
                        <a href="reticulas" class="nav-link">Retículas</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
