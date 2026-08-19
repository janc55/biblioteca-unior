<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tb Enlace Bi</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tb-enlace-bis.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tb-enlace-bi.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "bofer.php";?>
