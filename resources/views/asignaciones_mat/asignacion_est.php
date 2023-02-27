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

                             <div class="float-right">
                                <a href="{{ route('asignacion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Codigo</th>
										<th>Estudiante</th>
										<th>Materia</th>
                                        <th>Asignar </th>

										<!-- <th>Id Materia</th>
										<th>Id Turno</th>
										<th>Id Gestion</th>
										<th>Paralelo Asig Mat</th>
										<th>Tipo Asig Mat</th>
										<th>Obs Asig Mat</th> -->

                                        <!-- <th></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>
                                          
                                            
											<td>{{ $lista->cod_est}}</td>
											<td>{{ $lista->ape_p_est}} {{ $lista->ape_m_est}} {{ $lista->nombre_est}}</td>
											<td>{{ $lista->codigo_mat }}{{ $lista->nombre_mat }}</td>
											<!-- <td>{{ $lista->id_materia }}</td>
											<td>{{ $lista->id_turno }}</td>
											<td>{{ $lista->id_gestion }}</td>
											<td>{{ $lista->paralelo_asig_mat }}</td>
											<td>{{ $lista->tipo_asig_mat }}</td>
											<td>{{ $lista->obs_asig_mat }}</td> -->

                                            <td>
                                                <form action="{{ route('asignacion.destroy',$lista->id_doc) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asignacion.show',$lista->id_doc) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asignacion.edit',$lista->id_doc) }}"><i class="fa fa-fw fa-edit"></i> Asignar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
