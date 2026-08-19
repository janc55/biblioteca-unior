@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Planes de Gestiones</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Plane</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('planegest.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Plane:</strong>
                            {{ $tb_planesgestiones->id_planE }}
                        </div>
                        <div class="form-group">
                            <strong>Cod Geste:</strong>
                            {{ $tb_planesgestiones->cod_gestE }}
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
