@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ASIGNACION</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('NOMINA DE MATERIAS') }}
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
										<th>Materias</th>
										
                                        <th>Asignar Materia</th>

										
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lista as $lista)
                                        <tr>
                                          
                                            
											<td>{{ $lista->codigo_mat}}</td>
											<td>{{ $lista->nombre_mat}}</td>
											
											
											
                                            <td>

                                         
                                            <form method="POST" action="{{ route('rg_mt') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                                            <select name="id_turno" id="id_turno" value="" style="background-color:green; color:white; ">
                                                <option value="1"> MAÑANA</option>
                                                <option value="2"> TARDE</option>
                                                <option value="3"> NOCHE</option>
                                            </select>

                                            <input type="text" name="pr" id="pr" value=''>
                                            <input type="hidden" name="id_doc" id="id_doc" value="{{ $id_rec}}">
                                            <input type="hidden" name="id_mat" id="id_mat" value="{{ $lista->id_materia}}">
                                            
                                                    <button type="submit" class="btn btn-success"><i class="fa fa-fw fa-pencil"></i> Asignar</button>
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
