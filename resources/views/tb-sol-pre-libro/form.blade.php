<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('id_solib') }}
            {{ Form::text('id_solib', $tbSolPreLibro->id_solib, ['class' => 'form-control' . ($errors->has('id_solib') ? ' is-invalid' : ''), 'placeholder' => 'Id Solib']) }}
            {!! $errors->first('id_solib', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_us') }}
            {{ Form::text('id_us', $tbSolPreLibro->id_us, ['class' => 'form-control' . ($errors->has('id_us') ? ' is-invalid' : ''), 'placeholder' => 'Id Us']) }}
            {!! $errors->first('id_us', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_sol') }}
            {{ Form::text('fecha_sol', $tbSolPreLibro->fecha_sol, ['class' => 'form-control' . ($errors->has('fecha_sol') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Sol']) }}
            {!! $errors->first('fecha_sol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_sol') }}
            {{ Form::text('hora_sol', $tbSolPreLibro->hora_sol, ['class' => 'form-control' . ($errors->has('hora_sol') ? ' is-invalid' : ''), 'placeholder' => 'Hora Sol']) }}
            {!! $errors->first('hora_sol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_Dev') }}
            {{ Form::text('fecha_Dev', $tbSolPreLibro->fecha_Dev, ['class' => 'form-control' . ($errors->has('fecha_Dev') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Dev']) }}
            {!! $errors->first('fecha_Dev', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
