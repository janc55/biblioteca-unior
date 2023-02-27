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
                                {{ __('Tb Estudiantes') }}
                            </span>

                             <div class="float-right">
                               
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
                                        
										<!-- <th>Id Est</th> -->
										<th>Codigo</th>
										<th>Nombre Estudiante</th>
										<!-- <th>Ape P Est</th>
										<th>Ape M Est</th> -->
										<th>Carnet</th>
										<!-- <th>Exp Est</th> -->
										<!-- <th>Fec Nac Est</th>
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
										<th>Est Pass</th>
										<th>Obs Est</th> -->

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tabla as $tabla)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<!-- <td>{{ $tabla->id_est }}</td> -->
											<td>{{ $tabla->cod_est }}</td>
											<td>{{ $tabla->ape_p_est }} {{ $tabla->ape_m_est }} {{ $tabla->nombre_est }}</td>
											<!-- <td>{{ $tabla->ape_p_est }}</td>
											<td>{{ $tabla->ape_m_est }}</td> -->
											<td>{{ $tabla->ci_est }}</td>
											<!-- <td>{{ $tabla->exp_est }}</td> -->
											<!-- <td>{{ $tabla->fec_nac_est }}</td>
											<td>{{ $tabla->dir_est }}</td>
											<td>{{ $tabla->tel_dom_est }}</td>
											<td>{{ $tabla->cel_est }}</td>
											<td>{{ $tabla->email_est }}</td>
											<td>{{ $tabla->tur_des_est }}</td>
											<td>{{ $tabla->fec_regis_est }}</td>
											<td>{{ $tabla->padre_del_est }}</td>
											<td>{{ $tabla->madre_del_est }}</td>
											<td>{{ $tabla->nombre_trab_padre_est }}</td>
											<td>{{ $tabla->tel_trab_padre_est }}</td>
											<td>{{ $tabla->dir_trab_padre_est }}</td>
											<td>{{ $tabla->cole_est }}</td>
											<td>{{ $tabla->sexo_est }}</td>
											<td>{{ $tabla->numsol_est }}</td>
											<td>{{ $tabla->insc_est }}</td>
											<td>{{ $tabla->dom_est }}</td>
											<td>{{ $tabla->lug_nac_est }}</td>
											<td>{{ $tabla->trab_dir_est }}</td>
											<td>{{ $tabla->trab_fono_est }}</td>
											<td>{{ $tabla->trab_nombre_est }}</td>
											<td>{{ $tabla->dato_bachi_est }}</td>
											<td>{{ $tabla->tipo_cole_est }}</td>
											<td>{{ $tabla->pais_cod_est }}</td>
											<td>{{ $tabla->fec_emitb_est }}</td>
											<td>{{ $tabla->sede_emit_est }}</td>
											<td>{{ $tabla->fec_tranf_est }}</td>
											<td>{{ $tabla->fact_doc_tipo_est }}</td>
											<td>{{ $tabla->fact_doc_numero_est }}</td>
											<td>{{ $tabla->fact_nombre_est }}</td>
											<td>{{ $tabla->foto_est }}</td>
											<td>{{ $tabla->est_pass }}</td>
											<td>{{ $tabla->obs_est }}</td> -->

                                            <td>
												
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
