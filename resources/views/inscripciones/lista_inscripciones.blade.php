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
                                            <div class="card-body">
                                             @csrf                                               
                                             <form method="POST" action="{{ route('reg_ins') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                                            <input type="hidden" name="id_est"   id="id_est"            value="{{ $lista->id_est}}">
                                            <input type="hidden" name="id_gestion"   id="id_gestion"   value="{{ $lista->id_gestion}}">
                                            <input type="hidden" name="id_beca"   id="id_beca"         value="{{ $lista->id_beca}}">
                                            <input type="hidden" name="id_boleta"   id="id_boleta"     value="5">


                                            <input type="text" name="dato"   id="obs_ins"   >


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
