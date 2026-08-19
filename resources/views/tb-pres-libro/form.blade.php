<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group" hidden>
            {{ Form::label('id_pres') }}
            {{ Form::text('id_pres', $tbPresLibro->id_pres, ['class' => 'form-control' . ($errors->has('id_pres') ? ' is-invalid' : ''), 'placeholder' => 'Id Pres']) }}
            {!! $errors->first('id_pres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('des_pres') }}
            {{ Form::text('des_pres', $tbPresLibro->des_pres, ['class' => 'form-control' . ($errors->has('des_pres') ? ' is-invalid' : ''), 'placeholder' => 'Des Pres']) }}
            {!! $errors->first('des_pres', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
