@extends('layouts.app')
@section('content')
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 ">Testimonials</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- /Main body -->
        <div class="testimonial-box-container">
            @foreach ($testimonials as $testimonial)
                <div class="col-md-6">
                    <div class="testimonial-box">
                        <div class="box-top">
                            <div class="profile">
                                <div class="profile-name">
                                    <strong>{{ $testimonial->user->name }}</strong>
                                </div>
                            </div>
                            <div class="review ">
                                @for ($i = 1; $i <= $testimonial->star; $i++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                            </div>
                        </div>
                        <div class="box-bottom">
                            <p>{{ $testimonial->description }} </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
