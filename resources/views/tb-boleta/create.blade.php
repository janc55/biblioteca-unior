@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tb Boleta</span>
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
            {{ Form::label('Estudiante') }}
            <input type="text" id="nom" name="nom" value="{{$dato}} " >

        </div>
        <div class="form-group">
            {{ Form::label('Hora Deposito') }}
            <input type="text" id="fec_reg_boleta" name="fec_reg_boleta">
        </div>
        <div class="form-group">
            {{ Form::label('Fecah Deposito') }}
            <input type="text" id="fec_depos_boleta" name="fec_depos_boleta">
        </div>
        <div class="form-group">
            {{ Form::label('Cuenta') }}
            <select name="id_cuenta" id="id_cuenta">
                <option value="1">Banco BNB:00555123</option>
                <option value="2">Banco BNB:00555445</option>
           </select> 
        </div>
        <div class="form-group">
            {{ Form::label('Gestion') }}
            <select name="id_gestion" id="id_gestion">
                <option value="1">1/2023</option>
                <option value="2">2/2023</option>
           </select>
        </div>
        <div class="form-group">
            {{ Form::label('N° de deposito') }}
            <input type="text" id="nro_depos" name="nro_depos">

        </div>
        <div class="form-group">
            {{ Form::label('Monto') }}
            <input type="text" id="monto_boleta" name="monto_boleta">

        </div>
       
        <div class="form-group">
            {{ Form::label('Observaciones') }}
            <input type="text" id="obs_boleta" name="obs_boleta">

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
