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
                            <span class="card-title">Show Tb Boleta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('boletas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Boleta:</strong>
                            {{ $tbBoleta->id_boleta }}
                        </div>
                        <div class="form-group">
                            <strong>Id Est:</strong>
                            {{ $tbBoleta->id_est }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Reg Boleta:</strong>
                            {{ $tbBoleta->fec_reg_boleta }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Depos Boleta:</strong>
                            {{ $tbBoleta->fec_depos_boleta }}
                        </div>
                        <div class="form-group">
                            <strong>Id Cuenta:</strong>
                            {{ $tbBoleta->id_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Id Gestion:</strong>
                            {{ $tbBoleta->id_gestion }}
                        </div>
                        <div class="form-group">
                            <strong>Nro Depos:</strong>
                            {{ $tbBoleta->nro_depos }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Boleta:</strong>
                            {{ $tbBoleta->monto_boleta }}
                        </div>
                        <div class="form-group">
                            <strong>Bs Boleta:</strong>
                            {{ $tbBoleta->bs_boleta }}
                        </div>
                        <div class="form-group">
                            <strong>Obs Boleta:</strong>
                            {{ $tbBoleta->obs_boleta }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Trans Boleta:</strong>
                            {{ $tbBoleta->fec_trans_boleta }}
                        </div>
                        <div class="form-group">
                            <strong>Terminal Boleta:</strong>
                            {{ $tbBoleta->terminal_boleta }}
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
