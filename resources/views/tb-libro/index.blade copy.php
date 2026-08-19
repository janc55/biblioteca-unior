
    <?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>



    <div class="card">



          <div class="card-header">
            <div style="display: flex; justify-content: space-between; align-items: center;">

                <span id="card_title">
                  Libros
                </span>



                 <div class="float-right">
                    <a href="{{ route('createlibros') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                     Registrar Libros
                    </a>

                    <a href="{{ route('createtesis') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                     Registrar Tesis
                    </a>

                    <a href="{{ route('createvirtual') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                     Registrar Virtual
                    </a>

                    <a href="{{ route('createdigital') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                        Registrar Digital
                    </a>
                  </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card-header">
          <h3 class="card-title">REGISTRAR LIBROS/TESIS/BIBLIOTECA</h3>
          <br>

          <form method="POST" action="{{ route('bus_lib_ad') }}"  role="form" enctype="multipart/form-data">
              @csrf
          <div class="form-group mb-2">
            <label for="staticEmail2" class="sr-only">Buscar:</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Buscar:">
          </div>
          <div class="form-group mx-sm-3 mb-2">
            <label for="bus" class="sr-only">Buscar</label>
            <input style="background: linear-gradient(90deg, rgba(254,0,0,0.18531162464985995) 100%, rgba(8,0,36,0.5634628851540616) 100%);
            " type="text" class="form-control" name ="bus" id="bus" placeholder="Ingresar Librio">
         <button type="submit" class="btn btn-primary mb-2">Buscar</button>
      </div>

        </form>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
                                    <tr>
                                        <th>No</th>


										<th>Isbm</th>
										<th>Codigo</th>
										<th>Año</th>
										<th>Nombre</th>
										<th>Ciudad</th>
										<th>Editorial</th>
										<th>Autores</th>
										<th>Genero</th>
										<th>Etiquetas</th>
										<th>Url</th>
										<th>Descripcion</th>
										<th>Volumen</th>
										<th>Titulo</th>
										<th>Nro Paginas</th>
										<th>Presentacion</th>
										<th>Trabajo Grado</th>
										<th>Digital</th>
										<th>Nro Copias</th>
										<th>En Biblio</th>
										<th>En Arch</th>
										<th>Ubicacion</th>
										<th>Lugar</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbLibros as $tbLibro)
                                        <tr>
                                            <td>{{ ++$i }}</td>

													<td>{{ $tbLibro->isbm }}</td>
											<td>{{ $tbLibro->codigo }}</td>
											<td>{{ $tbLibro->año }}</td>
											<td>{{ $tbLibro->nombre }}</td>
											<td>{{ $tbLibro->ciudad }}</td>
											<td>{{ $tbLibro->editorial }}</td>
											<td>{{ $tbLibro->autores }}</td>
											<td>{{ $tbLibro->genero }}</td>
											<td>{{ $tbLibro->etiquetas }}</td>
											<td>{{ $tbLibro->url }}</td>
											<td>{{ $tbLibro->descripcion }}</td>
											<td>{{ $tbLibro->volumen }}</td>
											<td>{{ $tbLibro->titulo }}</td>
											<td>{{ $tbLibro->nro_paginas }}</td>
											<td>{{ $tbLibro->presentacion }}</td>
											<td>{{ $tbLibro->trabajo_grado }}</td>
											<td>{{ $tbLibro->digital }}</td>
											<td>{{ $tbLibro->nro_copias }}</td>
											<td>{{ $tbLibro->en_biblio }}</td>
											<td>{{ $tbLibro->en_arch }}</td>
											<td>{{ $tbLibro->ubicacion }}</td>
											<td>{{ $tbLibro->lugar }}</td>
                                            <td>
                                                <form action="{{ route('libros.destroy',$tbLibro->id_libro) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('libros.show',$tbLibro->id_libro) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('libros.edit',$tbLibro->id_libro) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    <?php include "bofer.php";?>
