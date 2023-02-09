<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_rol') }}
            {{ Form::text('id_rol', $role->id_rol, ['class' => 'form-control' . ($errors->has('id_rol') ? ' is-invalid' : ''), 'placeholder' => 'Id Rol']) }}
            {!! $errors->first('id_rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombrerol') }}
            {{ Form::text('nombrerol', $role->nombrerol, ['class' => 'form-control' . ($errors->has('nombrerol') ? ' is-invalid' : ''), 'placeholder' => 'Nombrerol']) }}
            {!! $errors->first('nombrerol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('permiso') }}
            {{ Form::text('permiso', $role->permiso, ['class' => 'form-control' . ($errors->has('permiso') ? ' is-invalid' : ''), 'placeholder' => 'Permiso']) }}
            {!! $errors->first('permiso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>