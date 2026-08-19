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




              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>{{$tbLibros->tl_rev}}</h3>

                    <p>TOTAL DE REVISTAS</p>
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
                    <h3>{{$tbLibros->tl_tinv}}</h3>

                    <p>TOTAL DE TRABAJOS DE INVESTIGACION</p>
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
                    <h3>{{$tbLibros->tl_bol}}</h3>

                    <p>TOTAL DE BOLETINES</p>
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
                    <h3>{{$tbLibros->tl_ga}}</h3>

                    <p>TOTAL DE GACETAS</p>
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
                    <h3>{{$tbLibros->tl_tp}}</h3>

                    <p>TOTAL DE TRABAJOS DE POSTGRADO</p>
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
                    <h3>{{$tbLibros->tl_pendidente}}</h3>

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
                    <h3>{{$tbLibros->tl_entregado}}</h3>

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
                    <h3>{{$tbLibros->tl_devuelto}}</h3>

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
                    <h3>{{$tbLibros->tl_rechazado}}</h3>

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
                    <h3>{{$tbLibros->tl_perdido}}</h3>

                    <p>TOTAL DE LIBROS PERDIDOS</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>

                </div>
              </div>




            @endforeach

            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Graficos
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <div style="width: 500px">
                            <canvas id="grafica"></canvas>
                        </div>
                      </li>

                    </ul>
                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart"
                         style="position: relative; height: 300px;">
                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                     </div>

                  </div>
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->



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
                         'TOTAL DE ENLACES A BIBLIOTECAS',
                        'TOTAL DE REVISTAS','TOTAL DE TRABAJOS DE INVESTIGACION',
                        'TOTAL DE BOLETINES','TOTAL DE GACENTAS','TOTAL DE TRABJOS DE POSTGRADO']

        const colors = ['rgb(69,177,223)', 'rgb(99,201,122)', 'rgb(203,82,82)', 'rgb(229,224,88)',
        'rgb(69,1,223)', 'rgb(99,1,2)', 'rgb(203,1,2)', 'rgb(229,1,4)'];

        const graph = document.querySelector("#grafica");

        const data = {
            labels: labels,
            datasets: [{
              data: [{{$tbLibros->tl_libros}}, {{$tbLibros->tl_tess}}, {{$tbLibros->tl_digital}},
                 {{$tbLibros->tl_virtual}}, {{$tbLibros->tl_rev}}, {{$tbLibros->tl_tinv}}
                 , {{$tbLibros->tl_bol}}, {{$tbLibros->tl_ga}}
                 , {{$tbLibros->tl_tp}}],

                backgroundColor: colors
            }]
        };

        const config = {
            type: 'pie',
            data: data,
        };







        new Chart(graph, config);





        const labels1 = ['TOTAL DE LIBROS',
                        'TOTAL DE PROYECTOS DE GRADO', 'TOTAL LIBROS DIGITALES',
                         'TOTAL DE ENLACES A BIBLIOTECAS',
                        'TOTAL DE REVISTAS','TOTAL DE TRABAJOS DE INVESTIGACION',
                        'TOTAL DE BOLETINES','TOTAL DE GACENTAS','TOTAL DE TRABJOS DE POSTGRADO',]
        const colors1 = ['rgb(69,177,223)', 'rgb(99,201,122)', 'rgb(203,82,82)', 'rgb(229,224,88)',
        'rgb(69,177,223)', 'rgb(99,201,122)', 'rgb(203,82,82)', 'rgb(229,224,88)'];

        const graph1 = document.querySelector("#grafica1");

        const data1 = {
            labels: labels1,
            datasets: [{
                data1: [{{$tbLibros->tl_libros}}, {{$tbLibros->tl_tess}}, {{$tbLibros->tl_digital}},
                 {{$tbLibros->tl_virtual}}, {{$tbLibros->tl_rev}}, {{$tbLibros->tl_tinv}}
                 , {{$tbLibros->tl_bol}}, {{$tbLibros->tl_ga}}
                 , {{$tbLibros->tl_tp}}],

                backgroundColor: colors
            }]
        };

        const config1 = {
            type: 'pie',
            data: data1,
        };




        new Chart(graph1, config1);




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
