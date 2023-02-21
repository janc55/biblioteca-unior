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
                            <span class="card-title">Show Tb Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Materia:</strong>
                            {{ $tbMateria->id_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Mat:</strong>
                            {{ $tbMateria->codigo_mat }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Mat:</strong>
                            {{ $tbMateria->nombre_mat }}
                        </div>
                        <div class="form-group">
                            <strong>Habi Mat:</strong>
                            {{ $tbMateria->habi_mat }}
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
