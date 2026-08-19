<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Form Sol</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-form-sols.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Formsol:</strong>
                            {{ $tbFormSol->id_formsol }}
                        </div>
                        <div class="form-group">
                            <strong>Id Us:</strong>
                            {{ $tbFormSol->id_us }}
                        </div>
                        <div class="form-group">
                            <strong>Gci:</strong>
                            {{ $tbFormSol->gci }}
                        </div>
                        <div class="form-group">
                            <strong>Gcre:</strong>
                            {{ $tbFormSol->gcre }}
                        </div>
                        <div class="form-group">
                            <strong>Activi:</strong>
                            {{ $tbFormSol->activi }}
                        </div>
                        <div class="form-group">
                            <strong>Des1:</strong>
                            {{ $tbFormSol->des1 }}
                        </div>
                        <div class="form-group">
                            <strong>Des2:</strong>
                            {{ $tbFormSol->des2 }}
                        </div>
                        <div class="form-group">
                            <strong>Des3:</strong>
                            {{ $tbFormSol->des3 }}
                        </div>
                        <div class="form-group">
                            <strong>Des4:</strong>
                            {{ $tbFormSol->des4 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant1:</strong>
                            {{ $tbFormSol->cant1 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant2:</strong>
                            {{ $tbFormSol->cant2 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant3:</strong>
                            {{ $tbFormSol->cant3 }}
                        </div>
                        <div class="form-group">
                            <strong>Cant4:</strong>
                            {{ $tbFormSol->cant4 }}
                        </div>
                        <div class="form-group">
                            <strong>Cod1:</strong>
                            {{ $tbFormSol->cod1 }}
                        </div>
                        <div class="form-group">
                            <strong>Cod2:</strong>
                            {{ $tbFormSol->cod2 }}
                        </div>
                        <div class="form-group">
                            <strong>Cod3:</strong>
                            {{ $tbFormSol->cod3 }}
                        </div>
                        <div class="form-group">
                            <strong>Cod4:</strong>
                            {{ $tbFormSol->cod4 }}
                        </div>
                        <div class="form-group">
                            <strong>Obs1:</strong>
                            {{ $tbFormSol->obs1 }}
                        </div>
                        <div class="form-group">
                            <strong>Obs2:</strong>
                            {{ $tbFormSol->obs2 }}
                        </div>
                        <div class="form-group">
                            <strong>Obs3:</strong>
                            {{ $tbFormSol->obs3 }}
                        </div>
                        <div class="form-group">
                            <strong>Obs4:</strong>
                            {{ $tbFormSol->obs4 }}
                        </div>
                        <div class="form-group">
                            <strong>Fec Sa:</strong>
                            {{ $tbFormSol->fec_sa }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Sa:</strong>
                            {{ $tbFormSol->hora_sa }}
                        </div>
                        <div class="form-group">
                            <strong>Estsa:</strong>
                            {{ $tbFormSol->estsa }}
                        </div>
                        <div class="form-group">
                            <strong>Fec De:</strong>
                            {{ $tbFormSol->fec_de }}
                        </div>
                        <div class="form-group">
                            <strong>Hora De:</strong>
                            {{ $tbFormSol->hora_de }}
                        </div>
                        <div class="form-group">
                            <strong>Estde:</strong>
                            {{ $tbFormSol->estde }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tbFormSol->estado }}
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












</body>
</html>
