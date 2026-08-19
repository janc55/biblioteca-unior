@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Plan de Estudios</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Carre Materia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carrematerias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Carre Mater:</strong>
                            {{ $tbCarreMateria->id_carre_mater }}
                        </div>
                        <div class="form-group">
                            <strong>Id Carre:</strong>
                            {{ $tbCarreMateria->id_carre }}
                        </div>
                        <div class="form-group">
                            <strong>Id Materia:</strong>
                            {{ $tbCarreMateria->id_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sem:</strong>
                            {{ $tbCarreMateria->id_sem }}
                        </div>
                        <div class="form-group">
                            <strong>Cred Materia:</strong>
                            {{ $tbCarreMateria->cred_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Ht Materia:</strong>
                            {{ $tbCarreMateria->ht_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Hp Materia:</strong>
                            {{ $tbCarreMateria->hp_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Tse Materia:</strong>
                            {{ $tbCarreMateria->tse_materia }}
                        </div>
                        <!-- <div class="form-group">
                            <strong>Tsm Materia:</strong>
                            {{ $tbCarreMateria->tsm_materia }}
                        </div> -->
                        <div class="form-group">
                            <strong>Id Cat Mat:</strong>
                            {{ $tbCarreMateria->id_cat_mat }}
                        </div>
                        <!-- <div class="form-group">
                            <strong>Are Materia:</strong>
                            {{ $tbCarreMateria->are_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Ord Materia:</strong>
                            {{ $tbCarreMateria->ord_materia }}
                        </div>
                        <div class="form-group">
                            <strong>Obs Materia:</strong>
                            {{ $tbCarreMateria->obs_materia }}
                        </div> -->
                        <div class="form-group">
                            <strong>Id Plane:</strong>
                            {{ $tbCarreMateria->id_planE }}
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
