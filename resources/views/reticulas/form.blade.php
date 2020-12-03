<div class="form-group {{ $errors->has('DescripcionReticula') ? 'has-error' : ''}}">
    <label for="DescripcionReticula" class="control-label">{{ 'Descripcionreticula' }}</label>
    <input class="form-control" name="DescripcionReticula" type="text" id="DescripcionReticula" value="{{ isset($reticula->DescripcionReticula) ? $reticula->DescripcionReticula : ''}}" >
    {!! $errors->first('DescripcionReticula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('FechaDeVigor') ? 'has-error' : ''}}">
    <label for="FechaDeVigor" class="control-label">{{ 'Fechadevigor' }}</label>
    <input class="form-control" name="FechaDeVigor" type="date" id="FechaDeVigor" value="{{ isset($reticula->FechaDeVigor) ? $reticula->FechaDeVigor : ''}}" >
    {!! $errors->first('FechaDeVigor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idCarrera') ? 'has-error' : ''}}">
    <label for="idCarrera" class="control-label">{{ 'Idcarrera' }}</label>
    <input class="form-control" name="idCarrera" type="number" id="idCarrera" value="{{ isset($reticula->idCarrera) ? $reticula->idCarrera : ''}}" >
    {!! $errors->first('idCarrera', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
