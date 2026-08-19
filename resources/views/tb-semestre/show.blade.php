@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Semestres</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Semestre</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('semestres.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Sem:</strong>
                            {{ $tbSemestre->id_sem }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $tbSemestre->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Desc Sem:</strong>
                            {{ $tbSemestre->desc_sem }}
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
