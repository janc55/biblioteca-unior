
<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>



<div class="card">



      <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title">
              Libros
            </span>



             <div class="float-right">
                <a href="<?php echo e(route('createlibros')); ?>" class="btn btn-primary btn-sm float-right" data-placement="left">
                    <i class="fas fa-book"></i> Registrar Libros
                  </a>


              </div>
        </div>
    </div>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <div class="card-header">
      <h3 class="card-title">REGISTRAR LIBROS</h3>
      <br>

      <form method="POST" action="<?php echo e(route('bus_lib_ad')); ?>"  role="form" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
      <div class="form-group mb-2">
        <label for="staticEmail2" class="sr-only">Buscar:</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Buscar:">
      </div>
      <div class="form-group mx-sm-3 mb-2">
        <label for="bus" class="sr-only">Buscar</label>
        <input style="background: linear-gradient(90deg, rgba(254,0,0,0.18531162464985995) 100%, rgba(8,0,36,0.5634628851540616) 100%);
        " type="text" class="form-control" name ="bus" id="bus" placeholder="Ingresar Librio">
     <button type="submit" class="btn btn-primary mb-2">Buscar</button>
  </div>

    </form>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
                                <tr>
                                


                                    <th>Codigo</th>
                                    <th>Titulo</th>
                                    <th>Autores</th>
                                    <th>Año</th>
                                    <th>Edicion(Volumen)</th>
                                    <th>Editorial</th>

                                    <th>Isbn</th>
                                    <th>Genero</th>
                                    <th>Etiquetas</th>
                                    <th>Url</th>

                                     <th>Ciudad</th>





                                    <th>Descripcion</th>


                                    <th>Nro Paginas</th>
                                    <th>Presentacion</th>
                                    <th>Trabajo Grado</th>
                                    <th>Digital</th>
                                    <th>Nro Copias</th>
                                    <th>En Biblio</th>
                                    <th>En Arch</th>
                                    <th>Ubicacion</th>
                                    <th>Lugar</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $tbLibros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbLibro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    
                                        <td><?php echo e($tbLibro->codigo); ?></td>
                                        <td><?php echo e($tbLibro->titulo); ?></td>
                                        <td><?php echo e($tbLibro->autores); ?></td>
                                        <td><?php echo e($tbLibro->año); ?></td>
                                        <td><?php echo e($tbLibro->volumen); ?></td>
                                        <td><?php echo e($tbLibro->editorial); ?></td>



                                        <td><?php echo e($tbLibro->isbm); ?></td>
                                        <td><?php echo e($tbLibro->genero); ?></td>
                                        <td><?php echo e($tbLibro->etiquetas); ?></td>
                                        <td><?php echo e($tbLibro->url); ?></td>

                                        <td><?php echo e($tbLibro->ciudad); ?></td>





                                        <td><?php echo e($tbLibro->descripcion); ?></td>


                                        <td><?php echo e($tbLibro->nro_paginas); ?></td>
                                        <td><?php echo e($tbLibro->presentacion); ?></td>
                                        <td><?php echo e($tbLibro->trabajo_grado); ?></td>
                                        <td><?php echo e($tbLibro->digital); ?></td>
                                        <td><?php echo e($tbLibro->nro_copias); ?></td>
                                        <td><?php echo e($tbLibro->en_biblio); ?></td>
                                        <td><?php echo e($tbLibro->en_arch); ?></td>
                                        <td><?php echo e($tbLibro->ubicacion); ?></td>
                                        <td><?php echo e($tbLibro->lugar); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('libros.destroy',$tbLibro->id_libro)); ?>" method="POST">
                                                <a class="btn btn-sm btn-primary " href="<?php echo e(route('libros.show',$tbLibro->id_libro)); ?>"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success" href="<?php echo e(route('libros.edit',$tbLibro->id_libro)); ?>"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>







</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
<div class="float-right d-none d-sm-block">
  <b>Version</b> 3.2.0
</div>
<strong>Copyright &copy; 2014-2021 <a href="https://softwaresit.com">SOFTWARESIT</a>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
<script>





$(function () {
$("#example1").DataTable({
  "responsive": true, "lengthChange": false, "autoWidth": false, "searching": false,
  "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
$('#example2').DataTable({
  "paging": true,
  "lengthChange": false,
  "searching": false,
  "ordering": true,
  "info": true,
  "autoWidth": false,
  "responsive": true,
});
});


</script>
</body>
</html>
<?php /**PATH C:\ProgramData\envkit\projects\biblioteca\resources\views/tb-libro/index.blade.php ENDPATH**/ ?>