<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tb Form Mat Bio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tb-form-mat-bios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                        <form action="{{ route('cambiar_estado_varios') }}" method="POST"> 
                        <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th></th>
										<th>Nro Solicitud</th>
										<th>cod usuario</th>
										<th>Titlo Lib</th>
										<th>Autor</th>
										<th>Edicion</th>
										<th>Anio</th>
										<th>Editorial</th>
										<th>Nom Lug Com</th>
										<th>Costo</th>
										<th>Materia</th>
										<th>Estado</th>

                                   
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbFormMatBios as $tbFormMatBio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>
                                                <form action="{{ route('tb-form-mat-bios.destroy',$tbFormMatBio->id_mab) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tb-form-mat-bios.show',$tbFormMatBio->id_mab) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tb-form-mat-bios.edit',$tbFormMatBio->id_mab) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                                
                                                <form action="{{ route('pdf_form2') }}" method="POST">
                                                              @csrf
                                                         <input type="hidden" id="id" name="id" value="{{$tbFormMatBio->id_formsol}}">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fas fa-print"></i> <!-- Icono de impresión -->
                                                imprimir
                                                </button>
                                                        </form>
                                            </td>
											<td>{{ $tbFormMatBio->id_mab }}</td>
											<td>{{ $tbFormMatBio->id_us }}</td>
											<td>{{ $tbFormMatBio->titlo_lib }}</td>
											<td>{{ $tbFormMatBio->autor }}</td>
											<td>{{ $tbFormMatBio->edicion }}</td>
											<td>{{ $tbFormMatBio->anio }}</td>
											<td>{{ $tbFormMatBio->editorial }}</td>
											<td>{{ $tbFormMatBio->nom_lug_com }}</td>
											<td>{{ $tbFormMatBio->costo }}</td>
											<td>{{ $tbFormMatBio->materia }}</td>
											<td>{{ $tbFormMatBio->estado }}</td>

                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-success">Cambiar Estado</button>
</form>
                        </div>
                    </div>
                </div>
                {!! $tbFormMatBios->links() !!}
            </div>
        </div>
    </div>
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
