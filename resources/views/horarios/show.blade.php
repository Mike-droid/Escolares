@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Horario {{ $horario->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/horarios') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Regresar</button></a>
                        <a href="{{ url('/horarios/' . $horario->id . '/edit') }}" title="Edit horario"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('horarios' . '/' . $horario->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete horario" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $horario->id }}</td>
                                    </tr>
                                    <tr><th> Semestre </th>
                                        <td> {{ $horario->Semestre }} </td>
                                    </tr>
                                    <tr>
                                        <th> Número de control </th>
                                        <td> {{ $horario->noCtrl }} </td>
                                    </tr>
                                    <tr>
                                        <th> Numero Oficio Prorroga </th>
                                        <td> {{ $horario->numeroOficioProrroga }} </td>
                                    </tr>
                                    <tr>
                                        <th> ID periodo </th>
                                        <td> {{ $horario->idPeriodo }} </td>
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
