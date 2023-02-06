<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_est') }}
            {{ Form::text('id_est', $tbEstudiante->id_est, ['class' => 'form-control' . ($errors->has('id_est') ? ' is-invalid' : ''), 'placeholder' => 'Id Est']) }}
            {!! $errors->first('id_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cod_est') }}
            {{ Form::text('cod_est', $tbEstudiante->cod_est, ['class' => 'form-control' . ($errors->has('cod_est') ? ' is-invalid' : ''), 'placeholder' => 'Cod Est']) }}
            {!! $errors->first('cod_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_est') }}
            {{ Form::text('nombre_est', $tbEstudiante->nombre_est, ['class' => 'form-control' . ($errors->has('nombre_est') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Est']) }}
            {!! $errors->first('nombre_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ape_p_est') }}
            {{ Form::text('ape_p_est', $tbEstudiante->ape_p_est, ['class' => 'form-control' . ($errors->has('ape_p_est') ? ' is-invalid' : ''), 'placeholder' => 'Ape P Est']) }}
            {!! $errors->first('ape_p_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ape_m_est') }}
            {{ Form::text('ape_m_est', $tbEstudiante->ape_m_est, ['class' => 'form-control' . ($errors->has('ape_m_est') ? ' is-invalid' : ''), 'placeholder' => 'Ape M Est']) }}
            {!! $errors->first('ape_m_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ci_est') }}
            {{ Form::text('ci_est', $tbEstudiante->ci_est, ['class' => 'form-control' . ($errors->has('ci_est') ? ' is-invalid' : ''), 'placeholder' => 'Ci Est']) }}
            {!! $errors->first('ci_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('exp_est') }}
            {{ Form::text('exp_est', $tbEstudiante->exp_est, ['class' => 'form-control' . ($errors->has('exp_est') ? ' is-invalid' : ''), 'placeholder' => 'Exp Est']) }}
            {!! $errors->first('exp_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_nac_est') }}
            {{ Form::text('fec_nac_est', $tbEstudiante->fec_nac_est, ['class' => 'form-control' . ($errors->has('fec_nac_est') ? ' is-invalid' : ''), 'placeholder' => 'Fec Nac Est']) }}
            {!! $errors->first('fec_nac_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dir_est') }}
            {{ Form::text('dir_est', $tbEstudiante->dir_est, ['class' => 'form-control' . ($errors->has('dir_est') ? ' is-invalid' : ''), 'placeholder' => 'Dir Est']) }}
            {!! $errors->first('dir_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel_dom_est') }}
            {{ Form::text('tel_dom_est', $tbEstudiante->tel_dom_est, ['class' => 'form-control' . ($errors->has('tel_dom_est') ? ' is-invalid' : ''), 'placeholder' => 'Tel Dom Est']) }}
            {!! $errors->first('tel_dom_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cel_est') }}
            {{ Form::text('cel_est', $tbEstudiante->cel_est, ['class' => 'form-control' . ($errors->has('cel_est') ? ' is-invalid' : ''), 'placeholder' => 'Cel Est']) }}
            {!! $errors->first('cel_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email_est') }}
            {{ Form::text('email_est', $tbEstudiante->email_est, ['class' => 'form-control' . ($errors->has('email_est') ? ' is-invalid' : ''), 'placeholder' => 'Email Est']) }}
            {!! $errors->first('email_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tur_des_est') }}
            {{ Form::text('tur_des_est', $tbEstudiante->tur_des_est, ['class' => 'form-control' . ($errors->has('tur_des_est') ? ' is-invalid' : ''), 'placeholder' => 'Tur Des Est']) }}
            {!! $errors->first('tur_des_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_regis_est') }}
            {{ Form::text('fec_regis_est', $tbEstudiante->fec_regis_est, ['class' => 'form-control' . ($errors->has('fec_regis_est') ? ' is-invalid' : ''), 'placeholder' => 'Fec Regis Est']) }}
            {!! $errors->first('fec_regis_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('padre_del_est') }}
            {{ Form::text('padre_del_est', $tbEstudiante->padre_del_est, ['class' => 'form-control' . ($errors->has('padre_del_est') ? ' is-invalid' : ''), 'placeholder' => 'Padre Del Est']) }}
            {!! $errors->first('padre_del_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('madre_del_est') }}
            {{ Form::text('madre_del_est', $tbEstudiante->madre_del_est, ['class' => 'form-control' . ($errors->has('madre_del_est') ? ' is-invalid' : ''), 'placeholder' => 'Madre Del Est']) }}
            {!! $errors->first('madre_del_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_trab_padre_est') }}
            {{ Form::text('nombre_trab_padre_est', $tbEstudiante->nombre_trab_padre_est, ['class' => 'form-control' . ($errors->has('nombre_trab_padre_est') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Trab Padre Est']) }}
            {!! $errors->first('nombre_trab_padre_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel_trab_padre_est') }}
            {{ Form::text('tel_trab_padre_est', $tbEstudiante->tel_trab_padre_est, ['class' => 'form-control' . ($errors->has('tel_trab_padre_est') ? ' is-invalid' : ''), 'placeholder' => 'Tel Trab Padre Est']) }}
            {!! $errors->first('tel_trab_padre_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dir_trab_padre_est') }}
            {{ Form::text('dir_trab_padre_est', $tbEstudiante->dir_trab_padre_est, ['class' => 'form-control' . ($errors->has('dir_trab_padre_est') ? ' is-invalid' : ''), 'placeholder' => 'Dir Trab Padre Est']) }}
            {!! $errors->first('dir_trab_padre_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cole_est') }}
            {{ Form::text('cole_est', $tbEstudiante->cole_est, ['class' => 'form-control' . ($errors->has('cole_est') ? ' is-invalid' : ''), 'placeholder' => 'Cole Est']) }}
            {!! $errors->first('cole_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo_est') }}
            {{ Form::text('sexo_est', $tbEstudiante->sexo_est, ['class' => 'form-control' . ($errors->has('sexo_est') ? ' is-invalid' : ''), 'placeholder' => 'Sexo Est']) }}
            {!! $errors->first('sexo_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numsol_est') }}
            {{ Form::text('numsol_est', $tbEstudiante->numsol_est, ['class' => 'form-control' . ($errors->has('numsol_est') ? ' is-invalid' : ''), 'placeholder' => 'Numsol Est']) }}
            {!! $errors->first('numsol_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('insc_est') }}
            {{ Form::text('insc_est', $tbEstudiante->insc_est, ['class' => 'form-control' . ($errors->has('insc_est') ? ' is-invalid' : ''), 'placeholder' => 'Insc Est']) }}
            {!! $errors->first('insc_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dom_est') }}
            {{ Form::text('dom_est', $tbEstudiante->dom_est, ['class' => 'form-control' . ($errors->has('dom_est') ? ' is-invalid' : ''), 'placeholder' => 'Dom Est']) }}
            {!! $errors->first('dom_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lug_nac_est') }}
            {{ Form::text('lug_nac_est', $tbEstudiante->lug_nac_est, ['class' => 'form-control' . ($errors->has('lug_nac_est') ? ' is-invalid' : ''), 'placeholder' => 'Lug Nac Est']) }}
            {!! $errors->first('lug_nac_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trab_dir_est') }}
            {{ Form::text('trab_dir_est', $tbEstudiante->trab_dir_est, ['class' => 'form-control' . ($errors->has('trab_dir_est') ? ' is-invalid' : ''), 'placeholder' => 'Trab Dir Est']) }}
            {!! $errors->first('trab_dir_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trab_fono_est') }}
            {{ Form::text('trab_fono_est', $tbEstudiante->trab_fono_est, ['class' => 'form-control' . ($errors->has('trab_fono_est') ? ' is-invalid' : ''), 'placeholder' => 'Trab Fono Est']) }}
            {!! $errors->first('trab_fono_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('trab_nombre_est') }}
            {{ Form::text('trab_nombre_est', $tbEstudiante->trab_nombre_est, ['class' => 'form-control' . ($errors->has('trab_nombre_est') ? ' is-invalid' : ''), 'placeholder' => 'Trab Nombre Est']) }}
            {!! $errors->first('trab_nombre_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dato_bachi_est') }}
            {{ Form::text('dato_bachi_est', $tbEstudiante->dato_bachi_est, ['class' => 'form-control' . ($errors->has('dato_bachi_est') ? ' is-invalid' : ''), 'placeholder' => 'Dato Bachi Est']) }}
            {!! $errors->first('dato_bachi_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo_cole_est') }}
            {{ Form::text('tipo_cole_est', $tbEstudiante->tipo_cole_est, ['class' => 'form-control' . ($errors->has('tipo_cole_est') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Cole Est']) }}
            {!! $errors->first('tipo_cole_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pais_cod_est') }}
            {{ Form::text('pais_cod_est', $tbEstudiante->pais_cod_est, ['class' => 'form-control' . ($errors->has('pais_cod_est') ? ' is-invalid' : ''), 'placeholder' => 'Pais Cod Est']) }}
            {!! $errors->first('pais_cod_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_emitb_est') }}
            {{ Form::text('fec_emitb_est', $tbEstudiante->fec_emitb_est, ['class' => 'form-control' . ($errors->has('fec_emitb_est') ? ' is-invalid' : ''), 'placeholder' => 'Fec Emitb Est']) }}
            {!! $errors->first('fec_emitb_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sede_emit_est') }}
            {{ Form::text('sede_emit_est', $tbEstudiante->sede_emit_est, ['class' => 'form-control' . ($errors->has('sede_emit_est') ? ' is-invalid' : ''), 'placeholder' => 'Sede Emit Est']) }}
            {!! $errors->first('sede_emit_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_tranf_est') }}
            {{ Form::text('fec_tranf_est', $tbEstudiante->fec_tranf_est, ['class' => 'form-control' . ($errors->has('fec_tranf_est') ? ' is-invalid' : ''), 'placeholder' => 'Fec Tranf Est']) }}
            {!! $errors->first('fec_tranf_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fact_doc_tipo_est') }}
            {{ Form::text('fact_doc_tipo_est', $tbEstudiante->fact_doc_tipo_est, ['class' => 'form-control' . ($errors->has('fact_doc_tipo_est') ? ' is-invalid' : ''), 'placeholder' => 'Fact Doc Tipo Est']) }}
            {!! $errors->first('fact_doc_tipo_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fact_doc_numero_est') }}
            {{ Form::text('fact_doc_numero_est', $tbEstudiante->fact_doc_numero_est, ['class' => 'form-control' . ($errors->has('fact_doc_numero_est') ? ' is-invalid' : ''), 'placeholder' => 'Fact Doc Numero Est']) }}
            {!! $errors->first('fact_doc_numero_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fact_nombre_est') }}
            {{ Form::text('fact_nombre_est', $tbEstudiante->fact_nombre_est, ['class' => 'form-control' . ($errors->has('fact_nombre_est') ? ' is-invalid' : ''), 'placeholder' => 'Fact Nombre Est']) }}
            {!! $errors->first('fact_nombre_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('foto_est') }}
            {{ Form::text('foto_est', $tbEstudiante->foto_est, ['class' => 'form-control' . ($errors->has('foto_est') ? ' is-invalid' : ''), 'placeholder' => 'Foto Est']) }}
            {!! $errors->first('foto_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs_est') }}
            {{ Form::text('obs_est', $tbEstudiante->obs_est, ['class' => 'form-control' . ($errors->has('obs_est') ? ' is-invalid' : ''), 'placeholder' => 'Obs Est']) }}
            {!! $errors->first('obs_est', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>