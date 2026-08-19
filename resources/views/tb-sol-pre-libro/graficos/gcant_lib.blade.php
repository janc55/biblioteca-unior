<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">

            @foreach ($tbLibros as $tbLibros)

            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$tbLibros->tl_libros}}</h3>

                  <p>TOTAL DE LIBROS</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>

              </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{$tbLibros->tl_tess}}</h3>

                    <p>TOTAL DE PROYECTOS DE GRADO</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>

                </div>
              </div>


              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{$tbLibros->tl_digital}}</h3>

                    <p>TOTAL LIBROS DIGITALES</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>

                </div>
              </div>

              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{$tbLibros->tl_virtual}}</h3>

                    <p>TOTAL DE ENLACES A BIBLIOTECAS</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>

                </div>
              </div>




            @endforeach

            <!-- ./col -->
          </div>










      <div style="width: 900px">
                        <canvas id="grafica"></canvas>
                    </div>
                    <br>
 <br>
                    <div style="width: 900px">
                        <canvas id="torta"></canvas>
                    </div>




          <!-- /.row -->



              <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">



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


const labels = ['TOTAL DE LIBROS',
                        'TOTAL DE PROYECTOS DE GRADO', 'TOTAL LIBROS DIGITALES',
                         'TOTAL DE ENLACES A BIBLIOTECAS']

const graph = document.querySelector("#grafica");

const data = {
	labels: labels,
	datasets: [{
		label:"INVENTARIO",
		data: [{{$tbLibros->tl_libros}}, {{$tbLibros->tl_tess}}, {{$tbLibros->tl_digital}}, {{$tbLibros->tl_virtual}}],
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
        data: [{{$tbLibros->tl_libros}}, {{$tbLibros->tl_tess}}, {{$tbLibros->tl_digital}}, {{$tbLibros->tl_virtual}}],
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
