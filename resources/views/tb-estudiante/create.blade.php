@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Registrar Estudiante</span>
                    </div>
                    <div class="card-body">



                        <form method="POST" action="{{ route('estudiantes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="form-control">Nombre</label>
                                <input type="text"  name="nombre_est" id="nombre_est"
                                 class="form-control bi bi-0-square-fill" placeholder="Nombre del Estudiante">
                                <div class="invalid-feedback">:message</div>
                            </div>


                            <div class="form-group">
                                <label class="form-control">Apellido Paterno</label>
                                <input type="text"  name="ape_p_est" id="ape_p_est" class="form-control bi bi-0-square-fill" placeholder="Apellido Paterno del Estudiante">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Apellido Materno</label>
                                <input type="text"  name="ape_m_est" id="ape_m_est" class="form-control bi bi-0-square-fill" placeholder="Apellido Materno del Estudiante">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Fecha de Nacimiento</label>
                                <input type="date"  name="fec_nac_est" id="fec_nac_est"   class="form-control bi bi-0-square-fill" placeholder="Fecha de Nacimiento">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">CI</label>
                                <input type="text"  name="ci_est" id="ci_est"   class="form-control bi bi-0-square-fill" placeholder="Carnet">
                                <div class="invalid-feedback">:message</div>
                            </div>
                            <div class="form-group">
                                <label class="form-control">Domicilio</label>
                                <input type="text"  name="dir_est" id="dir_est"   class="form-control bi bi-0-square-fill" placeholder="Domicilio del Estudiante">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Teléfono</label>
                                <input type="number"  name="tel_dom_est" id="tel_dom_est"   class="form-control bi bi-0-square-fill" placeholder="Teléfono">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Celular</label>
                                <input type="number"  name="cel_est" id="cel_est"   class="form-control bi bi-0-square-fill" placeholder="Celular">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                            <label class="form-control">Carrera</label>
                            <select name="id_c" id="id_c" class="form-control">
                            @foreach ($tbCarrera as $tbCarrera)
                                    <option value="{{ $tbCarrera->id_carre}}">
                                            <td> {{ $tbCarrera->nombre_carre }}</td>
                                    </option>
                                @endforeach
                            </select>
                            </div>

                            <div class="form-group">
                            <label class="form-control">Plan de Inscripción</label>
                            <select name="id_plan" id="id_plan" class="form-control">
                            <option value="1"> PLAN REGULAR</option>
                                <option value="2"> PLAN CONTADO</option>
                                <option value="3"> PLAN UNIOR</option>
                            </select>
                            </div>

                            <div class="form-group">
                            <label class="form-control">Turno</label>
                                            <select class="form-control" name="id_turno" id="id_turno" value="" style="background-color:snow; color:green; ">
                                                <option value="1"> MAÑANA</option>
                                                <option value="2"> TARDE</option>
                                                <option value="3"> NOCHE</option>
                                            </select>
                            </div>
                            <div class="form-group" hidden>
                                <label class="form-control">N° Serie</label>
                                <input type="number"  name="nro_serie" id="nro_serie"   class="form-control bi bi-0-square-fill" value="00456">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Contraseña</label>
                                <input type="password"  name="pass" id="pass"   class="form-control bi bi-0-square-fill" placeholder="INGRESA CONTRASEÑA">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <!-- <input class="form-control" type="text" name="pr" id="pr" value=''> -->

                            <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Crear Estudiante</button>

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
