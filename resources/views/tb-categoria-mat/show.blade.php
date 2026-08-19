@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categoria de Materias</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Categoria de Materias</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categoriamats.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cat Mat:</strong>
                            {{ $tbCategoriaMat->id_cat_mat }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Cat Mat:</strong>
                            {{ $tbCategoriaMat->nombre_cat_mat }}
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
