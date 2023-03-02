<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_asig_mat') }}
            {{ Form::text('id_asig_mat', $tbAsignacionMat->id_asig_mat, ['class' => 'form-control' . ($errors->has('id_asig_mat') ? ' is-invalid' : ''), 'placeholder' => 'Id Asig Mat']) }}
            {!! $errors->first('id_asig_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_doc') }}
            {{ Form::text('id_doc', $tbAsignacionMat->id_doc, ['class' => 'form-control' . ($errors->has('id_doc') ? ' is-invalid' : ''), 'placeholder' => 'Id Doc']) }}
            {!! $errors->first('id_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_carre') }}
            {{ Form::text('id_carre', $tbAsignacionMat->id_carre, ['class' => 'form-control' . ($errors->has('id_carre') ? ' is-invalid' : ''), 'placeholder' => 'Id Carre']) }}
            {!! $errors->first('id_carre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_materia') }}
            {{ Form::text('id_materia', $tbAsignacionMat->id_materia, ['class' => 'form-control' . ($errors->has('id_materia') ? ' is-invalid' : ''), 'placeholder' => 'Id Materia']) }}
            {!! $errors->first('id_materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_turno') }}
            {{ Form::text('id_turno', $tbAsignacionMat->id_turno, ['class' => 'form-control' . ($errors->has('id_turno') ? ' is-invalid' : ''), 'placeholder' => 'Id Turno']) }}
            {!! $errors->first('id_turno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_gestion') }}
            {{ Form::text('id_gestion', $tbAsignacionMat->id_gestion, ['class' => 'form-control' . ($errors->has('id_gestion') ? ' is-invalid' : ''), 'placeholder' => 'Id Gestion']) }}
            {!! $errors->first('id_gestion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('paralelo_asig_mat') }}
            {{ Form::text('paralelo_asig_mat', $tbAsignacionMat->paralelo_asig_mat, ['class' => 'form-control' . ($errors->has('paralelo_asig_mat') ? ' is-invalid' : ''), 'placeholder' => 'Paralelo Asig Mat']) }}
            {!! $errors->first('paralelo_asig_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_asig_mat') }}
            {{ Form::text('tipo_asig_mat', $tbAsignacionMat->tipo_asig_mat, ['class' => 'form-control' . ($errors->has('tipo_asig_mat') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Asig Mat']) }}
            {!! $errors->first('tipo_asig_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs_asig_mat') }}
            {{ Form::text('obs_asig_mat', $tbAsignacionMat->obs_asig_mat, ['class' => 'form-control' . ($errors->has('obs_asig_mat') ? ' is-invalid' : ''), 'placeholder' => 'Obs Asig Mat']) }}
            {!! $errors->first('obs_asig_mat', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>