<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_mab') }}
            {{ Form::text('id_mab', $tbFormMatBio->id_mab, ['class' => 'form-control' . ($errors->has('id_mab') ? ' is-invalid' : ''), 'placeholder' => 'Id Mab']) }}
            {!! $errors->first('id_mab', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_us') }}
            {{ Form::text('id_us', $tbFormMatBio->id_us, ['class' => 'form-control' . ($errors->has('id_us') ? ' is-invalid' : ''), 'placeholder' => 'Id Us']) }}
            {!! $errors->first('id_us', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titlo_lib') }}
            {{ Form::text('titlo_lib', $tbFormMatBio->titlo_lib, ['class' => 'form-control' . ($errors->has('titlo_lib') ? ' is-invalid' : ''), 'placeholder' => 'Titlo Lib']) }}
            {!! $errors->first('titlo_lib', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autor', $tbFormMatBio->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('edicion') }}
            {{ Form::text('edicion', $tbFormMatBio->edicion, ['class' => 'form-control' . ($errors->has('edicion') ? ' is-invalid' : ''), 'placeholder' => 'Edicion']) }}
            {!! $errors->first('edicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio') }}
            {{ Form::text('anio', $tbFormMatBio->anio, ['class' => 'form-control' . ($errors->has('anio') ? ' is-invalid' : ''), 'placeholder' => 'Anio']) }}
            {!! $errors->first('anio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('editorial') }}
            {{ Form::text('editorial', $tbFormMatBio->editorial, ['class' => 'form-control' . ($errors->has('editorial') ? ' is-invalid' : ''), 'placeholder' => 'Editorial']) }}
            {!! $errors->first('editorial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nom_lug_com') }}
            {{ Form::text('nom_lug_com', $tbFormMatBio->nom_lug_com, ['class' => 'form-control' . ($errors->has('nom_lug_com') ? ' is-invalid' : ''), 'placeholder' => 'Nom Lug Com']) }}
            {!! $errors->first('nom_lug_com', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('costo') }}
            {{ Form::text('costo', $tbFormMatBio->costo, ['class' => 'form-control' . ($errors->has('costo') ? ' is-invalid' : ''), 'placeholder' => 'Costo']) }}
            {!! $errors->first('costo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia') }}
            {{ Form::text('materia', $tbFormMatBio->materia, ['class' => 'form-control' . ($errors->has('materia') ? ' is-invalid' : ''), 'placeholder' => 'Materia']) }}
            {!! $errors->first('materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('estado') }}
    {{ Form::select('estado', ['sin atender' => 'Sin Atender', 'atendido' => 'Atendido'], $tbFormMatBio->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : '')]) }}
    {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
</div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>