<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>



    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Solicitud Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitud-libros.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id So Lib:</strong>
                            {{ $solicitudLibro->id_so_lib }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $solicitudLibro->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Detalle Solicitud:</strong>
                            {{ $solicitudLibro->detalle_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Solicitud:</strong>
                            {{ $solicitudLibro->fecha_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $solicitudLibro->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- /.content -->
</div>







<!-- /.row -->



    <!-- /.card -->
  </section>
  <!-- /.Left col -->
  <!-- right col (We are only adding the ID to make the widgets sortable)-->



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


const labels = ['TOTAL DE LIBROS',
              'TOTAL DE PROYECTOS DE GRADO', 'TOTAL LIBROS DIGITALES',
               'TOTAL DE ENLACES A BIBLIOTECAS']

const graph = document.querySelector("#grafica");

const data = {
labels: labels,
datasets: [{
label:"INVENTARIO",
data: [{{$tbLibrose->tl_libros}}, {{$tbLibrose->tl_tess}}, {{$tbLibrose->tl_digital}}, {{$tbLibrose->tl_virtual}}],
backgroundColor: 'rgba(9, 129, 176, 0.2)'
}]
};

const config = {
type: 'bar',
data: data,
};
new Chart(graph, config);







const labels2 = ['TOTAL DE LIBROS',
              'TOTAL DE PROYECTOS DE GRADO', 'TOTAL LIBROS DIGITALES',
               'TOTAL DE ENLACES A BIBLIOTECAS']
const colors2 = ['rgb(69,177,223)', 'rgb(99,201,122)', 'rgb(203,82,82)', 'rgb(229,224,88)'];

const torta = document.querySelector("#torta");

const data2 = {
labels: labels2,
datasets: [{
data: [{{$tbLibrose->tl_libros}}, {{$tbLibrose->tl_tess}}, {{$tbLibrose->tl_digital}}, {{$tbLibrose->tl_virtual}}],
backgroundColor: colors2
}]
};

const config2 = {
type: 'pie',
data: data2,
};

new Chart(torta, config2);






$(function () {
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
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
