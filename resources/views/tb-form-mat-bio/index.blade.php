<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                              FORMULARIO SOLICITUD 2
                            </span>

                             <div class="float-right">
                               
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
    @csrf
    <button type="submit" class="btn btn-primary">Cambiar Estado</button>
   
    <table id="example1" class="table table-bordered table-striped">
    <thead class="thead">
            <tr>
                <th>No</th>
                <th>IMPRIMIR</th>
                <th><input type="checkbox" id="select_all" onclick="selectAllRows()"></th>
           
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
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($tbFormMatBios as $tbFormMatBio)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>

                                                    <a href="{{ route('generar-pdf2', ['id' => $tbFormMatBio->id_mab]) }}">
    <i class="fas fa-print"></i> Imprimir
</a>



                    </td>
                    <td><input type="checkbox" name="estado_checkbox[]" value="{{ $tbFormMatBio->id_mab }}"></td>
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
                 
                    <td>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tb-form-mat-bios.show',$tbFormMatBio->id_mab) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tb-form-mat-bios.edit',$tbFormMatBio->id_mab) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                           
                                  


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>

<script>
    function selectAllRows() {
        var checkboxes = document.getElementsByName('estado_checkbox[]');
        var selectAllCheckbox = document.getElementById('select_all');

        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = selectAllCheckbox.checked;
        }
    }
</script>





                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
  <!-- /.content -->
  </div>





<!-- JavaScript function to select all checkboxes -->
<script>
    function selectAllRows() {
        let selectAllCheckbox = document.getElementById('select_all');
        let checkboxes = document.getElementsByName('selectedRows[]');
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAllCheckbox.checked;
        });
    }
</script>


<script>
    // Obtén el enlace y el formulario
    const printLink = document.getElementById('printLink');
    const printForm = document.getElementById('printForm');

  
    // Agrega un evento click al enlace
    printLink.addEventListener('click', function (event) {

        // Previene el comportamiento predeterminado del enlace
        event.preventDefault();

        // Envía el formulario programáticamente
        printForm.submit();
     
    });


</script>


<!-- /.row -->



    <!-- /.card -->
  </section>

  <!-- /.Left col -->
  <!-- right col (We are only adding the ID to make the widgets sortable)-->
  <?php include "bofer.php";?>





