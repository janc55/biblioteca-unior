@extends('layouts.app')

@section('template_title')
    {{ $vistaLogSession->name ?? 'Show Vista Log Session' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Vista Log Session</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vista-log-sessions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $vistaLogSession->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $vistaLogSession->fecha_hora }}
                        </div>
                        <div class="form-group">
                            <strong>Ip:</strong>
                            {{ $vistaLogSession->ip }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $vistaLogSession->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $vistaLogSession->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Cel:</strong>
                            {{ $vistaLogSession->cel }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $vistaLogSession->carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $vistaLogSession->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
