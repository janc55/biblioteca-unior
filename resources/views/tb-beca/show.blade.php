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
                            <span class="card-title">Show Tb Beca</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('becas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Beca:</strong>
                            {{ $tbBeca->id_beca }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Beca:</strong>
                            {{ $tbBeca->nombre_beca }}
                        </div>
                        <div class="form-group">
                            <strong>Sigla Beca:</strong>
                            {{ $tbBeca->sigla_beca }}
                        </div>
                        <div class="form-group">
                            <strong>Habi Beca:</strong>
                            {{ $tbBeca->habi_beca }}
                        </div>
                        <div class="form-group">
                            <strong>Prom Beca:</strong>
                            {{ $tbBeca->prom_beca }}
                        </div>
                        <div class="form-group">
                            <strong>Desc Beca:</strong>
                            {{ $tbBeca->desc_beca }}
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
