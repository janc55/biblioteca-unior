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
                                {{ __('Tb Estudiante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estudiantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Id Est</th>
										<th>Cod Est</th>
										<th>Nombre Est</th>
										<th>Ape P Est</th>
										<th>Ape M Est</th>
										<th>Ci Est</th>
										<th>Exp Est</th>
										<th>Fec Nac Est</th>
										<th>Dir Est</th>
										<th>Tel Dom Est</th>
										<th>Cel Est</th>
									

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbEstudiantes as $tbEstudiante)
                                        <tr>
                                      
                                            
											
											<td>{{ $tbEstudiante->cod_est }}</td>
											<td>{{ $tbEstudiante->nombre_est }}</td>
											<td>{{ $tbEstudiante->ape_p_est }}</td>
											<td>{{ $tbEstudiante->ape_m_est }}</td>
											<td>{{ $tbEstudiante->ci_est }}</td>
											<td>{{ $tbEstudiante->exp_est }}</td>
											<td>{{ $tbEstudiante->fec_nac_est }}</td>
											<td>{{ $tbEstudiante->dir_est }}</td>
											<td>{{ $tbEstudiante->tel_dom_est }}</td>
											<td>{{ $tbEstudiante->cel_est }}</td>
											

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
