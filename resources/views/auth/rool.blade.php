
<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>



<div class="card">



      <div class="card-header">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title">
              Libros
            </span>



        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card-header">
      <h3 class="card-title">REGISTRAR LIBROS/TESIS/BIBLIOTECA</h3>
      <br>

      <form method="POST" action="{{ route('bus_lib_ad') }}"  role="form" enctype="multipart/form-data">
          @csrf
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


                                    <th>Editar</th>
                                    <th>Nombre</th>


                                    <th>CI</th>
                                    <th>Tipo</th>
                                    <th>Rool</th>


                                </tr>
                            </thead>
                            <tbody>

                                `id`,`nombre`,`ci`,`rool`,`tipo`
                                @foreach ($us as $usu)
                                    <tr>
                                       <td>

                                        <button onclick="openModal('{{ $usu->id }}')" class="btn btn-primary">
                                            <i class="fa fa-cogs"></i> Roles
                                        </button>
</td>
                                        <td>{{ $usu->nombre }}</td>
                                        <td>{{ $usu->ci }}</td>
                                        <td>{{ $usu->tipo }}</td>
                                        <td>{{ $usu->rool }}</td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>





<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-sm"> <!-- Cambia modal-lg a modal-sm -->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Title</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">



                 <form method="POST" action="{{ route('roles_list.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf
            <div class="form-group">
              <label for="id">ID:</label>
              <input type="text" class="form-control" id="id" name="id" value="" readonly>
            </div>
            <div class="form-group">
              <label for="libros">LIBROS:</label>
              <input type="checkbox" class="form-control" id="libros" name="libros">
            </div>
            <div class="form-group">
              <label for="presentaciones">PRESENTACIONES:</label>
              <input type="checkbox" class="form-control" id="presentaciones" name="presentaciones">
            </div>
            <div class="form-group">
              <label for="atencion">ATENCIÓN:</label>
              <input type="checkbox" class="form-control" id="atencion" name="atencion">
            </div>
            <div class="form-group">
              <label for="registrar_bibliotecas">REGISTRAR BIBLIOTECAS:</label>
              <input type="checkbox" class="form-control" id="registrar_bibliotecas" name="registrar_bibliotecas">
            </div>
            <div class="form-group">
              <label for="graficos_reportes">GRÁFICOS Y REPORTES:</label>
              <input type="checkbox" class="form-control" id="graficos_reportes" name="graficos_reportes">
            </div>
            <div class="form-group">
              <label for="usuarios">USUARIOS:</label>
              <input type="checkbox" class="form-control" id="usuarios" name="usuarios">
            </div>
            <button type="submit" class="btn btn-primary" onclick="sendDataToModal()">Enviar</button>

          </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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


function openModal(id) {
  $('#myModal').modal('show');
  $('#id').val(id);
}



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
