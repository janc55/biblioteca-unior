<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_pl') }}
            {{ Form::text('id_pl', $tbplane->id_pl, ['class' => 'form-control' . ($errors->has('id_pl') ? ' is-invalid' : ''), 'placeholder' => 'Id Pl']) }}
            {!! $errors->first('id_pl', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_plan') }}
            {{ Form::text('nombre_plan', $tbplane->nombre_plan, ['class' => 'form-control' . ($errors->has('nombre_plan') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Plan']) }}
            {!! $errors->first('nombre_plan', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cuotas') }}
            {{ Form::text('cuotas', $tbplane->cuotas, ['class' => 'form-control' . ($errors->has('cuotas') ? ' is-invalid' : ''), 'placeholder' => 'Cuotas']) }}
            {!! $errors->first('cuotas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $tbplane->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>