@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Docente</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agregar Docente</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('docente.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="form-control">Nombre</label>
                                <input type="text"  name="nombre_doc" id="nombre_doc"
                                 class="form-control bi bi-0-square-fill" placeholder="Nombre del Docente">
                                <div class="invalid-feedback">:message</div>
                            </div>


                            <div class="form-group">
                                <label class="form-control">Apellido Paterno</label>
                                <input type="text"  name="ape_p_doc" id="ape_p_doc" class="form-control bi bi-0-square-fill" placeholder="Apellido Paterno del Docente">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Apellido Materno</label>
                                <input type="text"  name="ape_m_doc" id="ape_m_doc" class="form-control bi bi-0-square-fill" placeholder="Apellido Materno del Docente">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Fecha de Nacimiento</label>
                                <input type="date"  name="fec_nac_doc" id="fec_nac_doc"   class="form-control bi bi-0-square-fill" placeholder="Fecha de Nacimiento">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">CI</label>
                                <input type="text"  name="ci" id="ci"   class="form-control bi bi-0-square-fill" placeholder="Carnet">
                                <div class="invalid-feedback">:message</div>
                            </div>
                            <div class="form-group">
                                <label class="form-control">Domicilio</label>
                                <input type="text"  name="dir_doc" id="dir_doc"   class="form-control bi bi-0-square-fill" placeholder="Domicilio del Docente">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Teléfono</label>
                                <input type="number"  name="tel_dom_doc" id="tel_dom_doc"   class="form-control bi bi-0-square-fill" placeholder="Teléfono">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Celular</label>
                                <input type="number"  name="cel_doc" id="cel_doc"   class="form-control bi bi-0-square-fill" placeholder="Celular">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                            <label class="form-control">Expedido</label>
                            <select name="expedido" id="expedido" class="form-control">
                                <option value="OR"> ORURO</option>
                                <option value="CB"> COCHABAMBA</option>
                                <option value="LP"> LA PAZ</option>
                                <option value="SC"> SANTA CRUZ</option>
                                <option value="PO"> POTOSI</option>
                                <option value="CH"> CHUQUISACA</option>
                                <option value="BE"> BENI</option>
                                <option value="TA"> TARIJA</option>
                                <option value="PA"> PANDO</option>
                            </select>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Grado</label>
                                <select name="grado" id="grado"  class="form-control bi bi-0-square-fill" style="color:green; ">
                                    <option value="Lic">Lic - Licenciado</option>
                                    <option value="Dr" >Dr - Doctor</option>
                                    <option value="Ing" >Ing - Ingeniero</option>

                                </select>
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <div class="form-group">
                                <label class="form-control">Observaciones</label>
                                <input type="text"  name="obser_doc" id="obser_doc"   class="form-control bi bi-0-square-fill" placeholder=" " value="Ninguna">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <!-- <div class="form-group">
                            <label style="color:green; " class="form-control">Tipo de Usuario</label>
                            <select name="tipo_adm_doc" id="tipo_adm_doc" class="form-control" style="color:green; ">
                                <option value="Administrador"> Administrador</option>
                                <option value="Visitante">Visitante</option>
                            </select>
                            </div> -->
                            <div class="form-group">
                                <label class="form-control">Contraseña</label>
                                <input type="password"  name="doc_pass" id="doc_pass"   class="form-control bi bi-0-square-fill" placeholder="INGRESA CONTRASEÑA">
                                <div class="invalid-feedback">:message</div>
                            </div>

                            <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Crear Docente</button>

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
