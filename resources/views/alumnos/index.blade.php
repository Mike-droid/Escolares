@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Alumnos</div>
                    <div class="card-body">
                        <a href="{{ url('/alumnos/create') }}" class="btn btn-success btn-sm" title="Add New alumno">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar nuevo
                        </a>

                        <form method="GET" action="{{ url('/alumnos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar" value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NoCtrl</th>
                                        <th>Nombre</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Sexo</th>
                                        <th>Email</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Telefono</th>
                                        <th>Inglés</th>
                                        <th>Francés</th>
                                        <th>Español</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($alumnos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->noCtrl }}</td>
                                        <td>{{ $item->Nombre }}</td>
                                        <td>{{ $item->apellidoPaterno }}</td>
                                        <td>{{ $item->apellidoMaterno }}</td>
                                        <td>{{ $item->sexo }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->facebook }}</td>
                                        <td>{{ $item->twitter }}</td>
                                        <td>{{ $item->telefono }}</td>
                                        <td>{{ $item->idiomaIngles }}</td>
                                        <td>{{ $item->idiomaFrances }}</td>
                                        <td>{{ $item->idiomaEspanol }}</td>
                                        <td>
                                            <a href="{{ url('/alumnos/' . $item->id) }}" title="View alumno"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/alumnos/' . $item->id . '/edit') }}" title="Edit alumno"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/alumnos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete alumno" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $alumnos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
