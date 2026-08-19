<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Genero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('genero.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Ge:</strong>
                            {{ $tbGenero->id_ge }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tbGenero->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "bofer.php";?>
