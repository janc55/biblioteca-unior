@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tb Estudiante</span>
                    </div>
                    <div class="card-body">



                        <form method="POST" action="{{ route('estudiantes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="" >Nombre</label>
                                <input type="text"  name="nombre_est" id="nombre_est" value="">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text"  name="ape_p_est" id="ape_p_est" value="">
                            </div>
                            
                            <div class="form-group">
                                <label for="">Apellido Paterno</label>
                                <input type="text"  name="ape_m_est" id="ape_m_est" value="">
                            </div>

                            <div class="form-group">
                                <label for="">Fecha de Nacimiento</label>
                                <input type="date"  name="fec_nac_est" id="fec_nac_est" value="">
                            </div>

                            <div class="form-group">
                                <label for="">CI</label>
                                <input type="text"  name="ci_est" id="ci_est" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Domicilio</label>
                                <input type="text"  name="dir_est" id="dir_est" value="">
                            </div>

                            <div class="form-group">
                                <label for="">Teléfono</label>
                                <input type="number"  name="tel_dom_est" id="tel_dom_est" value="">
                            </div>

                            <div class="form-group">
                                <label for="">Celular</label>
                                <input type="number"  name="cel_est" id="cel_est" value="">
                            </div>
                         



                            <div class="form-group">
           <select name="id_c" id="id_c">
           @foreach ($tbCarrera as $tbCarrera)
                <option value="{{ $tbCarrera->id_carre}}">                      
				        <td> {{ $tbCarrera->nombre_carre }}</td>
                </option> 
            @endforeach
           </select>
        </div>

        <div class="form-group">
           <select name="id_plan" id="id_plan">
           <option value="1"> PLAN REGULAR</option>
            <option value="2"> PLAN CONTADO</option>
            <option value="3"> PLAN UNIOR</option>
           </select>
        </div>

                            <div class="form-group">
                                            <select name="id_turno" id="id_turno" value="" style="background-color:green; color:white; ">
                                                <option value="1"> MAÑANA</option>
                                                <option value="2"> TARDE</option>
                                                <option value="3"> NOCHE</option>
                                            </select>
                            </div>
                                            <input type="text" name="pr" id="pr" value=''>
                                                
                            <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Asignar</button>
                                            
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
