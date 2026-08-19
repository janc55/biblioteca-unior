
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">LISTA DE ESTUDIANTES</h1>
@stop

@section('content')

<head>
    <title>Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/css/jquery-editable.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jquery-editable/js/jquery-editable-poshytip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<style type="text/css">
    .container h2 , .panel-info{
        margin-top:80px;
        line-height:50px;
    }
</style>


    
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
        @foreach($lista as $lista2) 
        <h5 class="text">DOCENTE: {{ $lista2->grado}} {{ $lista2->docente}} </h5>
        <h5 class="text">MATERIA: {{ $lista2->codigo_mat}} -  {{ $lista2->nombre_mat}}  </h5>
        <H5 class="text">PARALELO: {{ $lista2->paralelo_asig_mat}}</H5>
        <h5 class="text">TURNO: {{ $lista2->desc_turno}}   </h5>
        <h5 class="text">GESTION: {{ $lista2->periodo_gestion}} / {{ $lista2->anio_gestion}}  </h5>
        
        @break
        @endforeach

        @foreach($lista as $lista3) 
        <form method="POST" action="{{ route('hoja_nomina_est') }}"  role="form" enctype="multipart/form-data">
              @csrf
              <div>                                    
              <input type="hidden" id="id_doc" name="id_doc" value="{{ $lista3->id_doc }}">                            
              <input class="btn btn-danger" type="submit" value="Reporte PDF " >                                   
              </div>                                                                     
        </form>      
        @break
        @endforeach

            <div class="panel-heading">NOMINA</div>
            <div class="panel-body"> 
                <table id="example1" class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <!-- <th>Nota 1P</th>
                            <th>Nota 2P</th>
                            <th>Nota EF</th>
                            <th>Nota 2T</th> -->

                        </tr>
                    </thead>
                    <div hidden>{{ $i=1 }}</div>
                    <tbody>
                  
                        @foreach($lista as $lista)
                            <tr>

                                <td>
                                {{ $i++}}
                                </td>
                                <td>
                                    {{ $lista->cod_est}}
                                </td>
                                <td>
                               {{ $lista->estudiante }}
                                </td>
                                <!-- <td>
                                    <a href="" class="update" data-name="eval_p1" data-type="text" data-pk="{{ $lista->id_asig_mat_est}}" data-title="Enter Nota 1P">{{ $lista->eval_p1 }}</a>
                                </td>
                                <td>
                                    <a href="" class="update" data-name="eval_p2" data-type="text" data-pk="{{ $lista->id_asig_mat_est}}" data-title="Enter Nota 2P">{{ $lista->eval_p2 }}</a>
                                </td>
                                <td>
                                    <a href="" class="update" data-name="eval_fin" data-type="text" data-pk="{{ $lista->id_asig_mat_est}}" data-title="Enter Nota EF">{{ $lista->eval_fin }}</a>
                                </td>
                                <td>
                                    <a href="" class="update" data-name="eval_2t" data-type="text" data-pk="{{ $lista->id_asig_mat_est}}" data-title="Enter Nota 2T">{{ $lista->eval_2t }}</a>
                                </td> -->

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>

    <!-- <script type="text/javascript">
        $.fn.editable.defaults.mode = 'inline';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });

        $('.update').editable({
            url: "{{ route('lista_nota.update') }}",
            type: 'text',
            pk: 1,
            name: 'name',
            title: 'Enter name'
        });

        $(".deletelista").click(function(){
            $(this).parents('tr').hide();
            var id = $(this).data("id");
            var token = '{{ csrf_token() }}';
            $.ajax(
            {
                method:'POST',
                url: "lista/delete/"+id, 
                data: {_token: token},
                success: function(data)
                {
                    toastr.success('Successfully!','Delete');
                }
            });
        });
    </script> -->


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

