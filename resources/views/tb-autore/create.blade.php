@extends('layouts.app')

@section('template_title')
    Create Tb Autore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tb Autore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tb-autores.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tb-autore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
