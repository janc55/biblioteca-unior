@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario Administrativo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuario-administrativos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuarioAdministrativo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $usuarioAdministrativo->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Contrasena:</strong>
                            {{ $usuarioAdministrativo->contrasena }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $usuarioAdministrativo->tipo }}
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
