<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.7/css/dataTables.bootstrap5.min.css">
</head>
<body>


  <div class="container mt-4">
        <h2>Formulario </h2>
        <div class="table-responsive"> <!-- Add the table-responsive class here -->
            <table id="formularioTable" class="table table-striped table-bordered">
             <thead>
                <tr>
                    <th>ID</th>
                  
                    <th>Evaluador</th>
                    <th>Evaluado</th>
                    <th>Fecha</th>
                    <th>Observaciones</th>
                    <th>Cargo</th>
                    <th>Area</th>
                    <th>Criterio 1</th>
                    <th>Criterio 2</th>
                    <th>Criterio 3</th>
                    <th>Criterio 4</th>
                    <th>Criterio 5</th>
                    <th>Criterio 6</th>
                    <th>Criterio 7</th>
                    <th>Criterio 8</th>
                    <th>Criterio 9</th>
                    <th>Criterio 10</th>
                    <th>Criterio 11</th>
                    <th>Criterio 12</th>
                    <th>Criterio 13</th>
                    <th>Criterio 14</th>
               
                    <th>Continuar Contratacion</th>
                    <th>Comentarios Evaluador</th>
                    <th>Objetivos Definidos</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'get-data.php'; ?>
            </tbody>
            </table>
        </div>
		
		
		 <button id="exportButton" class="btn btn-primary">Export to Excel</button>
   
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.9/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.9/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>

  <script>
        $(document).ready(function() {
            var table = $('#formularioTable').DataTable();

            // Initialize DataTables Buttons extension
            new $.fn.dataTable.Buttons(table, {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: 'Formulario Data',
                        className: 'btn btn-primary',
                    },
                ],
            });

            $('#exportButton').on('click', function() {
                // Trigger the export button click
                table.buttons(0).trigger();
            });
        });
    </script>
</body>
</html>
