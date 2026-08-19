<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_planE') }}
            {{ Form::text('id_planE', $tb_planesgestiones->id_planE, ['class' => 'form-control' . ($errors->has('id_planE') ? ' is-invalid' : ''), 'placeholder' => 'Id Plane']) }}
            {!! $errors->first('id_planE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_gestE') }}
            {{ Form::text('cod_gestE', $tb_planesgestiones->cod_gestE, ['class' => 'form-control' . ($errors->has('cod_gestE') ? ' is-invalid' : ''), 'placeholder' => 'Cod Geste']) }}
            {!! $errors->first('cod_gestE', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>