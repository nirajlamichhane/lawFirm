@extends('layouts.user')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            <a href="{{ route('contact.index') }}">
                                <i class="fas fa fa-arrow-left" style="font-size: 18px"></i>
                            </a>

                            <span class="ml-3">Edit case : {{ $contact->name }}</span>
                        </h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Contact</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('contact.update',['contact'=>$contact->id])}}" method="POST">
                                    @csrf
                                    @method('put')


                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">Name</label>
                                                <input autocomplete="off" type="text" id="inputName" name="name"
                                                    class="form-control" required value="{{ $contact->name }}">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputEmail">Email</label>
                                                <input autocomplete="off" type="text" id="inputEmail" name="email"
                                                    value="{{ $contact->email }}" class="form-control" required>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputTitle">Title</label>

                                                <input class="form-control" name="title" value="{{ $contact->title }}">


                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">Description</label>
                                                <textarea type="text" rows="4" cols="4" autocomplete="off" name="description" value="{{ $contact->description }}"
                                                    class="form-control" required>{{ $contact->description }}
                                                </textarea>

                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Update Contact</button>
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
