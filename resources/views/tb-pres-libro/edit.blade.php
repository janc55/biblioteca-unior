<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Tb Pres Libro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pres_libros.update', $tbPresLibro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tb-pres-libro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "bofer.php";?>
