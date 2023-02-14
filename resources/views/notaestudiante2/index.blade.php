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
                                        <th>Nombre Estudiante</th>
                                        <!-- <th>CI</th>                                        -->
                                        <th>Materia</th>
                                        <th>Nota 1P</th>
                                        <th>Nota 2P</th>
                                        <th>Nota EF</th>
                                        <th>Nota 2T</th>                                      
                                        <!-- <th>Gestion</th> -->
                                        <th>Observación</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vista as $vista)
                                        <tr>
                                            <td></td>
                                            
											<td>{{ $vista->ape_p_est }} {{ $vista->ape_m_est }} {{ $vista->nombre_est }}</td>
											<!-- <td>{{ $vista->ci_est}}</td> -->
                                            <td>{{ $vista->codigo_mat }} {{ $vista->nombre_mat }} {{ $vista->paralelo_asig_mat }}</td>                                            
                                            <td>{{ $vista->eval_p1}}</td>
                                            <td>{{ $vista->eval_p2}}</td>
                                            <td>{{ $vista->eval_fin}}</td>
                                            <td>{{ $vista->eval_2t}}</td>                                           									
                                            <!-- <td>{{ $vista->periodo_asig_mat}} / {{ $vista->gestion_asig_mat}}</td> -->
                                            <td>{{ $vista->apro_rep_con_est}}</td>

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
