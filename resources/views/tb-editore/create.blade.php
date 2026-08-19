@extends('layouts.app')

@section('template_title')
    Create Tb Editore
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tb Editore</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tb-editores.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tb-editore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
