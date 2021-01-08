<?php
    use App\Models\reticula;
?>

<div class="form-group {{ $errors->has('NombreMateria') ? 'has-error' : ''}}">
    <label for="NombreMateria" class="control-label">{{ 'Nombre materia' }}</label>
    <input class="form-control" name="NombreMateria" type="text" id="NombreMateria" value="{{ isset($materia->NombreMateria) ? $materia->NombreMateria : ''}}" >
    {!! $errors->first('NombreMateria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMateriaInterno') ? 'has-error' : ''}}">
    <label for="idMateriaInterno" class="control-label">{{ 'ID materia interno' }}</label>
    <input class="form-control" name="idMateriaInterno" type="text" id="idMateriaInterno" value="{{ isset($materia->idMateriaInterno) ? $materia->idMateriaInterno : ''}}" >
    {!! $errors->first('idMateriaInterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMateriaOficial') ? 'has-error' : ''}}">
    <label for="idMateriaOficial" class="control-label">{{ 'ID materia oficial' }}</label>
    <input class="form-control" name="idMateriaOficial" type="text" id="idMateriaOficial" value="{{ isset($materia->idMateriaOficial) ? $materia->idMateriaOficial : ''}}" >
    {!! $errors->first('idMateriaOficial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('creditos') ? 'has-error' : ''}}">
    <label for="creditos" class="control-label">{{ 'Créditos' }}</label>
    <input class="form-control" name="creditos" type="number" min="1" id="creditos" value="{{ isset($materia->creditos) ? $materia->creditos : ''}}" >
    {!! $errors->first('creditos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idReticula') ? 'has-error' : ''}}">
    <label for="idReticula" class="control-label">{{ 'Retícula' }}</label>
    <select name="idReticula" id="idReticula" class="form-control">
        {{$reticula = reticula::all()}}
        @foreach ($reticula as $r)
        <option value="{{$r->id}}">{{$r->DescripcionReticula}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
