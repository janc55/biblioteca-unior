@extends('layouts.app')

@section('template_title')
    Create Tb Est Carr
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Tb Est Carr</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tb-est-carrs.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tb-est-carr.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
