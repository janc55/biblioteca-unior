<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Pres Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-pres-libros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Pres:</strong>
                            {{ $tbPresLibro->id_pres }}
                        </div>
                        <div class="form-group">
                            <strong>Des Pres:</strong>
                            {{ $tbPresLibro->des_pres }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "bofer.php";?>
