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
                                        
									
										<th>Docente</th>									
                                        <th>Materia</th>                                        
                                        <th>Paralelo</th>
                                        <th>Turno</th>
                                        <th>Gestion</th>
                                        <th>Asignar</th>
							
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>
                                          
                                            
										
											<td>{{ $lista->ape_p_doc}} {{ $lista->ape_m_doc}} {{ $lista->nombre_doc}}</td>
                                            <td>{{ $lista->nombre_mat}}</td>
                                            <td>{{ $lista->paralelo_asig_mat}}</td>
                                            <td>{{ $lista->desc_turno}}</td>
                                            <td>{{ $lista->periodo_gestion}} / {{ $lista->anio_gestion}}</td>

                                            <td>
                                              
                                            <div class="card-body">
                                            <form method="POST" action="{{ route('asigP') }}"  role="form" enctype="multipart/form-data">
                                            @csrf
                                           

                                            <input type="hidden" name="id_est"   id="id_est"   value="{{ $lista->id_est}}">
                                            <input type="hidden" name="id_asig_mat" id="id_asig_mat" value="{{ $lista->id_asig_mat}}">
                                            <input type="hidden" name="id_turno" id="id_turno" value="{{ $lista->id_turno}}">
                                            
                                                    <button type="submit" class="btn btn-warning"><i class="fa fa-fw fa-pencil"></i> Asignar</button>
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
