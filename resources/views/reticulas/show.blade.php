@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">reticula {{ $reticula->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/reticulas') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/reticulas/' . $reticula->id . '/edit') }}" title="Edit reticula"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('reticulas' . '/' . $reticula->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete reticula" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $reticula->id }}</td>
                                    </tr>
                                    <tr><th> DescripcionReticula </th><td> {{ $reticula->DescripcionReticula }} </td></tr><tr><th> FechaDeVigor </th><td> {{ $reticula->FechaDeVigor }} </td></tr><tr><th> IdCarrera </th><td> {{ $reticula->idCarrera }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
