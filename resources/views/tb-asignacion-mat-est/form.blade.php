<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_asig_mat_est') }}
            {{ Form::text('id_asig_mat_est', $tbAsignacionMatEst->id_asig_mat_est, ['class' => 'form-control' . ($errors->has('id_asig_mat_est') ? ' is-invalid' : ''), 'placeholder' => 'Id Asig Mat Est']) }}
            {!! $errors->first('id_asig_mat_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_asig_mat') }}
            {{ Form::text('id_asig_mat', $tbAsignacionMatEst->id_asig_mat, ['class' => 'form-control' . ($errors->has('id_asig_mat') ? ' is-invalid' : ''), 'placeholder' => 'Id Asig Mat']) }}
            {!! $errors->first('id_asig_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_est') }}
            {{ Form::text('id_est', $tbAsignacionMatEst->id_est, ['class' => 'form-control' . ($errors->has('id_est') ? ' is-invalid' : ''), 'placeholder' => 'Id Est']) }}
            {!! $errors->first('id_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('eval_p1') }}
            {{ Form::text('eval_p1', $tbAsignacionMatEst->eval_p1, ['class' => 'form-control' . ($errors->has('eval_p1') ? ' is-invalid' : ''), 'placeholder' => 'Eval P1']) }}
            {!! $errors->first('eval_p1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('eval_p2') }}
            {{ Form::text('eval_p2', $tbAsignacionMatEst->eval_p2, ['class' => 'form-control' . ($errors->has('eval_p2') ? ' is-invalid' : ''), 'placeholder' => 'Eval P2']) }}
            {!! $errors->first('eval_p2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('eval_fin') }}
            {{ Form::text('eval_fin', $tbAsignacionMatEst->eval_fin, ['class' => 'form-control' . ($errors->has('eval_fin') ? ' is-invalid' : ''), 'placeholder' => 'Eval Fin']) }}
            {!! $errors->first('eval_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('eval_2t') }}
            {{ Form::text('eval_2t', $tbAsignacionMatEst->eval_2t, ['class' => 'form-control' . ($errors->has('eval_2t') ? ' is-invalid' : ''), 'placeholder' => 'Eval 2T']) }}
            {!! $errors->first('eval_2t', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs_asig') }}
            {{ Form::text('obs_asig', $tbAsignacionMatEst->obs_asig, ['class' => 'form-control' . ($errors->has('obs_asig') ? ' is-invalid' : ''), 'placeholder' => 'Obs Asig']) }}
            {!! $errors->first('obs_asig', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>