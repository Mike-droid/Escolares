<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($departamento->Nombre) ? $departamento->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Tipo') ? 'has-error' : ''}}">
    <label for="Tipo" class="control-label">{{ 'Tipo' }}</label>
    <input class="form-control" name="Tipo" type="text" id="Tipo" value="{{ isset($departamento->Tipo) ? $departamento->Tipo : ''}}" >
    {!! $errors->first('Tipo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
