@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Prerrequisitos</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Prerrequisito</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('prerrequisito.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Prerreq:</strong>
                            {{ $tbPrerrequisito->id_prerreq }}
                        </div>
                        <div class="form-group">
                            <strong>Id Carre Mater:</strong>
                            {{ $tbPrerrequisito->id_carre_mater }}
                        </div>
                        <div class="form-group">
                            <strong>Id Materia:</strong>
                            {{ $tbPrerrequisito->id_materia }}
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
