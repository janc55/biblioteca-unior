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
                            <span class="card-title">Show Tb Asignacion Mat Est</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignacionest.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Asig Mat Est:</strong>
                            {{ $tbAsignacionMatEst->id_asig_mat_est }}
                        </div>
                        <div class="form-group">
                            <strong>Id Asig Mat:</strong>
                            {{ $tbAsignacionMatEst->id_asig_mat }}
                        </div>
                        <div class="form-group">
                            <strong>Id Est:</strong>
                            {{ $tbAsignacionMatEst->id_est }}
                        </div>
                        <div class="form-group">
                            <strong>Eval P1:</strong>
                            {{ $tbAsignacionMatEst->eval_p1 }}
                        </div>
                        <div class="form-group">
                            <strong>Eval P2:</strong>
                            {{ $tbAsignacionMatEst->eval_p2 }}
                        </div>
                        <div class="form-group">
                            <strong>Eval Fin:</strong>
                            {{ $tbAsignacionMatEst->eval_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Eval 2T:</strong>
                            {{ $tbAsignacionMatEst->eval_2t }}
                        </div>
                        <div class="form-group">
                            <strong>Obs Asig:</strong>
                            {{ $tbAsignacionMatEst->obs_asig }}
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
