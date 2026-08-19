<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>
    <div         <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tb Genero') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('genero.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Id Ge</th>class="container-fluid">

										<th>Nombre</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbGeneros as $tbGenero)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $tbGenero->id_ge }}</td>
											<td>{{ $tbGenero->nombre }}</td>

                                            <td>
                                                <form action="{{ route('genero.destroy',$tbGenero->id_ge) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('genero.show',$tbGenero->id_ge) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('genero.edit',$tbGenero->id_ge) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tbGeneros->links() !!}
            </div>
        </div>
    </div>
    <?php include "bofer.php";?>
