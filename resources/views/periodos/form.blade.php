<div class="form-group {{ $errors->has('FechaInicio') ? 'has-error' : ''}}">
    <label for="FechaInicio" class="control-label">{{ 'Fecha  de inicio' }}</label>
    <input class="form-control" name="FechaInicio" type="date" id="FechaInicio" value="{{ isset($periodo->FechaInicio) ? $periodo->FechaInicio : ''}}" >
    {!! $errors->first('FechaInicio', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('FechaFinal') ? 'has-error' : ''}}">
    <label for="FechaFinal" class="control-label">{{ 'Fecha final' }}</label>
    <input class="form-control" name="FechaFinal" type="date" id="FechaFinal" value="{{ isset($periodo->FechaFinal) ? $periodo->FechaFinal : ''}}" >
    {!! $errors->first('FechaFinal', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
