<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">

            @foreach ($tbLibrose as $tbLibrose)




            @endforeach

            <!-- ./col -->
          </div>




          <div style="width: 900px">
            <canvas id="grafica"></canvas>
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
                   <th>presentacion</th>

                  <th>fecha_sol</th>
                  <th>hora_sol</th>
                  <th>fecha_Dev</th>
                  <th>hora_dev</th>

                  <th>isbm</th>
                  <th>codigo</th>
                  <th>Titulo</th>

                  <th>Cantidad</th>





              </tr>
          </thead>
          <tbody>
              @foreach ($tbLibros as $tbLibro)
                  <tr>

                      <td>
                          <img src="libro/{{ $tbLibro->imagen }}" width="100" height="100" />

                         </td>

                         <td>{{ $tbLibro->presentacion }}</td>
                         <td>{{ $tbLibro->fecha_sol }}</td>
                         <td>{{ $tbLibro->hora_sol }}</td>
                         <td>{{ $tbLibro->fecha_Dev }}</td>
                         <td>{{ $tbLibro->hora_dev }}</td>

                         <td>{{ $tbLibro->isbm }}</td>
                         <td>{{ $tbLibro->codigo }}</td>

                         <td>{{ $tbLibro->nombre }}</td>

                         <td>{{ $tbLibro->cant }}</td>






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


const labels = [
  '{{ isset($tbLibros[0]) ? Str::limit($tbLibros[0]->nombre, 20) : "sin dato" }}',
  '{{ isset($tbLibros[1]) ? Str::limit($tbLibros[1]->nombre, 20) : "sin dato" }}',
  '{{ isset($tbLibros[2]) ? Str::limit($tbLibros[2]->nombre, 20) : "sin dato" }}',
  '{{ isset($tbLibros[3]) ? Str::limit($tbLibros[3]->nombre, 20) : "sin dato" }}',
  '{{ isset($tbLibros[4]) ? Str::limit($tbLibros[4]->nombre, 20) : "sin dato" }}',
  '{{ isset($tbLibros[5]) ? Str::limit($tbLibros[5]->nombre, 20) : "sin dato" }}',
  '{{ isset($tbLibros[6]) ? Str::limit($tbLibros[6]->nombre, 20) : "sin dato" }}',
  '{{ isset($tbLibros[7]) ? Str::limit($tbLibros[7]->nombre, 20) : "sin dato" }}',
  '{{ isset($tbLibros[8]) ? Str::limit($tbLibros[8]->nombre, 20) : "sin dato" }}',
  '{{ isset($tbLibros[9]) ? Str::limit($tbLibros[9]->nombre, 20) : "sin dato" }}'
];

const graph = document.querySelector("#grafica");
const data = {
  labels: labels,
  datasets: [{
    label: "INVENTARIO",
    data: [
      {{ isset($tbLibros[0]) ? $tbLibros[0]->cant : 0 }},
      {{ isset($tbLibros[1]) ? $tbLibros[1]->cant : 0 }},
      {{ isset($tbLibros[2]) ? $tbLibros[2]->cant : 0 }},
      {{ isset($tbLibros[3]) ? $tbLibros[3]->cant : 0 }},
      {{ isset($tbLibros[4]) ? $tbLibros[4]->cant : 0 }},
      {{ isset($tbLibros[5]) ? $tbLibros[5]->cant : 0 }},
      {{ isset($tbLibros[6]) ? $tbLibros[6]->cant : 0 }},
      {{ isset($tbLibros[7]) ? $tbLibros[7]->cant : 0 }},
      {{ isset($tbLibros[8]) ? $tbLibros[8]->cant : 0 }},
      {{ isset($tbLibros[9]) ? $tbLibros[9]->cant : 0 }}
    ],
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
