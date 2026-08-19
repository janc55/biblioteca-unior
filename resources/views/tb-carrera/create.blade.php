@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Carrera</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agregar Carrera</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('carreras.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            
                            <div class="form-group">
                                <label class="form-control">Sigla</label>
                                <input type="text"  name="sigla_carre" id="sigla_carre"   class="form-control bi bi-0-square-fill" placeholder="Sigla">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Nombre</label>
                                <input type="text"  name="nombre_carre" id="nombre_carre"   class="form-control bi bi-0-square-fill" placeholder="Nombre">
                                <div class="invalid-feedback">:message</div>
                            </div>            

                            <div class="form-group">
                            <label class="form-control">Habilitación</label>
                            <select name="habi_carre" id="habi_carre" class="form-control">
                                <option value="1"> HABILITADO</option>
                                <option value="0"> NO HABILITADO</option>                                
                            </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control">Fecha</label>
                                <input type="date"  name="fec_carre" id="fec_carre"   class="form-control bi bi-0-square-fill" placeholder="Fecha">
                                <div class="invalid-feedback">:message</div>
                            </div>            
                            <!-- <div class="form-group">
                                <label class="form-control">Imp_carre</label>
                                <input type="text"  name="imp_carre" id="imp_carre"   class="form-control bi bi-0-square-fill" placeholder="imp_carre">
                                <div class="invalid-feedback">:message</div>
                            </div>             -->
                            <div class="form-group">
                                <label class="form-control">Resolución</label>
                                <input type="text"  name="res_carre" id="res_carre"   class="form-control bi bi-0-square-fill" placeholder="Resolución">
                                <div class="invalid-feedback">:message</div>
                            </div>       

                            <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Crear Materia</button>


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

