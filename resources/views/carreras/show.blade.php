@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Carrera {{ $carrera->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/carreras') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/carreras/' . $carrera->id . '/edit') }}" title="Edit carrera"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('carreras' . '/' . $carrera->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete carrera" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $carrera->id }}</td>
                                    </tr>
                                    <tr><th> Nombre carrera </th>
                                        <td> {{ $carrera->nombreCarrera }} </td>
                                    </tr>
                                        <tr><th> Nombre abreviado </th>
                                        <td> {{ $carrera->nombreAbreviado }} </td>
                                    </tr>
                                        <tr><th> ID Departamento </th>
                                        <td> {{ $carrera->idDepto }} </td>
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
