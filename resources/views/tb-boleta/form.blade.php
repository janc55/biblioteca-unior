<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_boleta') }}
            {{ Form::text('id_boleta', $tbBoleta->id_boleta, ['class' => 'form-control' . ($errors->has('id_boleta') ? ' is-invalid' : ''), 'placeholder' => 'Id Boleta']) }}
            {!! $errors->first('id_boleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_est') }}
            {{ Form::text('id_est', $tbBoleta->id_est, ['class' => 'form-control' . ($errors->has('id_est') ? ' is-invalid' : ''), 'placeholder' => 'Id Est']) }}
            {!! $errors->first('id_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_reg_boleta') }}
            {{ Form::text('fec_reg_boleta', $tbBoleta->fec_reg_boleta, ['class' => 'form-control' . ($errors->has('fec_reg_boleta') ? ' is-invalid' : ''), 'placeholder' => 'Fec Reg Boleta']) }}
            {!! $errors->first('fec_reg_boleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_depos_boleta') }}
            {{ Form::text('fec_depos_boleta', $tbBoleta->fec_depos_boleta, ['class' => 'form-control' . ($errors->has('fec_depos_boleta') ? ' is-invalid' : ''), 'placeholder' => 'Fec Depos Boleta']) }}
            {!! $errors->first('fec_depos_boleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_cuenta') }}
            {{ Form::text('id_cuenta', $tbBoleta->id_cuenta, ['class' => 'form-control' . ($errors->has('id_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Id Cuenta']) }}
            {!! $errors->first('id_cuenta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_gestion') }}
            {{ Form::text('id_gestion', $tbBoleta->id_gestion, ['class' => 'form-control' . ($errors->has('id_gestion') ? ' is-invalid' : ''), 'placeholder' => 'Id Gestion']) }}
            {!! $errors->first('id_gestion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nro_depos') }}
            {{ Form::text('nro_depos', $tbBoleta->nro_depos, ['class' => 'form-control' . ($errors->has('nro_depos') ? ' is-invalid' : ''), 'placeholder' => 'Nro Depos']) }}
            {!! $errors->first('nro_depos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_boleta') }}
            {{ Form::text('monto_boleta', $tbBoleta->monto_boleta, ['class' => 'form-control' . ($errors->has('monto_boleta') ? ' is-invalid' : ''), 'placeholder' => 'Monto Boleta']) }}
            {!! $errors->first('monto_boleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bs_boleta') }}
            {{ Form::text('bs_boleta', $tbBoleta->bs_boleta, ['class' => 'form-control' . ($errors->has('bs_boleta') ? ' is-invalid' : ''), 'placeholder' => 'Bs Boleta']) }}
            {!! $errors->first('bs_boleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs_boleta') }}
            {{ Form::text('obs_boleta', $tbBoleta->obs_boleta, ['class' => 'form-control' . ($errors->has('obs_boleta') ? ' is-invalid' : ''), 'placeholder' => 'Obs Boleta']) }}
            {!! $errors->first('obs_boleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_trans_boleta') }}
            {{ Form::text('fec_trans_boleta', $tbBoleta->fec_trans_boleta, ['class' => 'form-control' . ($errors->has('fec_trans_boleta') ? ' is-invalid' : ''), 'placeholder' => 'Fec Trans Boleta']) }}
            {!! $errors->first('fec_trans_boleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('terminal_boleta') }}
            {{ Form::text('terminal_boleta', $tbBoleta->terminal_boleta, ['class' => 'form-control' . ($errors->has('terminal_boleta') ? ' is-invalid' : ''), 'placeholder' => 'Terminal Boleta']) }}
            {!! $errors->first('terminal_boleta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>