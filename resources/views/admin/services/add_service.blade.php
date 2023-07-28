@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Servces</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        {{-- Main Body --}}

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header" style="cursor: pointer" data-card-widget="collapse"
                                title="Collapse">
                                <h3 class="card-title">Add New Service</h3>

                                <div class="card-tools">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('services.store') }} " method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">Service Name</label>
                                                <input autocomplete="off" type="text" id="inputName" name="name"
                                                    class="form-control" required value="{{ old('name') }}">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputDescription">Description</label>
                                                <textarea rows="4" cols="4" required name="description" value="{{ old('description') }}" class="form-control"> {{ old('description') }}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="inputThumnails">Thumnail</label>
                                                <input type="file" name="thumbnail" value="{{ old('thumbnail') }}"
                                                    class="form-control">
                                                @error('thumbnail')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary ">Create Service</button>
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
