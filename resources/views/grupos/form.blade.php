<?php
    use App\Models\periodo;
    use App\Models\personale;
?>

<div class="form-group {{ $errors->has('NombreGrupo') ? 'has-error' : ''}}">
    <label for="NombreGrupo" class="control-label">{{ 'Nombre del grupo' }}</label>
    <input class="form-control" name="NombreGrupo" type="text" id="NombreGrupo" value="{{ isset($grupo->NombreGrupo) ? $grupo->NombreGrupo : ''}}" >
    {!! $errors->first('NombreGrupo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('idMateriaInterno') ? 'has-error' : ''}}">
    <label for="idMateriaInterno" class="control-label">{{ 'ID materia interno' }}</label>
    <input class="form-control" name="idMateriaInterno" type="text" id="idMateriaInterno" value="{{ isset($grupo->idMateriaInterno) ? $grupo->idMateriaInterno : ''}}" >
    {!! $errors->first('idMateriaInterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('capacidadMaxima') ? 'has-error' : ''}}">
    <label for="capacidadMaxima" class="control-label">{{ 'Capacidad máxima' }}</label>
    <input class="form-control" name="capacidadMaxima" type="number" id="capacidadMaxima" value="{{ isset($grupo->capacidadMaxima) ? $grupo->capacidadMaxima : ''}}" >
    {!! $errors->first('capacidadMaxima', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rfcDocente') ? 'has-error' : ''}}">
    <label for="rfcDocente" class="control-label">{{ 'RFC docente' }}</label>
    <select name="rfcDocente" id="rfcDocente" class="form-control">
        {{$personal = personale::all()}}
        @foreach ($personal as $p)
            <option value="{{$p->id}}">{{$p->Nombre . ' ' . $p->apellidoPaterno . ' ' . $p->apellidoMaterno}}</option>
        @endforeach
    </select>
</div>
<div class="form-group {{ $errors->has('idPeriodo') ? 'has-error' : ''}}">
    <label for="idPeriodo" class="control-label">{{ 'ID periodo' }}</label>
    <select name="idPeriodo" id="idPeriodo" class="form-control">
        {{$periodo = periodo::all()}}
        @foreach ($periodo as $p)
            <option value="{{$p->id}}">{{$p->id}}</option>
        @endforeach
    </select>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
