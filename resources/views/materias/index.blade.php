@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Materias</div>
                    <div class="card-body">
                        <a href="{{ url('/materias/create') }}" class="btn btn-success btn-sm" title="Add New materia">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar nueva
                        </a>

                        <form method="GET" action="{{ url('/materias') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>Nombre materia</th>
                                        <th>ID materia interno</th>
                                        <th>ID materia oficial</th>
                                        <th>Créditos</th>
                                        <th>ID retícula</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($materias as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->NombreMateria }}</td>
                                        <td>{{ $item->idMateriaInterno }}</td>
                                        <td>{{ $item->idMateriaOficial }}</td>
                                        <td>{{ $item->creditos }}</td>
                                        <td>{{ $item->idReticula }}</td>
                                        <td>
                                            <a href="{{ url('/materias/' . $item->id) }}" title="View materia"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/materias/' . $item->id . '/edit') }}" title="Edit materia"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/materias' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete materia" onclick="return confirm(&quot;¿Está seguro/a de querer borrar este registro PERMANENTEMENTE?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $materias->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
