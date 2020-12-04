<?php
    use App\Models\departamento;
?>

<div class="form-group {{ $errors->has('nombreCarrera') ? 'has-error' : ''}}">
    <label for="nombreCarrera" class="control-label">{{ 'Nombre carrera' }}</label>
    <input class="form-control" name="nombreCarrera" type="text" id="nombreCarrera" value="{{ isset($carrera->nombreCarrera) ? $carrera->nombreCarrera : ''}}" >
    {!! $errors->first('nombreCarrera', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombreAbreviado') ? 'has-error' : ''}}">
    <label for="nombreAbreviado" class="control-label">{{ 'Nombre abreviado' }}</label>
    <input class="form-control" name="nombreAbreviado" type="text" id="nombreAbreviado" value="{{ isset($carrera->nombreAbreviado) ? $carrera->nombreAbreviado : ''}}" >
    {!! $errors->first('nombreAbreviado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idDepto') ? 'has-error' : ''}}">
    <label for="idDepto" class="control-label">{{ 'ID Departamento' }}</label>
    <select name="idDepto" id="idDepto" class="form-control">
        {{$departamento = departamento::all()}}
        @foreach ($departamento as $d)
            <option value="{{$d->id}}">{{$d->Nombre}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
