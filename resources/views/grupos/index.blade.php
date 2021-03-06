@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Grupos</div>
                    <div class="card-body">
                        <a href="{{ url('/grupos/create') }}" class="btn btn-success btn-sm" title="Add New grupo">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar nuevo
                        </a>

                        <form method="GET" action="{{ url('/grupos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Nombre grupo</th>
                                        <th>ID Materia interno</th>
                                        <th>Capacidad máxima</th>
                                        <th>RFC Docente</th>
                                        <th>ID Periodo</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($grupos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->NombreGrupo }}</td>
                                        <td>{{ $item->idMateriaInterno }}</td>
                                        <td>{{ $item->capacidadMaxima }}</td>
                                        <td>{{ $item->rfcDocente }}</td>
                                        <td>{{ $item->idPeriodo }}</td>
                                        <td>
                                            <a href="{{ url('/grupos/' . $item->id) }}" title="View grupo"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/grupos/' . $item->id . '/edit') }}" title="Edit grupo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/grupos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete grupo" onclick="return confirm(&quot;¿Está seguro/a de querer borrar este registro PERMANENTEMENTE?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $grupos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
