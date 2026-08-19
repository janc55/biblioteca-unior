<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Solicitud Libro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('form_solDireccot.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="box box-info padding-1">
                                <div class="box-body">

                                    <div class="form-group" hidden>
                                        {{ Form::label('id_so_lib') }}
                                        {{ Form::text('id_so_lib', $solicitudLibro->id_so_lib, ['class' => 'form-control' . ($errors->has('id_so_lib') ? ' is-invalid' : ''), 'placeholder' => 'Id So Lib']) }}
                                        {!! $errors->first('id_so_lib', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('CODIGO USUARIO') }}
                                        {{ Form::text('usuario_id', $solicitudLibro->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
                                        {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('detalle_solicitud') }}
                                        {{ Form::text('detalle_solicitud', $solicitudLibro->detalle_solicitud, ['class' => 'form-control' . ($errors->has('detalle_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Detalle Solicitud']) }}
                                        {!! $errors->first('detalle_solicitud', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('fecha_solicitud') }}
                                        {{ Form::text('fecha_solicitud', $solicitudLibro->fecha_solicitud, ['class' => 'form-control' . ($errors->has('fecha_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Solicitud']) }}
                                        {!! $errors->first('fecha_solicitud', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('estado') }}
                                        {{ Form::text('estado', $solicitudLibro->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
                                        {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<?php include "bofer.php";?>

