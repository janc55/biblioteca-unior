@extends('layouts.app')

@section('template_title')
    {{ $tbEstCarr->name ?? 'Show Tb Est Carr' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Est Carr</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-est-carrs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Est Carr:</strong>
                            {{ $tbEstCarr->id_est_carr }}
                        </div>
                        <div class="form-group">
                            <strong>Id Est:</strong>
                            {{ $tbEstCarr->id_est }}
                        </div>
                        <div class="form-group">
                            <strong>Id Carre:</strong>
                            {{ $tbEstCarr->id_carre }}
                        </div>
                        <div class="form-group">
                            <strong>Id Turno:</strong>
                            {{ $tbEstCarr->id_turno }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pl:</strong>
                            {{ $tbEstCarr->id_pl }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
