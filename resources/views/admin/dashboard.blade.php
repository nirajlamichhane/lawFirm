@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        {{-- Page Header --}}
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Admin DashBoard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        {{-- Main Body --}}
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3">
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                              <div class="card-body">
                                <h3 class="card-title">
                                    <a class="text-white" href="{{route('users.index')}}">Users</a>
                                </h3>
                                <h1 class="card-text">{{$data['users']}}</h1>
                              </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                              <div class="card-body">
                                <h3 class="card-title">
                                    <a class="text-white" href="{{route('cases.index')}}">Cases</a>
                                </h3>
                                <h1 class="card-text">{{$data['cases']}}</h1>
                              </div>
                            </div>
                        </div><div class="col-3">
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                              <div class="card-body">
                                <h3 class="card-title">
                                    <a class="text-white" href="{{route('services.index')}}">Services</a>
                                </h3>
                                <h1 class="card-text">{{$data['services']}}</h1>
                              </div>
                            </div>
                        </div><div class="col-3">
                            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                              <div class="card-body">
                                <h3 class="card-title">
                                    <a class="text-white" href="{{route('testimonial.index')}}">Testimonials</a>
                                </h3>
                                <h1 class="card-text">{{$data['testimonials']}}</h1>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        {{-- End of Main Body --}}
    </div>
@endsection
