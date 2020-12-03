<div class="form-group {{ $errors->has('NombreMateria') ? 'has-error' : ''}}">
    <label for="NombreMateria" class="control-label">{{ 'Nombremateria' }}</label>
    <input class="form-control" name="NombreMateria" type="text" id="NombreMateria" value="{{ isset($materia->NombreMateria) ? $materia->NombreMateria : ''}}" >
    {!! $errors->first('NombreMateria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMateriaInterno') ? 'has-error' : ''}}">
    <label for="idMateriaInterno" class="control-label">{{ 'Idmateriainterno' }}</label>
    <input class="form-control" name="idMateriaInterno" type="text" id="idMateriaInterno" value="{{ isset($materia->idMateriaInterno) ? $materia->idMateriaInterno : ''}}" >
    {!! $errors->first('idMateriaInterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMateriaOficial') ? 'has-error' : ''}}">
    <label for="idMateriaOficial" class="control-label">{{ 'Idmateriaoficial' }}</label>
    <input class="form-control" name="idMateriaOficial" type="text" id="idMateriaOficial" value="{{ isset($materia->idMateriaOficial) ? $materia->idMateriaOficial : ''}}" >
    {!! $errors->first('idMateriaOficial', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('creditos') ? 'has-error' : ''}}">
    <label for="creditos" class="control-label">{{ 'Creditos' }}</label>
    <input class="form-control" name="creditos" type="number" id="creditos" value="{{ isset($materia->creditos) ? $materia->creditos : ''}}" >
    {!! $errors->first('creditos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idReticula') ? 'has-error' : ''}}">
    <label for="idReticula" class="control-label">{{ 'Idreticula' }}</label>
    <input class="form-control" name="idReticula" type="number" id="idReticula" value="{{ isset($materia->idReticula) ? $materia->idReticula : ''}}" >
    {!! $errors->first('idReticula', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
