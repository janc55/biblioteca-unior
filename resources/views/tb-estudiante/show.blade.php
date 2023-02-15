@extends('layouts.app')

@section('template_title')
    {{ $tbEstudiante->name ?? 'Show Tb Estudiante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Estudiante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-estudiantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Est:</strong>
                            {{ $tbEstudiante->id_est }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Est:</strong>
                            {{ $tbEstudiante->cod_est }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Est:</strong>
                            {{ $tbEstudiante->nombre_est }}
                        </div>
                        <div class="form-group">
                            <strong>Ape P Est:</strong>
                            {{ $tbEstudiante->ape_p_est }}
                        </div>
                        <div class="form-group">
                            <strong>Ape M Est:</strong>
                            {{ $tbEstudiante->ape_m_est }}
                        </div>
                        <div class="form-group">
                            <strong>Ci Est:</strong>
                            {{ $tbEstudiante->ci_est }}
                        </div>
                        <div class="form-group">
                            <strong>Exp Est:</strong>
                            {{ $tbEstudiante->exp_est }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Nac Est:</strong>
                            {{ $tbEstudiante->fec_nac_est }}
                        </div>
                        <div class="form-group">
                            <strong>Dir Est:</strong>
                            {{ $tbEstudiante->dir_est }}
                        </div>
                        <div class="form-group">
                            <strong>Tel Dom Est:</strong>
                            {{ $tbEstudiante->tel_dom_est }}
                        </div>
                        <div class="form-group">
                            <strong>Cel Est:</strong>
                            {{ $tbEstudiante->cel_est }}
                        </div>
                        <div class="form-group">
                            <strong>Email Est:</strong>
                            {{ $tbEstudiante->email_est }}
                        </div>
                        <div class="form-group">
                            <strong>Tur Des Est:</strong>
                            {{ $tbEstudiante->tur_des_est }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Regis Est:</strong>
                            {{ $tbEstudiante->fec_regis_est }}
                        </div>
                        <div class="form-group">
                            <strong>Padre Del Est:</strong>
                            {{ $tbEstudiante->padre_del_est }}
                        </div>
                        <div class="form-group">
                            <strong>Madre Del Est:</strong>
                            {{ $tbEstudiante->madre_del_est }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Trab Padre Est:</strong>
                            {{ $tbEstudiante->nombre_trab_padre_est }}
                        </div>
                        <div class="form-group">
                            <strong>Tel Trab Padre Est:</strong>
                            {{ $tbEstudiante->tel_trab_padre_est }}
                        </div>
                        <div class="form-group">
                            <strong>Dir Trab Padre Est:</strong>
                            {{ $tbEstudiante->dir_trab_padre_est }}
                        </div>
                        <div class="form-group">
                            <strong>Cole Est:</strong>
                            {{ $tbEstudiante->cole_est }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo Est:</strong>
                            {{ $tbEstudiante->sexo_est }}
                        </div>
                        <div class="form-group">
                            <strong>Numsol Est:</strong>
                            {{ $tbEstudiante->numsol_est }}
                        </div>
                        <div class="form-group">
                            <strong>Insc Est:</strong>
                            {{ $tbEstudiante->insc_est }}
                        </div>
                        <div class="form-group">
                            <strong>Dom Est:</strong>
                            {{ $tbEstudiante->dom_est }}
                        </div>
                        <div class="form-group">
                            <strong>Lug Nac Est:</strong>
                            {{ $tbEstudiante->lug_nac_est }}
                        </div>
                        <div class="form-group">
                            <strong>Trab Dir Est:</strong>
                            {{ $tbEstudiante->trab_dir_est }}
                        </div>
                        <div class="form-group">
                            <strong>Trab Fono Est:</strong>
                            {{ $tbEstudiante->trab_fono_est }}
                        </div>
                        <div class="form-group">
                            <strong>Trab Nombre Est:</strong>
                            {{ $tbEstudiante->trab_nombre_est }}
                        </div>
                        <div class="form-group">
                            <strong>Dato Bachi Est:</strong>
                            {{ $tbEstudiante->dato_bachi_est }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Cole Est:</strong>
                            {{ $tbEstudiante->tipo_cole_est }}
                        </div>
                        <div class="form-group">
                            <strong>Pais Cod Est:</strong>
                            {{ $tbEstudiante->pais_cod_est }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Emitb Est:</strong>
                            {{ $tbEstudiante->fec_emitb_est }}
                        </div>
                        <div class="form-group">
                            <strong>Sede Emit Est:</strong>
                            {{ $tbEstudiante->sede_emit_est }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Tranf Est:</strong>
                            {{ $tbEstudiante->fec_tranf_est }}
                        </div>
                        <div class="form-group">
                            <strong>Fact Doc Tipo Est:</strong>
                            {{ $tbEstudiante->fact_doc_tipo_est }}
                        </div>
                        <div class="form-group">
                            <strong>Fact Doc Numero Est:</strong>
                            {{ $tbEstudiante->fact_doc_numero_est }}
                        </div>
                        <div class="form-group">
                            <strong>Fact Nombre Est:</strong>
                            {{ $tbEstudiante->fact_nombre_est }}
                        </div>
                        <div class="form-group">
                            <strong>Foto Est:</strong>
                            {{ $tbEstudiante->foto_est }}
                        </div>
                        <div class="form-group">
                            <strong>Est Pass:</strong>
                            {{ $tbEstudiante->est_pass }}
                        </div>
                        <div class="form-group">
                            <strong>Obs Est:</strong>
                            {{ $tbEstudiante->obs_est }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
