<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tb Enlace Bi') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tb-enlace-bis.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Id Enlib</th>
										<th>Dir</th>
										<th>Foto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbEnlaceBis as $tbEnlaceBi)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $tbEnlaceBi->id_enlib }}</td>
											<td>{{ $tbEnlaceBi->dir }}</td>
											<td>{{ $tbEnlaceBi->foto }}</td>

                                            <td>
                                                <form action="{{ route('tb-enlace-bis.destroy',$tbEnlaceBi->id_enlib ) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tb-enlace-bis.show',$tbEnlaceBi->id_enlib ) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tb-enlace-bis.edit',$tbEnlaceBi->id_enlib ) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tbEnlaceBis->links() !!}
            </div>
        </div>
    </div>
    <?php include "bofer.php";?>
