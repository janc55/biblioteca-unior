<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_cat_mat') }}
            {{ Form::text('id_cat_mat', $tbCategoriaMat->id_cat_mat, ['class' => 'form-control' . ($errors->has('id_cat_mat') ? ' is-invalid' : ''), 'placeholder' => 'Id Cat Mat']) }}
            {!! $errors->first('id_cat_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_cat_mat') }}
            {{ Form::text('nombre_cat_mat', $tbCategoriaMat->nombre_cat_mat, ['class' => 'form-control' . ($errors->has('nombre_cat_mat') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cat Mat']) }}
            {!! $errors->first('nombre_cat_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</div>