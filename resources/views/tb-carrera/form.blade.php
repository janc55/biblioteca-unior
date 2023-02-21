<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_carre') }}
            {{ Form::text('id_carre', $tbCarrera->id_carre, ['class' => 'form-control' . ($errors->has('id_carre') ? ' is-invalid' : ''), 'placeholder' => 'Id Carre']) }}
            {!! $errors->first('id_carre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_carre') }}
            {{ Form::text('nombre_carre', $tbCarrera->nombre_carre, ['class' => 'form-control' . ($errors->has('nombre_carre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Carre']) }}
            {!! $errors->first('nombre_carre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sigla_carre') }}
            {{ Form::text('sigla_carre', $tbCarrera->sigla_carre, ['class' => 'form-control' . ($errors->has('sigla_carre') ? ' is-invalid' : ''), 'placeholder' => 'Sigla Carre']) }}
            {!! $errors->first('sigla_carre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('habi_carre') }}
            {{ Form::text('habi_carre', $tbCarrera->habi_carre, ['class' => 'form-control' . ($errors->has('habi_carre') ? ' is-invalid' : ''), 'placeholder' => 'Habi Carre']) }}
            {!! $errors->first('habi_carre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_carre') }}
            {{ Form::text('fec_carre', $tbCarrera->fec_carre, ['class' => 'form-control' . ($errors->has('fec_carre') ? ' is-invalid' : ''), 'placeholder' => 'Fec Carre']) }}
            {!! $errors->first('fec_carre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imp_carre') }}
            {{ Form::text('imp_carre', $tbCarrera->imp_carre, ['class' => 'form-control' . ($errors->has('imp_carre') ? ' is-invalid' : ''), 'placeholder' => 'Imp Carre']) }}
            {!! $errors->first('imp_carre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('res_carre') }}
            {{ Form::text('res_carre', $tbCarrera->res_carre, ['class' => 'form-control' . ($errors->has('res_carre') ? ' is-invalid' : ''), 'placeholder' => 'Res Carre']) }}
            {!! $errors->first('res_carre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>