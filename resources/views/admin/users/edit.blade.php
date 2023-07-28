@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            <a href="{{ route('users.index') }}">
                                <i class="fas fa fa-arrow-left" style="font-size: 18px"></i>
                            </a>
                            <span>Edit User: {{ $user->name }}</span>
                        </h1>
                    </div><!-- Col -->
                </div> <!-- Row -->
            </div><!-- .conatiner-fluid -->
        </div><!-- container-fluid -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row ">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit User : </h3>
                            </div>
                            <div class="card-body  justify-content-center">
                                <form action="#" method="POST">
                                    @csrf
                                    @method('put')

                                    <div class="hero mt-2">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">Name</label>
                                                <input autocomplete="off" type="text" id="inputName" name="name"
                                                    class="form-control" required value="}">

                                               
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputEmail">Email</label>
                                                <input autocomplete="off" type="email" id="inputEmail" name="email"
                                                    value="" class="form-control" required>

                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputPassword">Password</label>
                                                <input autocomplete="off" type="password" id="inputPassword" name="password"
                                                    class="form-control" required>

                                                
                                            </div>
                                        </div>



                                        <div class="col-md-12 mb-2 ">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
