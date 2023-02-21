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
                                {{ __('Tb Gestione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('gestiones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Gestion</th>
										<th>Periodo Gestion</th>
										<th>Anio Gestion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbGestione as $tbGestione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tbGestione->id_gestion }}</td>
											<td>{{ $tbGestione->periodo_gestion }}</td>
											<td>{{ $tbGestione->anio_gestion }}</td>

                                            <td>
                                                <form action="{{ route('gestiones.delete',$tbGestione->id_gestion) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('gestiones.show',$tbGestione->id_gestion) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('gestiones.edit',$tbGestione->id_gestion) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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

