<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_gestion') }}
            {{ Form::text('id_gestion', $tbGestione->id_gestion, ['class' => 'form-control' . ($errors->has('id_gestion') ? ' is-invalid' : ''), 'placeholder' => 'Id Gestion']) }}
            {!! $errors->first('id_gestion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('periodo_gestion') }}
            {{ Form::text('periodo_gestion', $tbGestione->periodo_gestion, ['class' => 'form-control' . ($errors->has('periodo_gestion') ? ' is-invalid' : ''), 'placeholder' => 'Periodo Gestion']) }}
            {!! $errors->first('periodo_gestion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anio_gestion') }}
            {{ Form::text('anio_gestion', $tbGestione->anio_gestion, ['class' => 'form-control' . ($errors->has('anio_gestion') ? ' is-invalid' : ''), 'placeholder' => 'Anio Gestion']) }}
            {!! $errors->first('anio_gestion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>