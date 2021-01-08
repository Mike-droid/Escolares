<?php
    use App\Models\periodo;
    use App\Models\personale;
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Grupo {{ $grupo->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/grupos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/grupos/' . $grupo->id . '/edit') }}" title="Edit grupo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('grupos' . '/' . $grupo->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete grupo" onclick="return confirm(&quot;¿Está seguro/a de querer borrar este registro PERMANENTEMENTE?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $grupo->id }}</td>
                                    </tr>
                                    <tr><th> Nombre grupo </th>
                                        <td> {{ $grupo->NombreGrupo }} </td>
                                    </tr>
                                    <tr>
                                        <th> ID Materia Interno </th>
                                        <td> {{ $grupo->idMateriaInterno }} </td>
                                    </tr>
                                    <tr>
                                        <th> Capacidad máxima </th>
                                        <td> {{ $grupo->capacidadMaxima }} </td>
                                    </tr>
                                    <tr>
                                        <th> RFC Docente </th>
                                        {{$personal = personale::all()}}
                                        <td> {{ $grupo->rfcDocente }} </td>
                                    </tr>
                                    <tr>
                                        <th> ID periodo </th>
                                        <td> {{ $grupo->idPeriodo }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
