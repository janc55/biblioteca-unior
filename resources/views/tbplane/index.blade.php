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
                                {{ __('Tbplane') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('plane.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Plan</th>
										<th>Nombre Plan</th>
										<th>Cuotas</th>
										<th>Monto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbplane as $tbplane)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tbplane->id_pl }}</td>
											<td>{{ $tbplane->nombre_plan }}</td>
											<td>{{ $tbplane->cuotas }}</td>
											<td>{{ $tbplane->monto }}</td>

                                            <td>
                                                <form action="{{ route('plane.destroy',$tbplane->id_pl) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('plane.show',$tbplane->id_pl) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('plane.edit',$tbplane->id_pl) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
