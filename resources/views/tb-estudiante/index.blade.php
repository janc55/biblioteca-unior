@extends('layouts.app')

@section('template_title')
    Tb Estudiante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tb Estudiante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tb-estudiantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Est</th>
										<th>Cod Est</th>
										<th>Nombre Est</th>
										<th>Ape P Est</th>
										<th>Ape M Est</th>
										<th>Ci Est</th>
										<th>Exp Est</th>
										<th>Fec Nac Est</th>
										<th>Dir Est</th>
										<th>Tel Dom Est</th>
										<th>Cel Est</th>
										<th>Email Est</th>
										<th>Tur Des Est</th>
										<th>Fec Regis Est</th>
										<th>Padre Del Est</th>
										<th>Madre Del Est</th>
										<th>Nombre Trab Padre Est</th>
										<th>Tel Trab Padre Est</th>
										<th>Dir Trab Padre Est</th>
										<th>Cole Est</th>
										<th>Sexo Est</th>
										<th>Numsol Est</th>
										<th>Insc Est</th>
										<th>Dom Est</th>
										<th>Lug Nac Est</th>
										<th>Trab Dir Est</th>
										<th>Trab Fono Est</th>
										<th>Trab Nombre Est</th>
										<th>Dato Bachi Est</th>
										<th>Tipo Cole Est</th>
										<th>Pais Cod Est</th>
										<th>Fec Emitb Est</th>
										<th>Sede Emit Est</th>
										<th>Fec Tranf Est</th>
										<th>Fact Doc Tipo Est</th>
										<th>Fact Doc Numero Est</th>
										<th>Fact Nombre Est</th>
										<th>Foto Est</th>
										<th>Obs Est</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tbEstudiantes as $tbEstudiante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tbEstudiante->id_est }}</td>
											<td>{{ $tbEstudiante->cod_est }}</td>
											<td>{{ $tbEstudiante->nombre_est }}</td>
											<td>{{ $tbEstudiante->ape_p_est }}</td>
											<td>{{ $tbEstudiante->ape_m_est }}</td>
											<td>{{ $tbEstudiante->ci_est }}</td>
											<td>{{ $tbEstudiante->exp_est }}</td>
											<td>{{ $tbEstudiante->fec_nac_est }}</td>
											<td>{{ $tbEstudiante->dir_est }}</td>
											<td>{{ $tbEstudiante->tel_dom_est }}</td>
											<td>{{ $tbEstudiante->cel_est }}</td>
											<td>{{ $tbEstudiante->email_est }}</td>
											<td>{{ $tbEstudiante->tur_des_est }}</td>
											<td>{{ $tbEstudiante->fec_regis_est }}</td>
											<td>{{ $tbEstudiante->padre_del_est }}</td>
											<td>{{ $tbEstudiante->madre_del_est }}</td>
											<td>{{ $tbEstudiante->nombre_trab_padre_est }}</td>
											<td>{{ $tbEstudiante->tel_trab_padre_est }}</td>
											<td>{{ $tbEstudiante->dir_trab_padre_est }}</td>
											<td>{{ $tbEstudiante->cole_est }}</td>
											<td>{{ $tbEstudiante->sexo_est }}</td>
											<td>{{ $tbEstudiante->numsol_est }}</td>
											<td>{{ $tbEstudiante->insc_est }}</td>
											<td>{{ $tbEstudiante->dom_est }}</td>
											<td>{{ $tbEstudiante->lug_nac_est }}</td>
											<td>{{ $tbEstudiante->trab_dir_est }}</td>
											<td>{{ $tbEstudiante->trab_fono_est }}</td>
											<td>{{ $tbEstudiante->trab_nombre_est }}</td>
											<td>{{ $tbEstudiante->dato_bachi_est }}</td>
											<td>{{ $tbEstudiante->tipo_cole_est }}</td>
											<td>{{ $tbEstudiante->pais_cod_est }}</td>
											<td>{{ $tbEstudiante->fec_emitb_est }}</td>
											<td>{{ $tbEstudiante->sede_emit_est }}</td>
											<td>{{ $tbEstudiante->fec_tranf_est }}</td>
											<td>{{ $tbEstudiante->fact_doc_tipo_est }}</td>
											<td>{{ $tbEstudiante->fact_doc_numero_est }}</td>
											<td>{{ $tbEstudiante->fact_nombre_est }}</td>
											<td>{{ $tbEstudiante->foto_est }}</td>
											<td>{{ $tbEstudiante->obs_est }}</td>

                                            <td>
                                                <form action="{{ route('tb-estudiantes.destroy',$tbEstudiante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tb-estudiantes.show',$tbEstudiante->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tb-estudiantes.edit',$tbEstudiante->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tbEstudiantes->links() !!}
            </div>
        </div>
    </div>
@endsection
