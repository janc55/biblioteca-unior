@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Boletas de Estudiantes</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                        <form action="../../form-result.php" method="post" target="_blank">
                            <div>
                            <input class="col-sm-7" class="form-control " type="search" name="busqueda" placeholder=" 🔎 Busca" size="20" maxlength="70"> 
                            <input class="col-sm-3 btn btn-success btn-sm float-left bi bi-0-square-fill" type="submit" value="Buscar" >
                            </div>    
                            </form>

                             <div class="float-right">
                                <a href="{{ route('boletas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('nuevo') }}
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
                            <table id="example1" class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Boleta</th>
										<th>Id Est</th>
										<th>Fec Reg Boleta</th>
										<th>Fec Depos Boleta</th>
										<th>Id Cuenta</th>
										<th>Id Gestion</th>
										<th>Nro Depos</th>
										<th>Monto Boleta</th>
										<th>Bs Boleta</th>
										<th>Obs Boleta</th>
										<th>Fec Trans Boleta</th>
										<th>Terminal Boleta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbBoleta as $tbBoleta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tbBoleta->id_boleta }}</td>
											<td>{{ $tbBoleta->id_est }}</td>
											<td>{{ $tbBoleta->fec_reg_boleta }}</td>
											<td>{{ $tbBoleta->fec_depos_boleta }}</td>
											<td>{{ $tbBoleta->id_cuenta }}</td>
											<td>{{ $tbBoleta->id_gestion }}</td>
											<td>{{ $tbBoleta->nro_depos }}</td>
											<td>{{ $tbBoleta->monto_boleta }}</td>
											<td>{{ $tbBoleta->bs_boleta }}</td>
											<td>{{ $tbBoleta->obs_boleta }}</td>
											<td>{{ $tbBoleta->fec_trans_boleta }}</td>
											<td>{{ $tbBoleta->terminal_boleta }}</td>

                                            <td>
                                                <form action="{{ route('boletas.destroy',$tbBoleta->id_boleta) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('boletas.show',$tbBoleta->id_boleta) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('boletas.edit',$tbBoleta->id_boleta) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
            </div>
        </div>
    </div>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@stop

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
