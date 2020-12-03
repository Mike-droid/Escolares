<div class="form-group {{ $errors->has('nombreCarrera') ? 'has-error' : ''}}">
    <label for="nombreCarrera" class="control-label">{{ 'Nombrecarrera' }}</label>
    <input class="form-control" name="nombreCarrera" type="text" id="nombreCarrera" value="{{ isset($carrera->nombreCarrera) ? $carrera->nombreCarrera : ''}}" >
    {!! $errors->first('nombreCarrera', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nombreAbreviado') ? 'has-error' : ''}}">
    <label for="nombreAbreviado" class="control-label">{{ 'Nombreabreviado' }}</label>
    <input class="form-control" name="nombreAbreviado" type="text" id="nombreAbreviado" value="{{ isset($carrera->nombreAbreviado) ? $carrera->nombreAbreviado : ''}}" >
    {!! $errors->first('nombreAbreviado', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idDepto') ? 'has-error' : ''}}">
    <label for="idDepto" class="control-label">{{ 'Iddepto' }}</label>
    <input class="form-control" name="idDepto" type="number" id="idDepto" value="{{ isset($carrera->idDepto) ? $carrera->idDepto : ''}}" >
    {!! $errors->first('idDepto', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
