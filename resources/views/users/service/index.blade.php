@extends('layouts.user')
@section('content')
    <div class="content-wrapper">
        {{-- Page Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Services</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        @foreach ($services as $service)
            <h1>{{ $service->name }}</h1>
        @endforeach
    </div>
@endsection
