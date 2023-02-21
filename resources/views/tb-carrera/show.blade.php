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
                            <span class="card-title">Show Tb Carrera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carreras.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Carre:</strong>
                            {{ $tbCarrera->id_carre }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Carre:</strong>
                            {{ $tbCarrera->nombre_carre }}
                        </div>
                        <div class="form-group">
                            <strong>Sigla Carre:</strong>
                            {{ $tbCarrera->sigla_carre }}
                        </div>
                        <div class="form-group">
                            <strong>Habi Carre:</strong>
                            {{ $tbCarrera->habi_carre }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Carre:</strong>
                            {{ $tbCarrera->fec_carre }}
                        </div>
                        <div class="form-group">
                            <strong>Imp Carre:</strong>
                            {{ $tbCarrera->imp_carre }}
                        </div>
                        <div class="form-group">
                            <strong>Res Carre:</strong>
                            {{ $tbCarrera->res_carre }}
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

