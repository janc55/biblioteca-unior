<?php $values = auth()->user()->permisos;  include "est.php";?>



    <!-- Main content -->
    <section class="content">


 
    <form method="POST" action="{{ route('registroforbi') }}" role="form" enctype="multipart/form-data">
        @csrf

        <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Fecha de Solicitud:</label>
            <span style="font-style:normal;font-weight:normal;font-size:12pt;font-family:Times New Roman;color:#000000">{{ \Carbon\Carbon::now() }}</span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Título del libro:</label>
            <input type="text" name="tit" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Autor:</label>
            <input type="text" name="autor" class="form-control">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Edición:</label>
            <input type="text" name="edicion" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Año:</label>
            <input type="text" name="anio" class="form-control">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Editorial:</label>
            <input type="text" name="edi" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Dirección para la compra:</label>
            <input type="text" name="dir_comp" class="form-control">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>Nombre del lugar de compra:</label>
            <input type="text" name="nomcomp" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Costo Bs./$:</label>
            <input type="text" name="costo" class="form-control">
        </div>
    </div>
</div>

<div class="form-group">
    <label>Materia a la cual se añadirá la Bibliografía:</label>
    <input type="text" name="mat" class="form-control">
</div>

<div class="text-center">
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-save"></i> Registrar
    </button>
</div>

    </form>


</section>

<?php include "bofer.php";?>

