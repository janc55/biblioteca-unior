<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>



    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
            
                            </span>

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif



                    <form action="{{ route('vista-log-sessions.index') }}" method="GET">
  <div class="form-group">
    <label for="start_date">Start Date:</label>
    <input type="date" class="form-control" name="start_date" id="start_date">
  </div>

  <div class="form-group">
    <label for="end_date">End Date:</label>
    <input type="date" class="form-control" name="end_date" id="end_date">
  </div>

  <button type="submit" class="btn btn-primary">Search</button>
</form>

                    <div class="card-body">
                        <div class="table-responsive">
                      
    <table id="example1" class="table table-bordered table-striped">
          <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo Usuario</th>
										<th>Fecha Hora</th>
										<th>Ip</th>
										<th>Nombre</th>
										<th>Ci</th>
										<th>Cel</th>
							
										<th>Usuario</th>

										<th>TIPO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vistaLogSessions as $vistaLogSession)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vistaLogSession->user_id }}</td>
											<td>{{ $vistaLogSession->fecha_hora }}</td>
											<td>{{ $vistaLogSession->ip }}</td>
											<td>{{ $vistaLogSession->nombre }}</td>
											<td>{{ $vistaLogSession->ci }}</td>
											<td>{{ $vistaLogSession->cel }}</td>
										
											<td>{{ $vistaLogSession->email }}</td>

                                            <td>{{ $vistaLogSession->tipo }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $vistaLogSessions->links() !!}
            </div>
        </div>
    </div>

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
