<div class="form-group {{ $errors->has('NombreGrupo') ? 'has-error' : ''}}">
    <label for="NombreGrupo" class="control-label">{{ 'Nombregrupo' }}</label>
    <input class="form-control" name="NombreGrupo" type="text" id="NombreGrupo" value="{{ isset($grupo->NombreGrupo) ? $grupo->NombreGrupo : ''}}" >
    {!! $errors->first('NombreGrupo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMateriaInterno') ? 'has-error' : ''}}">
    <label for="idMateriaInterno" class="control-label">{{ 'Idmateriainterno' }}</label>
    <input class="form-control" name="idMateriaInterno" type="text" id="idMateriaInterno" value="{{ isset($grupo->idMateriaInterno) ? $grupo->idMateriaInterno : ''}}" >
    {!! $errors->first('idMateriaInterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacidadMaxima') ? 'has-error' : ''}}">
    <label for="capacidadMaxima" class="control-label">{{ 'Capacidadmaxima' }}</label>
    <input class="form-control" name="capacidadMaxima" type="number" id="capacidadMaxima" value="{{ isset($grupo->capacidadMaxima) ? $grupo->capacidadMaxima : ''}}" >
    {!! $errors->first('capacidadMaxima', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rfcDocente') ? 'has-error' : ''}}">
    <label for="rfcDocente" class="control-label">{{ 'Rfcdocente' }}</label>
    <input class="form-control" name="rfcDocente" type="number" id="rfcDocente" value="{{ isset($grupo->rfcDocente) ? $grupo->rfcDocente : ''}}" >
    {!! $errors->first('rfcDocente', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idPeriodo') ? 'has-error' : ''}}">
    <label for="idPeriodo" class="control-label">{{ 'Idperiodo' }}</label>
    <input class="form-control" name="idPeriodo" type="number" id="idPeriodo" value="{{ isset($grupo->idPeriodo) ? $grupo->idPeriodo : ''}}" >
    {!! $errors->first('idPeriodo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
