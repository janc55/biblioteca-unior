<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $usuarioAdministrativo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ci') }}
            {{ Form::text('ci', $usuarioAdministrativo->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contrasena') }}
            {{ Form::text('contrasena', $usuarioAdministrativo->contrasena, ['class' => 'form-control' . ($errors->has('contrasena') ? ' is-invalid' : ''), 'placeholder' => 'Contrasena']) }}
            {!! $errors->first('contrasena', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('tipo') }}
    {{ Form::select('tipo', $roles, $usuarioAdministrativo->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un tipo']) }}
    {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
</div>
          <div class="form-group">
            {{ Form::label('ESTADO') }}
            {{ Form::select('estado', ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO'], $usuarioAdministrativo->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un tipo']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
          </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
