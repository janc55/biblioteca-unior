<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">



                             <div class="float-right">
                                <a href="{{ route('crear_pres') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                NUEVO
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


										<th>Des Pres</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbPresLibros as $tbPresLibro)
                                        <tr>
                                            <td>{{ ++$i }}</td>


											<td>{{ $tbPresLibro->des_pres }}</td>

                                            <td>
                                                <form action="{{ route('pres_libros.destroy',$tbPresLibro->id_pres) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('presshow',$tbPresLibro->id_pres) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('prespdate',$tbPresLibro->id_pres) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tbPresLibros->links() !!}
            </div>
        </div>
    </div>
    <?php include "bofer.php";?>
