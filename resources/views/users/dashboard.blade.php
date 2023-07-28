@extends('layouts.user')
@section('content')
    <div class="content-wrapper">
        {{-- Page Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User DashBoard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <h1> {{ $user->name }}</h1>
        <h2>{{ $user->email }}</h2>
    </div>
@endsection
