<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
             @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
             @endif


                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modificar</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('libros.update', $tbLibro->id_libro) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tb-libro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "bofer.php";?>
