@extends('layouts.app')

@section('template_title')
    Update Tb Genero
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Tb Genero</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('genero.update', $tbGenero->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tb-genero.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
