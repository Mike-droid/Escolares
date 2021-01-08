@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Materia {{ $materia->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/materias') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/materias/' . $materia->id . '/edit') }}" title="Edit materia"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('materias' . '/' . $materia->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete materia" onclick="return confirm(&quot;¿Está seguro/a de querer borrar este registro PERMANENTEMENTE?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $materia->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nombre materia </th>
                                        <td> {{ $materia->NombreMateria }} </td>
                                    </tr>
                                    <tr>
                                        <th> ID materia interno </th>
                                        <td> {{ $materia->idMateriaInterno }} </td>
                                    </tr>
                                    <tr>
                                        <th> ID materia oficial </th>
                                        <td> {{ $materia->idMateriaOficial }} </td>
                                    </tr>
                                    <tr>
                                        <th> Créditos </th>
                                        <td> {{ $materia->creditos }} </td>
                                    </tr>
                                    <tr>
                                        <th> Retícula </th>
                                        <td> {{ $materia->idReticula }} </td>
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
