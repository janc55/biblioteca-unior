@extends('layouts.app')

@section('template_title')
    {{ $tbEtiqueta->name ?? 'Show Tb Etiqueta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Etiqueta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-etiquetas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Eti:</strong>
                            {{ $tbEtiqueta->id_eti }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tbEtiqueta->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
