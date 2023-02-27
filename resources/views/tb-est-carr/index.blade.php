@extends('layouts.app')

@section('template_title')
    Tb Est Carr
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tb Est Carr') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tb-est-carrs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Est Carr</th>
										<th>Id Est</th>
										<th>Id Carre</th>
										<th>Id Turno</th>
										<th>Id Pl</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbEstCarrs as $tbEstCarr)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tbEstCarr->id_est_carr }}</td>
											<td>{{ $tbEstCarr->id_est }}</td>
											<td>{{ $tbEstCarr->id_carre }}</td>
											<td>{{ $tbEstCarr->id_turno }}</td>
											<td>{{ $tbEstCarr->id_pl }}</td>

                                            <td>
                                                <form action="{{ route('tb-est-carrs.destroy',$tbEstCarr->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tb-est-carrs.show',$tbEstCarr->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tb-est-carrs.edit',$tbEstCarr->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tbEstCarrs->links() !!}
            </div>
        </div>
    </div>
@endsection
