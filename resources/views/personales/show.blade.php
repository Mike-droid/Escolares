<?php
    use App\Models\departamento;
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Personales {{ $personale->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/personales') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/personales/' . $personale->id . '/edit') }}" title="Edit personale"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('personales' . '/' . $personale->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete personale" onclick="return confirm(&quot;¿Está seguro/a de querer borrar este registro PERMANENTEMENTE?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $personale->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> RFC </th>
                                        <td> {{ $personale->RFC }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nombre </th>
                                        <td> {{ $personale->Nombre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Apellido paterno </th>
                                        <td> {{ $personale->apellidoPaterno }} </td>
                                    </tr>
                                    <tr>
                                        <th> Apellido materno </th>
                                        <td> {{ $personale->apellidoMaterno }} </td>
                                    </tr>
                                    <tr>
                                        <th> ID Departamento </th>
                                        {{$departamento = departamento::all()}}
                                        @foreach ($departamento as $d)
                                        <td> {{ $d->Nombre }} </td>
                                        @endforeach
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
