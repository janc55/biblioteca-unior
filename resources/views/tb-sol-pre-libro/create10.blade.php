<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
          <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">crear trabajos de postgrado</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('libros.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">

                               

                                    <div class="form-group">
                                        {{ Form::label('codigo') }}
                                        {{ Form::text('codigo', $tbLibro->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
                                        {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('año') }}
                                        {{ Form::text('año', $tbLibro->año, ['class' => 'form-control' . ($errors->has('año') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
                                        {!! $errors->first('año', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group" >
                                        {{ Form::label('trabajo_grado') }}
                                        {{ Form::text('trabajo_grado', $tbLibro->trabajo_grado, ['class' => 'form-control' . ($errors->has('trabajo_grado') ? ' is-invalid' : ''), 'placeholder' => 'Trabajo Grado']) }}
                                        {!! $errors->first('trabajo_grado', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                   

                                 
                                    <div class="form-group">
                                        {{ Form::label('autores') }}
                                        {{ Form::text('autores', $tbLibro->autores, ['class' => 'form-control' . ($errors->has('autores') ? ' is-invalid' : ''), 'placeholder' => 'Autores']) }}
                                        {!! $errors->first('autores', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

  <div class="form-group">
                                        {{ Form::label('titulo') }}
                                        {{ Form::text('titulo', $tbLibro->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                                        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('genero') }}
                                        {{ Form::text('genero', $tbLibro->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
                                        {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                   
                                  


                                    <div class="form-group">
                                        {{ Form::label('en_biblio') }}
                                        {{ Form::text('en_biblio', $tbLibro->en_biblio, ['class' => 'form-control' . ($errors->has('en_biblio') ? ' is-invalid' : ''), 'placeholder' => 'En Biblio']) }}
                                        {!! $errors->first('en_biblio', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('en_arch') }}
                                        {{ Form::text('en_arch', $tbLibro->en_arch, ['class' => 'form-control' . ($errors->has('en_arch') ? ' is-invalid' : ''), 'placeholder' => 'En Arch']) }}
                                        {!! $errors->first('en_arch', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                    <div class="form-group">
                                        {{ Form::label('ubicacion') }}
                                        {{ Form::text('ubicacion', $tbLibro->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'ubicacion']) }}
                                        {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>

                                 

                                        <div class="form-group">
                                        <input type="file" name="img">
                                    </div>
                                

                                    <input type="hidden" name="tp" value="10">
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
