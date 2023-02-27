<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_est_carr') }}
            {{ Form::text('id_est_carr', $tbEstCarr->id_est_carr, ['class' => 'form-control' . ($errors->has('id_est_carr') ? ' is-invalid' : ''), 'placeholder' => 'Id Est Carr']) }}
            {!! $errors->first('id_est_carr', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_est') }}
            {{ Form::text('id_est', $tbEstCarr->id_est, ['class' => 'form-control' . ($errors->has('id_est') ? ' is-invalid' : ''), 'placeholder' => 'Id Est']) }}
            {!! $errors->first('id_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_carre') }}
            {{ Form::text('id_carre', $tbEstCarr->id_carre, ['class' => 'form-control' . ($errors->has('id_carre') ? ' is-invalid' : ''), 'placeholder' => 'Id Carre']) }}
            {!! $errors->first('id_carre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_turno') }}
            {{ Form::text('id_turno', $tbEstCarr->id_turno, ['class' => 'form-control' . ($errors->has('id_turno') ? ' is-invalid' : ''), 'placeholder' => 'Id Turno']) }}
            {!! $errors->first('id_turno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_pl') }}
            {{ Form::text('id_pl', $tbEstCarr->id_pl, ['class' => 'form-control' . ($errors->has('id_pl') ? ' is-invalid' : ''), 'placeholder' => 'Id Pl']) }}
            {!! $errors->first('id_pl', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>