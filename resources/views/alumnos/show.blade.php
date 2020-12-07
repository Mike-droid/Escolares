@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Alumno {{ $alumno->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/alumnos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/alumnos/' . $alumno->id . '/edit') }}" title="Edit alumno"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('alumnos' . '/' . $alumno->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete alumno" onclick="return confirm(&quot;¿Está seguro/a de querer borrar este registro PERMANENTEMENTE?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $alumno->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Número de control </th>
                                        <td> {{ $alumno->noCtrl }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nombre </th>
                                        <td> {{ $alumno->Nombre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Apellido paterno </th>
                                        <td> {{ $alumno->apellidoPaterno }} </td>
                                    </tr>
                                    <tr>
                                        <th> Apellido materno </th>
                                        <td> {{ $alumno->apellidoMaterno }} </td>
                                    </tr>
                                    <tr>
                                        <th> Sexo </th>
                                        <td> {{ $alumno->sexo }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $alumno->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> Facebook </th>
                                        <td> {{ $alumno->facebook }} </td>
                                    </tr>
                                    <tr>
                                        <th> Twitter </th>
                                        <td> {{ $alumno->twitter }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefono </th>
                                        <td> {{ $alumno->telefono }} </td>
                                    </tr>
                                    <tr>
                                        <th> Inglés </th>
                                        <td> {{ $alumno->idiomaIngles }} </td>
                                    </tr>
                                    <tr>
                                        <th> Francés </th>
                                        <td> {{ $alumno->idiomaFrances }} </td>
                                    </tr>
                                    <tr>
                                        <th> Español </th>
                                        <td> {{ $alumno->idiomaEspanol }} </td>
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
