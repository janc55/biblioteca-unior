@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-docentes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Doc:</strong>
                            {{ $tbDocente->id_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Doc:</strong>
                            {{ $tbDocente->nombre_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Ape P Doc:</strong>
                            {{ $tbDocente->ape_p_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Ape M Doc:</strong>
                            {{ $tbDocente->ape_m_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Doc:</strong>
                            {{ $tbDocente->cod_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $tbDocente->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Expedido:</strong>
                            {{ $tbDocente->expedido }}
                        </div>
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $tbDocente->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Nac Doc:</strong>
                            {{ $tbDocente->fec_nac_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Tel Dom Doc:</strong>
                            {{ $tbDocente->tel_dom_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Cel Doc:</strong>
                            {{ $tbDocente->cel_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Dom Doc:</strong>
                            {{ $tbDocente->dom_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Lug Doc:</strong>
                            {{ $tbDocente->lug_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Dir Trab Doc:</strong>
                            {{ $tbDocente->dir_trab_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Tel Trab Doc:</strong>
                            {{ $tbDocente->tel_trab_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Email Doc:</strong>
                            {{ $tbDocente->email_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Civ Doc:</strong>
                            {{ $tbDocente->estado_civ_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Nacional Doc:</strong>
                            {{ $tbDocente->nacional_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Obser Doc:</strong>
                            {{ $tbDocente->obser_doc }}
                        </div>
                        <div class="form-group">
                            <strong>Foto Doc:</strong>
                            {{ $tbDocente->foto_doc }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
