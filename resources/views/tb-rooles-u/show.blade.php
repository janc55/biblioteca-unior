@extends('layouts.app')

@section('template_title')
    {{ $tbRoolesU->name ?? 'Show Tb Rooles U' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Rooles U</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-rooles-us.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Ru:</strong>
                            {{ $tbRoolesU->id_ru }}
                        </div>
                        <div class="form-group">
                            <strong>Rool:</strong>
                            {{ $tbRoolesU->rool }}
                        </div>
                        <div class="form-group">
                            <strong>Permisos:</strong>
                            {{ $tbRoolesU->permisos }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
