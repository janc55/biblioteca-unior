<div class="box box-info padding-1">
    <div class="box-body">
        
  
        <div class="form-group">
            {{ Form::label('codigo_mat') }}
            {{ Form::text('codigo_mat', $tbMateria->codigo_mat, ['class' => 'form-control' . ($errors->has('codigo_mat') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Mat']) }}
            {!! $errors->first('codigo_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_mat') }}
            {{ Form::text('nombre_mat', $tbMateria->nombre_mat, ['class' => 'form-control' . ($errors->has('nombre_mat') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Mat']) }}
            {!! $errors->first('nombre_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habi_mat') }}
            {{ Form::text('habi_mat', $tbMateria->habi_mat, ['class' => 'form-control' . ($errors->has('habi_mat') ? ' is-invalid' : ''), 'placeholder' => 'Habi Mat']) }}
            {!! $errors->first('habi_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>