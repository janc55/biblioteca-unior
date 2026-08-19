<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>




<div class="card">
    <div class="card-header">
      <h3 class="card-title"></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
 <th>Nro</th>
            <th>Imprimir</th>
            <th>Aceptar</th>
            <th>Accion</th>
              <th>Observacion</th>
            <th>imagen</th>
            <th>Codigo</th>
            <th>titulo</th>
            <th>Nombre Solicitante</th>
            <th>fecha_sol</th>
            <th>hora_sol</th>
            <th>fecha_Dev</th>
            <th>hora_dev</th>
            <th>estado</th>
            <th>isbm</th>
            <th>codigo</th>
               
              <th>presentacion</th>
            <th>trabajo_grado</th>
            <th>Fecha  para devolver</th>
            <th>obs</th>



        </tr>
    </thead>
    <tbody>
        @foreach ($tbLibros as $tbLibro)

        @if($tbLibro->estado =="PENDIENTE" || $tbLibro->estado =="ENTREGAR")






        <tr>

            <th></th>

                    <td>
       
                    <form method="POST" action="{{ route('hoja_solicitud_pdf') }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $tbLibro->id_solib }}">
                                    <input type="submit" class="btn btn-danger btn-sm" value="Imprimir">

                </form>
                </td>

                <td>

                    <form method="POST" action="{{ route('regis_accion_lib') }}"  role="form" enctype="multipart/form-data">
                        @csrf


                        @if($tbLibro->estado =="PENDIENTE")

                        <input type="submit" class="btn btn-danger btn-sm" value="Aceptar">


                        @endif

                          @if($tbLibro->estado =="ENTREGAR")

                        <input type="submit" class="btn btn-danger btn-sm" value="Aceptar">
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-accion">temp</a>


                        @endif

                                </td>

        <td>

            <select class="form-select" aria-label="Default select example" name="estado">
                @if($tbLibro->estado =="PENDIENTE")

                <option value="ENTREGAR" >ENTREGAR</option>
                <option value="RECHAZAR" >RECHAZAR</option>
                @else








                                @if($tbLibro->estado =="ENTREGAR")
                                    <option value="DEVOLVER" >DEVOLVER</option>
                                    <option value="PEDIDO" >PERDIDO</option>

                                @endif

                        @endif
              </select>
        </td>

        <td>

         <input type="text" name="obs">

         <input type="hidden" name="id_lb" value="{{ $tbLibro->id_solib }}">
           </td>

        </form>



                        <td>
                            <img src="libro/{{ $tbLibro->imagen }}" width="100" height="100" />

                           </td>


                           <td>{{ $tbLibro->email }}</td>

                           <td>{{ $tbLibro->linro_nom }}</td>
                           <td>{{ $tbLibro->nombre }}</td>
                           <td>{{ $tbLibro->fecha_sol }}</td>
                           <td>{{ $tbLibro->hora_sol }}</td>
                           <td>{{ $tbLibro->fecha_Dev }}</td>
                           <td>{{ $tbLibro->hora_dev }}</td>
                           <td>{{ $tbLibro->estado }}</td>

                                <td>{{ $tbLibro->isbm }}</td>
                           <td>{{ $tbLibro->codigo }}</td>
                           
                          <td>{{ $tbLibro->presentacion }}</td>
                           <td>{{ $tbLibro->trabajo_grado }}</td>

                           <td>{{ $tbLibro->fech_lim }}</td>

                           <td>{{ $tbLibro->obs }}</td>









                                                    </tr>








        @endif

      @endforeach

</tbody>

</table>
</div>
<!-- /.card-body -->
</div>


<!-- Botón para abrir el modal -->

<!-- Modal -->
<div class="modal fade" id="modal-accion" tabindex="-1" role="dialog" aria-labelledby="modal-accion-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-accion-label">Registro de Acción</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario de registro -->
        <form>
          <div class="form-group">
            <label for="accion">Acción</label>
            <select class="form-control" id="accion" name="accion">
              <option value="entregar">Entregar</option>
              <option value="devolver">Devolver</option>
            </select>
          </div>
          <div class="form-group">
    <label for="observaciones">Observaciones</label>
    <textarea class="form-control" id="observaciones" name="observaciones" rows="4"></textarea>
  </div>
  
          <div class="form-group">
            <label for="fecha-entrega">Fecha de Entrega</label>
            <input type="date" class="form-control" id="fecha-entrega" name="fecha-entrega">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
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
