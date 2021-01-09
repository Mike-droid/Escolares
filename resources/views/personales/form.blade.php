<?php
    use App\Models\departamento;
?>

<div class="form-group {{ $errors->has('RFC') ? 'has-error' : ''}}">
    <label for="RFC" class="control-label">{{ 'RFC' }}</label>
    @if ($formMode == 'edit')
    <input class="form-control" name="RFC" type="text" id="RFC" disabled value="{{ isset($personale->RFC) ? $personale->RFC : ''}}" >
    @else
    <input class="form-control" name="RFC" type="text" id="RFC" value="{{ isset($personale->RFC) ? $personale->RFC : ''}}" >
    @endif
    {!! $errors->first('RFC', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($personale->Nombre) ? $personale->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidoPaterno') ? 'has-error' : ''}}">
    <label for="apellidoPaterno" class="control-label">{{ 'Apellido paterno' }}</label>
    <input class="form-control" name="apellidoPaterno" type="text" id="apellidoPaterno" value="{{ isset($personale->apellidoPaterno) ? $personale->apellidoPaterno : ''}}" >
    {!! $errors->first('apellidoPaterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidoMaterno') ? 'has-error' : ''}}">
    <label for="apellidoMaterno" class="control-label">{{ 'Apellido materno' }}</label>
    <input class="form-control" name="apellidoMaterno" type="text" id="apellidoMaterno" value="{{ isset($personale->apellidoMaterno) ? $personale->apellidoMaterno : ''}}" >
    {!! $errors->first('apellidoMaterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ipDepto') ? 'has-error' : ''}}">
    <label for="ipDepto" class="control-label">{{ 'ID Departamento' }}</label>
    <select name="ipDepto" id="ipDepto" class="form-control">
        {{$departamento = departamento::all()}}
        @foreach ($departamento as $d)
            <option value="{{$d->id}}">{{$d->Nombre}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
