<html>
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        
										<th>Id Carre Mater</th>
                                        <th>Materia</th>									
										<th>Categoria</th>
										
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>                                      
                                            
											<td>{{ $lista->id_carre_mater }}</td>
                                            <td>{{ $lista->nombre_mat}}</td>
                                            <td>{{ $lista->nombre_cat_mat }}</td>
                                            										
											
                                            <!-- <td>                                           
                                                <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-user"></i>Asignar</button>

                                            </td> -->
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
</html>
<?php

// $html = '<img src="data:image/svg+xml;base64,' . base64_encode($svg) . '" ...>';
// Prueba de reporte PDF
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;
Route::get('/', function () {
// instantiate and use the dompdf class
$dompdf = new Dompdf();
// $dompdf->loadHtml('hello world');
$dompdf->loadHtml(view('print_pdf'));


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('demo.pdf',['Attachment'=>false]);
// return view('print_pdf');

});

?>

 