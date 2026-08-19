@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Plan de Estudios</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Carre Materia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('carrematerias.update', $tbCarreMateria->id_carre_mater) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tb-carre-materia.form')

                        </form>
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
