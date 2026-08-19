@extends('layouts.app')

@section('template_title')
    {{ $tbEditore->name ?? 'Show Tb Editore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Editore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-editores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Edi:</strong>
                            {{ $tbEditore->id_edi }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tbEditore->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
