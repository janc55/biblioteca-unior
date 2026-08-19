@extends('layouts.app')

@section('template_title')
    {{ $tbSolPreLibro->name ?? 'Show Tb Sol Pre Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Sol Pre Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitar.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id Solib:</strong>
                            {{ $tbSolPreLibro->id_solib }}
                        </div>
                        <div class="form-group">
                            <strong>Id Us:</strong>
                            {{ $tbSolPreLibro->id_us }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Sol:</strong>
                            {{ $tbSolPreLibro->fecha_sol }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Sol:</strong>
                            {{ $tbSolPreLibro->hora_sol }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Dev:</strong>
                            {{ $tbSolPreLibro->fecha_Dev }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Dev:</strong>
                            {{ $tbSolPreLibro->hora_dev }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tbSolPreLibro->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
