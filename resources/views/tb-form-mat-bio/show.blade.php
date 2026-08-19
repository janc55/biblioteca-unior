<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Form Mat Bio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-form-mat-bios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Mab:</strong>
                            {{ $tbFormMatBio->id_mab }}
                        </div>
                        <div class="form-group">
                            <strong>Id Us:</strong>
                            {{ $tbFormMatBio->id_us }}
                        </div>
                        <div class="form-group">
                            <strong>Titlo Lib:</strong>
                            {{ $tbFormMatBio->titlo_lib }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $tbFormMatBio->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Edicion:</strong>
                            {{ $tbFormMatBio->edicion }}
                        </div>
                        <div class="form-group">
                            <strong>Anio:</strong>
                            {{ $tbFormMatBio->anio }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $tbFormMatBio->editorial }}
                        </div>
                        <div class="form-group">
                            <strong>Nom Lug Com:</strong>
                            {{ $tbFormMatBio->nom_lug_com }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $tbFormMatBio->costo }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $tbFormMatBio->materia }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tbFormMatBio->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
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












</body>
</html>
