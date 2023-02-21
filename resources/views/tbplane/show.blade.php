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
                            <span class="card-title">Show Tbplane</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('plane.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Pl:</strong>
                            {{ $tbplane->id_pl }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Plan:</strong>
                            {{ $tbplane->nombre_plan }}
                        </div>
                        <div class="form-group">
                            <strong>Cuotas:</strong>
                            {{ $tbplane->cuotas }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $tbplane->monto }}
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
