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
                                {{ __('Tb Asignacion Mat') }}
                            </span>

                            
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
                                        <!-- <th>No</th> -->
                                        
										<th>Codigo</th>
										<th>Nombre</th>
										<th>CI</th>
                                        <th>Carrera</th>
                                        <th>Turno</th>
                                        <th>Plan</th>
                                        <th>Asignar Boleta</th>

							
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>
                                          
                                            
											<td>{{ $lista->cod_est}}</td>
											<td>{{ $lista->ape_p_est}} {{ $lista->ape_m_est}} {{ $lista->nombre_est}}</td>
											<td>{{ $lista->ci_est}}</td>
                                            <td>{{ $lista->nombre_carre}}</td>
                                            <td>{{ $lista->desc_turno}}</td>
                                            <td>{{ $lista->nombre_plan}}</td>

                                            <td>
                                              
                                            <div class="card-body">
                                            <form method="POST" action="{{ route('boleta_asignar') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                                                  <!-- $dato="ape_p_est ape_m_est nombre_est" -->

                                            <input type="hidden" name="id_est"   id="id_est"   value="{{ $lista->id_est}}">
                                            <input type="hidden" name="dato"   id="dato"   value="{{ $lista->ape_p_est}} {{ $lista->ape_m_est}} {{ $lista->nombre_est}}">
                                           

                                                    <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Crear Boleta</button>
                                                </form>  
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
