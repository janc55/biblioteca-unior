<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>



    <!-- Main content -->
    <section class="content">

        <form action="{{ route('historial_ad') }}" method="GET">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="start_date">Fecha de inicio:</label>
                        <input type="date" name="start_date" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="end_date">Fecha de fin:</label>
                        <input type="date" name="end_date" class="form-control" required>
                    </div>

                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </form>

        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">

            @foreach ($tbLibrose as $tbLibrose)







            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{$tbLibrose->tl_pendidente}}</h3>

                    <p>TOTAL DE LIBROS PENDIENTES</p>
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
                    <h3>{{$tbLibrose->tl_entregado}}</h3>

                    <p>TOTAL DE LIBROS ENTREGADOS</p>
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
                    <h3>{{$tbLibrose->tl_devuelto}}</h3>

                    <p>TOTAL DE LIBROS DEVUELTOS</p>
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
                    <h3>{{$tbLibrose->tl_rechazado}}</h3>

                    <p>TOTAL DE LIBROS RECHAZADOS</p>
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
                    <h3>{{$tbLibrose->tl_perdido}}</h3>

                    <p>TOTAL DE LIBROS PERDIDOS</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>

                </div>
              </div>



              <div class="col-lg-5 col-6" width= "400px">
                <!-- small box -->
                <div class=""">
                    <div style="width: 400px">
                        <canvas id="grafica"></canvas>
                    </div>
                </div>
              </div>

              <div class="col-lg-3 col-6" width= "400px">
                <!-- small box -->
                <div class=""">
                    <div style="width: 400px">
                        <canvas id="torta"></canvas>
                    </div>
                </div>
              </div>




            @endforeach

            <!-- ./col -->
          </div>








          <div class="card-header">
            <h3 class="card-title">HISTORIAL</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead style="background: linear-gradient(90deg, rgba(254,0,0,0.18531162464985995) 100%, rgba(8,0,36,0.5634628851540616) 100%);
              ">
              <tr>

                  <th>imagen</th>
                  <th>estado</th>
                  <th>nombre</th>
                  <th>Codigo</th>

                  <th>presentacion</th>

                  <th>fecha_sol</th>
                  <th>hora_sol</th>
                  <th>Fecha para devolucion</th>
                  <th>fecha_Dev</th>
                  <th>hora_dev</th>

                  <th>isbn</th>
                  <th>codigo</th>
                  <th>Titulo</th>

                  <th>obs</th>





              </tr>
          </thead>
          <tbody>
              @foreach ($tbLibros as $tbLibro)
                  <tr>


                      <td>
                          <img src="libro/{{ $tbLibro->imagen }}" width="100" height="100" />

                         </td>

                         <td>{{ $tbLibro->estado }}</td>

                         <td>{{ $tbLibro->nombre }}</td>
                         <td>{{ $tbLibro->email }}</td>

                         <td>{{ $tbLibro->presentacion }}</td>
                         <td>{{ $tbLibro->fecha_sol }}</td>
                         <td>{{ $tbLibro->hora_sol }}</td>
                         <td>{{ $tbLibro->fech_lim }}</td>
                         <td>{{ $tbLibro->fecha_Dev }}</td>
                         <td>{{ $tbLibro->hora_dev }}</td>

                         <td>{{ $tbLibro->isbm }}</td>
                         <td>{{ $tbLibro->codigo }}</td>

                         <td>{{ $tbLibro->linro_nom }}</td>

                         <td>{{ $tbLibro->obs }}</td>






                                                  </tr>
                                              @endforeach

      </tbody>

      </table>
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


const labels = ['PENDIENTES',
                        'ENTREGADOS', 'TDEVUELTOS',
                         'RECHAZADOS', 'PERDIDOS']

const graph = document.querySelector("#grafica");


const data = {
	labels: labels,
	datasets: [{
		label:"INVENTARIO",
		data: [{{$tbLibrose->tl_pendidente}}, {{$tbLibrose->tl_entregado}}, {{$tbLibrose->tl_devuelto}},
     {{$tbLibrose->tl_rechazado}}, {{$tbLibrose->tl_perdido}}],
		backgroundColor: 'rgba(9, 129, 176, 0.2)'
	}]
};

const config = {
	type: 'bar',
	data: data,
	};
new Chart(graph, config);







const labels2 = ['PENDIENTES',
                        'ENTREGADOS', 'TDEVUELTOS',
                         'RECHAZADOS', 'PERDIDOS']

const colors2 = ['rgb(69,177,223)', 'rgb(99,201,122)', 'rgb(203,82,82)', 'rgb(229,224,88)'];

const torta = document.querySelector("#torta");

const data2 = {
    labels: labels2,
    datasets: [{
        data:  [{{$tbLibrose->tl_pendidente}}, {{$tbLibrose->tl_entregado}}, {{$tbLibrose->tl_devuelto}},
     {{$tbLibrose->tl_rechazado}}, {{$tbLibrose->tl_perdido}}],
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
