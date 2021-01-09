<div class="form-group {{ $errors->has('noCtrl') ? 'has-error' : ''}}">
    <label for="noCtrl" class="control-label">{{ 'Número de control' }}</label>
    @if ($formMode == 'edit')
    <input class="form-control" name="noCtrl" type="text" id="noCtrl" disabled value="{{ isset($alumno->noCtrl) ? $alumno->noCtrl : ''}}" >
    @else
    <input class="form-control" name="noCtrl" type="text" id="noCtrl" value="{{ isset($alumno->noCtrl) ? $alumno->noCtrl : ''}}" >
    @endif
    {!! $errors->first('noCtrl', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($alumno->Nombre) ? $alumno->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidoPaterno') ? 'has-error' : ''}}">
    <label for="apellidoPaterno" class="control-label">{{ 'Apellido paterno' }}</label>
    <input class="form-control" name="apellidoPaterno" type="text" id="apellidoPaterno" value="{{ isset($alumno->apellidoPaterno) ? $alumno->apellidoPaterno : ''}}" >
    {!! $errors->first('apellidoPaterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('apellidoMaterno') ? 'has-error' : ''}}">
    <label for="apellidoMaterno" class="control-label">{{ 'Apellido materno' }}</label>
    <input class="form-control" name="apellidoMaterno" type="text" id="apellidoMaterno" value="{{ isset($alumno->apellidoMaterno) ? $alumno->apellidoMaterno : ''}}" >
    {!! $errors->first('apellidoMaterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    <label for="sexo" class="control-label">{{ 'Sexo' }}</label>
    <select name="sexo" class="form-control" id="sexo" >
    @foreach (json_decode('{"masculino":"Masculino","femenino":"Femenino"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($alumno->sexo) && $alumno->sexo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email" value="{{ isset($alumno->email) ? $alumno->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('facebook') ? 'has-error' : ''}}">
    <label for="facebook" class="control-label">{{ 'Facebook' }}</label>
    <input class="form-control" name="facebook" type="text" id="facebook" value="{{ isset($alumno->facebook) ? $alumno->facebook : ''}}" >
    {!! $errors->first('facebook', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('twitter') ? 'has-error' : ''}}">
    <label for="twitter" class="control-label">{{ 'Twitter' }}</label>
    <input class="form-control" name="twitter" type="text" id="twitter" value="{{ isset($alumno->twitter) ? $alumno->twitter : ''}}" >
    {!! $errors->first('twitter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
    <label for="telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="telefono" type="text" id="telefono" value="{{ isset($alumno->telefono) ? $alumno->telefono : ''}}" >
    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idiomaIngles') ? 'has-error' : ''}}">
    <label for="idiomaIngles" class="control-label">{{ 'Idioma Inglés' }}</label>
    <div class="radio">
    <label><input name="idiomaIngles" type="radio" value="1" {{ (isset($alumno) && 1 == $alumno->idiomaIngles) ? 'checked' : '' }}> Sí</label>
</div>
<div class="radio">
    <label><input name="idiomaIngles" type="radio" value="0" @if (isset($alumno)) {{ (0 == $alumno->idiomaIngles) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('idiomaIngles', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idiomaFrances') ? 'has-error' : ''}}">
    <label for="idiomaFrances" class="control-label">{{ 'Idioma Francés' }}</label>
    <div class="radio">
    <label><input name="idiomaFrances" type="radio" value="1" {{ (isset($alumno) && 1 == $alumno->idiomaFrances) ? 'checked' : '' }}> Sí</label>
</div>
<div class="radio">
    <label><input name="idiomaFrances" type="radio" value="0" @if (isset($alumno)) {{ (0 == $alumno->idiomaFrances) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('idiomaFrances', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idiomaEspanol') ? 'has-error' : ''}}">
    <label for="idiomaEspanol" class="control-label">{{ 'Idioma Español' }}</label>
    <div class="radio">
    <label><input name="idiomaEspanol" type="radio" value="1" {{ (isset($alumno) && 1 == $alumno->idiomaEspanol) ? 'checked' : '' }}> Sí</label>
</div>
<div class="radio">
    <label><input name="idiomaEspanol" type="radio" value="0" @if (isset($alumno)) {{ (0 == $alumno->idiomaEspanol) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('idiomaEspanol', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
