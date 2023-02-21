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
                                {{ __('Tb Materia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Materia</th>
										<th>Codigo Mat</th>
										<th>Nombre Mat</th>
										<th>Habi Mat</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbMateria as $tbMateria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tbMateria->id_materia }}</td>
											<td>{{ $tbMateria->codigo_mat }}</td>
											<td>{{ $tbMateria->nombre_mat }}</td>
											<td>{{ $tbMateria->habi_mat }}</td>

                                            <td>
                                                <form action="{{ route('materias.destroy',$tbMateria->id_materia) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('materias.show',$tbMateria->id_materia) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('materias.edit',$tbMateria->id_materia) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
