<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group" hidden>
            {{ Form::label('id_doc') }}
            {{ Form::text('id_doc', $tbDocente->id_doc, ['class' => 'form-control' . ($errors->has('id_doc') ? ' is-invalid' : ''), 'placeholder' => 'id_doc']) }}
            {!! $errors->first('id_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
             <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre_doc', $tbDocente->nombre_doc, ['class' => 'form-control' . ($errors->has('nombre_doc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Doc']) }}
            {!! $errors->first('nombre_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido paterno') }}
            {{ Form::text('ape_p_doc', $tbDocente->ape_p_doc, ['class' => 'form-control' . ($errors->has('ape_p_doc') ? ' is-invalid' : ''), 'placeholder' => 'Ape P Doc']) }}
            {!! $errors->first('ape_p_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Materno') }}
            {{ Form::text('ape_m_doc', $tbDocente->ape_m_doc, ['class' => 'form-control' . ($errors->has('ape_m_doc') ? ' is-invalid' : ''), 'placeholder' => 'Ape M Doc']) }}
            {!! $errors->first('ape_m_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::number('cod_doc', $tbDocente->cod_doc, ['class' => 'form-control' . ($errors->has('cod_doc') ? ' is-invalid' : ''), 'placeholder' => 'Cod Doc']) }}
            {!! $errors->first('cod_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ci') }}
            {{ Form::number('ci', $tbDocente->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expedido') }}
            {{ Form::text('expedido', $tbDocente->expedido, ['class' => 'form-control' . ($errors->has('expedido') ? ' is-invalid' : ''), 'placeholder' => 'Expedido']) }}
            {!! $errors->first('expedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grado') }}
            {{ Form::text('grado', $tbDocente->grado, ['class' => 'form-control' . ($errors->has('grado') ? ' is-invalid' : ''), 'placeholder' => 'Grado']) }}
            {!! $errors->first('grado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fec_nac_doc') }}
            {{ Form::date('fec_nac_doc', $tbDocente->fec_nac_doc, ['class' => 'form-control' . ($errors->has('fec_nac_doc') ? ' is-invalid' : ''), 'placeholder' => 'Fec Nac Doc']) }}
            {!! $errors->first('fec_nac_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel_dom_doc') }}
            {{ Form::number('tel_dom_doc', $tbDocente->tel_dom_doc, ['class' => 'form-control' . ($errors->has('tel_dom_doc') ? ' is-invalid' : ''), 'placeholder' => 'Tel Dom Doc']) }}
            {!! $errors->first('tel_dom_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cel_doc') }}
            {{ Form::number('cel_doc', $tbDocente->cel_doc, ['class' => 'form-control' . ($errors->has('cel_doc') ? ' is-invalid' : ''), 'placeholder' => 'Cel Doc']) }}
            {!! $errors->first('cel_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dom_doc') }}
            {{ Form::text('dom_doc', $tbDocente->dom_doc, ['class' => 'form-control' . ($errors->has('dom_doc') ? ' is-invalid' : ''), 'placeholder' => 'Dom Doc']) }}
            {!! $errors->first('dom_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doc_pass') }}
            {{ Form::password('doc_pass', ['class' => 'form-control' . ($errors->has('doc_pass') ? ' is-invalid' : ''), 'placeholder' => 'Lug doc_pass']) }}
 {!! $errors->first('doc_pass', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('lug_doc') }}
            {{ Form::text('lug_doc', $tbDocente->lug_doc, ['class' => 'form-control' . ($errors->has('lug_doc') ? ' is-invalid' : ''), 'placeholder' => 'Lug Doc']) }}
            {!! $errors->first('lug_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dir_trab_doc') }}
            {{ Form::text('dir_trab_doc', $tbDocente->dir_trab_doc, ['class' => 'form-control' . ($errors->has('dir_trab_doc') ? ' is-invalid' : ''), 'placeholder' => 'Dir Trab Doc']) }}
            {!! $errors->first('dir_trab_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel_trab_doc') }}
            {{ Form::text('tel_trab_doc', $tbDocente->tel_trab_doc, ['class' => 'form-control' . ($errors->has('tel_trab_doc') ? ' is-invalid' : ''), 'placeholder' => 'Tel Trab Doc']) }}
            {!! $errors->first('tel_trab_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email_doc') }}
            {{ Form::text('email_doc', $tbDocente->email_doc, ['class' => 'form-control' . ($errors->has('email_doc') ? ' is-invalid' : ''), 'placeholder' => 'Email Doc']) }}
            {!! $errors->first('email_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_civ_doc') }}
            {{ Form::text('estado_civ_doc', $tbDocente->estado_civ_doc, ['class' => 'form-control' . ($errors->has('estado_civ_doc') ? ' is-invalid' : ''), 'placeholder' => 'Estado Civ Doc']) }}
            {!! $errors->first('estado_civ_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nacional_doc') }}
            {{ Form::text('nacional_doc', $tbDocente->nacional_doc, ['class' => 'form-control' . ($errors->has('nacional_doc') ? ' is-invalid' : ''), 'placeholder' => 'Nacional Doc']) }}
            {!! $errors->first('nacional_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obser_doc') }}
            {{ Form::text('obser_doc', $tbDocente->obser_doc, ['class' => 'form-control' . ($errors->has('obser_doc') ? ' is-invalid' : ''), 'placeholder' => 'Obser Doc']) }}
            {!! $errors->first('obser_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div> 
        <div class="form-group">
            {{ Form::label('foto_doc') }}
            {{ Form::text('foto_doc', $tbDocente->foto_doc, ['class' => 'form-control' . ($errors->has('foto_doc') ? ' is-invalid' : ''), 'placeholder' => 'Foto Doc']) }}
            {!! $errors->first('foto_doc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    {{ Form::label('estado') }}
    {{ Form::select('estado', ['activo' => 'Activo', 'inactivo' => 'Inactivo'], $tbDocente->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione estado']) }}
    {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
</div>-->

    </div>
    
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>