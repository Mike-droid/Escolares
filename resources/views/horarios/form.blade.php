<?php
    use App\Models\periodo;
?>

<div class="form-group {{ $errors->has('Semestre') ? 'has-error' : ''}}">
    <label for="Semestre" class="control-label">{{ 'Semestre' }}</label>
    <input class="form-control" name="Semestre" type="number" min="1" max="12" id="Semestre" value="{{ isset($horario->Semestre) ? $horario->Semestre : ''}}" >
    {!! $errors->first('Semestre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('noCtrl') ? 'has-error' : ''}}">
    <label for="noCtrl" class="control-label">{{ 'Número de control' }}</label>
    <input class="form-control" name="noCtrl" type="text" id="noCtrl" value="{{ isset($horario->noCtrl) ? $horario->noCtrl : ''}}" >
    {!! $errors->first('noCtrl', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('numeroOficioProrroga') ? 'has-error' : ''}}">
    <label for="numeroOficioProrroga" class="control-label">{{ 'Número oficio prorroga' }}</label>
    <input class="form-control" name="numeroOficioProrroga" type="text" id="numeroOficioProrroga" value="{{ isset($horario->numeroOficioProrroga) ? $horario->numeroOficioProrroga : ''}}" >
    {!! $errors->first('numeroOficioProrroga', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idPeriodo') ? 'has-error' : ''}}">
    <label for="idPeriodo" class="control-label">{{ 'ID periodo' }}</label>
    <select name="idPeriodo" id="idPeriodo">
        {{$periodo = periodo::all()}}
        @foreach ($periodo as $p)
            <option value="{{$p->id}}">{{$p->id}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
