@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Boleta de {{$dato}} </h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Boleta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('boletas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
    <div class="box-body">
        
        <!-- <div class="form-group">
            {{ Form::label('id_boleta') }}
          
        </div> -->

        <input type="hidden" name="id_est"   id="id_est"   value="{{ $id_est}}">
      

        <div class="form-group">
            <label class="form-control">Estudiante</label>
            <input type="text" id="nom" name="nom" value="{{$dato}} "  class="form-control bi bi-0-square-fill">
            <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
            <label class="form-control">Hora Deposito</label>
            <input type="text" id="fec_reg_boleta" name="fec_reg_boleta"  class="form-control bi bi-0-square-fill">
            <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
            <label class="form-control">Fecha Deposito</label>
            <input type="text" id="fec_depos_boleta" name="fec_depos_boleta" class="form-control bi bi-0-square-fill">
            <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
            <label class="form-control">Cuenta</label>
            <select name="id_cuenta" id="id_cuenta" class="form-control bi bi-0-square-fill">
                <option value="1">Banco BNB:00555123</option>
                <option value="2">Banco BNB:00555445</option>
           </select> 
            <div class="invalid-feedback">:message</div>
        </div>
       
        <div class="form-group">
            <label class="form-control">N° de deposito</label>
            <input type="text" id="nro_depos" name="nro_depos" name="fec_depos_boleta" class="form-control bi bi-0-square-fill">
            <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
            <label class="form-control">Monto</label>
            <input type="text" id="monto_boleta" name="monto_boleta" class="form-control bi bi-0-square-fill">
            <div class="invalid-feedback">:message</div>
        </div>  
        <div class="form-group">
            <label class="form-control">Observaciones</label>
            <input type="text" id="obs_boleta" name="obs_boleta" class="form-control bi bi-0-square-fill" value="Ninguna">
            <div class="invalid-feedback">:message</div>
        </div>      
       

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
