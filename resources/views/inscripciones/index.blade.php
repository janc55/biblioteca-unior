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
                                {{ __('Inscripciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('inscripciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                      
                                        
										<th>Cod</th>
										<th>Estudiante</th>
										<th>CI</th>
										<th>Carrera</th>
										<th>Turno</th>
										<th>Gestion</th>
										<th>Plan de Pago</th>
                                        <th>Beca</th>
										<th>N° Boleta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>
                                     
                                            
											<td>{{ $lista->cod_est }}</td>
											<td>{{ $lista->ape_p_est}}{{ $lista->ape_m_est}}{{ $lista->nombre_est}}</td>
											<td>{{ $lista->ci_est }}</td>
											<td>{{ $lista->nombre_carre }}</td>
											<td>{{ $lista->desc_turno }}</td>
											<td>{{ $lista->periodo_gestion }} / {{ $lista->anio_gestion }}</td>
											<td>{{ $lista->nombre_plan }}</td>
											<td>{{ $lista->nombre_beca }}</td>
											<td>{{ $lista->nro_depos}}</td>

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
