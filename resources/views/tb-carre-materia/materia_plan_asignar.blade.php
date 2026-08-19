@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Vista de Asignación de materias para el Plan de Estudios</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                           
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
										<th>Id Carre Mater</th>
                                        <th>Materia</th>									
										<th>Categoria</th>										
                                        <th></th>
                                    </tr> 
                                </thead>
                                <tbody>
                                    @foreach ($lista as $TbCarreMateria)
                                        <tr>      
											<td>{{ $TbCarreMateria->id_carre_mater }}</td>
                                            <td>{{ $TbCarreMateria->nombre_mat}}</td>
                                            <td>{{ $TbCarreMateria->nombre_cat_mat }}</td>                                  										
											<td>                                           
                                                <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-user"></i>Asignar</button>
                                                <a class="btn btn-sm btn-danger" href="{{ route('hoja_carre_mate_pdf',$TbCarreMateria->id_carre_mater) }}"><i class="fa fa-fw fa-edit"></i> Hoja PDF</a>
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

<?php

// $html = '<img src="data:image/svg+xml;base64,' . base64_encode($svg) . '" ...>';
// Prueba de reporte PDF


// use Dompdf\Dompdf;
// Route::get('/', function () {
// // instantiate and use the dompdf class
// $dompdf = new Dompdf();
// // $dompdf->loadHtml('hello world');
// $dompdf->loadHtml(view('print_pdf'));


// // (Optional) Setup the paper size and orientation
// $dompdf->setPaper('letter', 'landscape');

// // Render the HTML as PDF
// $dompdf->render();

// // Output the generated PDF to Browser
// $dompdf->stream('demo.pdf',['Attachment'=>false]);
// // return view('print_pdf');

// });

?>

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

