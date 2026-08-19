<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Enlace Bi</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-enlace-bis.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Enlib:</strong>
                            {{ $tbEnlaceBi->id_enlib }}
                        </div>
                        <div class="form-group">
                            <strong>Dir:</strong>
                            {{ $tbEnlaceBi->dir }}
                        </div>
                        <div class="form-group">
                            <strong>Foto:</strong>
                            {{ $tbEnlaceBi->foto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "bofer.php";?>

