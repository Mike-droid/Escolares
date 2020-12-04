<?php
    use App\Models\carrera;
?>

<div class="form-group {{ $errors->has('DescripcionReticula') ? 'has-error' : ''}}">
    <label for="DescripcionReticula" class="control-label">{{ 'Descripción de retícula' }}</label>
    <input class="form-control" name="DescripcionReticula" type="text" id="DescripcionReticula" value="{{ isset($reticula->DescripcionReticula) ? $reticula->DescripcionReticula : ''}}" >
    {!! $errors->first('DescripcionReticula', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('FechaDeVigor') ? 'has-error' : ''}}">
    <label for="FechaDeVigor" class="control-label">{{ 'Fecha de vigor' }}</label>
    <input class="form-control" name="FechaDeVigor" type="date" id="FechaDeVigor" value="{{ isset($reticula->FechaDeVigor) ? $reticula->FechaDeVigor : ''}}" >
    {!! $errors->first('FechaDeVigor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idCarrera') ? 'has-error' : ''}}">
    <label for="idCarrera" class="control-label">{{ 'ID carrera' }}</label>
    <select name="idCarrera" id="idCarrera" class="form-control">
        {{$carrera = carrera::all()}}
        @foreach ($carrera as $c)
            <option value="{{$c->id}}">{{$c->nombreCarrera}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
