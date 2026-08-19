@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuario Administrativo') }}
                            </span>

                             <div class="float-right">
                             <div class="row">
  <div class="col-md-6">
    <a href="{{ route('usu_admin.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
      <i class="fas fa-plus"></i> {{ __('Create New') }}
    </a>
  </div>
  <div class="col-md-6">
    <form action="{{ route('usuarios.import') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="excel_file">
      <button type="submit"><i class="fas fa-upload"></i> Importar</button>
    </form>
  </div>
</div>


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
                        <table id="example1" class="table table-bordered table-striped">
        <thead>               <tr>
                                        <th>No</th>
                                     
										<th>Nombre</th>
										<th>Ci(Usuario)</th>
										<th>Contraseña</th>
										<th>Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarioAdministrativos as $usuarioAdministrativo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $usuarioAdministrativo->nombre }}</td>
											<td>{{ $usuarioAdministrativo->ci }}</td>
											<td>{{ $usuarioAdministrativo->contrasena }}</td>
											<td>{{ $usuarioAdministrativo->tipo }}</td>

                                            <td>
                                                <form action="{{ route('usu_admin.destroy',$usuarioAdministrativo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usu_admin.show',$usuarioAdministrativo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usu_admin.edit',$usuarioAdministrativo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarioAdministrativos->links() !!}
            </div>
        </div>
    </div>
    </section>
<!-- /.content -->
</div>@stop

@section('js')


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
@stop
