@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tb Docente') }}
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<!-- <th>Id Doc</th> -->
										<th>Nombre Docente</th>
										<!-- <th>Ape P Doc</th>
										<th>Ape M Doc</th> -->
										<th>Codigo</th>
										<th>Carnet</th>
										<!-- <th>Expedido</th>
										<th>Grado</th>
										<th>Fec Nac Doc</th>
										<th>Tel Dom Doc</th>
										<th>Cel Doc</th>
										<th>Dom Doc</th>
										<th>Lug Doc</th>
										<th>Dir Trab Doc</th>
										<th>Tel Trab Doc</th>
										<th>Email Doc</th>
										<th>Estado Civ Doc</th>
										<th>Nacional Doc</th>
										<th>Obser Doc</th>
										<th>Foto Doc</th> -->

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tabla as $tabla)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<!-- <td>{{ $tabla->id_doc }}</td> -->
											<td>{{ $tabla->ape_p_doc }} {{ $tabla->ape_m_doc }} {{ $tabla->nombre_doc }} </td>
											<!-- <td>{{ $tabla->ape_p_doc }}</td>
											<td>{{ $tabla->ape_m_doc }}</td> -->
											<td>{{ $tabla->cod_doc }}</td>
											<td>{{ $tabla->ci }}</td>
											<!-- <td>{{ $tabla->expedido }}</td>
											<td>{{ $tabla->grado }}</td>
											<td>{{ $tabla->fec_nac_doc }}</td>
											<td>{{ $tabla->tel_dom_doc }}</td>
											<td>{{ $tabla->cel_doc }}</td>
											<td>{{ $tabla->dom_doc }}</td>
											<td>{{ $tabla->lug_doc }}</td>
											<td>{{ $tabla->dir_trab_doc }}</td>
											<td>{{ $tabla->tel_trab_doc }}</td>
											<td>{{ $tabla->email_doc }}</td>
											<td>{{ $tabla->estado_civ_doc }}</td>
											<td>{{ $tabla->nacional_doc }}</td>
											<td>{{ $tabla->obser_doc }}</td>
											<td>{{ $tabla->foto_doc }}</td> -->

                                            <td>
                                                
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
