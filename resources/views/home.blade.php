@extends('layouts.app')

@section('content')
<div class="container-fluid p-0 mt-4">
    <section class="p-3 p-lg-5 align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
