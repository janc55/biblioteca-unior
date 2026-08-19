<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                               FORMULARIO SOLICITUD 1
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
                  
<form action="{{ route('update_status') }}" method="POST">
    @csrf
    <!-- Method spoofing field -->
    @method('PUT')

    <!-- ... (previous code) ... -->

    <table id="example1" class="table table-bordered table-striped">
        <thead class="thead">
            <tr>
                <!-- Add a new column header for the checkbox -->
                <th>
                    <input type="checkbox" id="select_all" onclick="selectAllRows()">
                </th>
                <th>Nro Solicitud</th>
                <th>Codigo Usuario</th>
                <th>Activi</th>
                <th>FECHA SOLICITUD</th>
                <th>FECHA ATENDIDO</th>
                <th>Estado</th>
                <th>Imprimir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tbFormSols as $tbFormSol)
            <tr>
                <!-- Add a checkbox input to each row -->
                <td>
                    <input type="checkbox" name="selectedRows[]" value="{{ $tbFormSol->id_formsol }}">
                    <!-- Add a hidden input field to include the ID of each record -->
                    <input type="hidden" name="recordIds[]" value="{{ $tbFormSol->id_formsol }}">
                </td>
                <td>{{ $tbFormSol->id_formsol }}</td>
                <td>{{ $tbFormSol->id_us }}</td>
                <td>{{ $tbFormSol->activi }}</td>
                <td>{{ $tbFormSol->fec_sa }}</td>
                <td>{{ $tbFormSol->fec_de }}</td>
                <td>{{ $tbFormSol->estado }}</td>
                <td>

               
                <a href="{{ route('generar-pdf', ['id' => $tbFormSol->id_formsol]) }}">
    <i class="fas fa-print"></i> Imprimir
</a>





                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Add the button to submit the form -->
    <button type="submit" class="btn btn-primary btn-sm">Mark as Atendido</button>
</form>

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
                        </div>
                    </div>
                </div>
                {!! $tbFormSols->links() !!}
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





