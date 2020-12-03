<div class="form-group {{ $errors->has('Semestre') ? 'has-error' : ''}}">
    <label for="Semestre" class="control-label">{{ 'Semestre' }}</label>
    <input class="form-control" name="Semestre" type="number" id="Semestre" value="{{ isset($horario->Semestre) ? $horario->Semestre : ''}}" >
    {!! $errors->first('Semestre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('noCtrl') ? 'has-error' : ''}}">
    <label for="noCtrl" class="control-label">{{ 'Noctrl' }}</label>
    <input class="form-control" name="noCtrl" type="text" id="noCtrl" value="{{ isset($horario->noCtrl) ? $horario->noCtrl : ''}}" >
    {!! $errors->first('noCtrl', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numeroOficioProrroga') ? 'has-error' : ''}}">
    <label for="numeroOficioProrroga" class="control-label">{{ 'Numerooficioprorroga' }}</label>
    <input class="form-control" name="numeroOficioProrroga" type="text" id="numeroOficioProrroga" value="{{ isset($horario->numeroOficioProrroga) ? $horario->numeroOficioProrroga : ''}}" >
    {!! $errors->first('numeroOficioProrroga', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idPeriodo') ? 'has-error' : ''}}">
    <label for="idPeriodo" class="control-label">{{ 'Idperiodo' }}</label>
    <input class="form-control" name="idPeriodo" type="number" id="idPeriodo" value="{{ isset($horario->idPeriodo) ? $horario->idPeriodo : ''}}" >
    {!! $errors->first('idPeriodo', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
