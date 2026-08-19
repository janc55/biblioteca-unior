@extends('layouts.app')

@section('template_title')
    {{ $tbAutore->name ?? 'Show Tb Autore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Autore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-autores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Au:</strong>
                            {{ $tbAutore->id_au }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tbAutore->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
