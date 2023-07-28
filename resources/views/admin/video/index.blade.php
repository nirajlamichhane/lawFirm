@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Videos</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        {{-- Main Content --}}
        <section class="content">
            <div class="conatiner-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header" style="cursor: pointer" data-card-widget="collapse"
                                title="collapse">
                                <h3 class="card-title">Videos</h3>
                                <div class="card-tools">
                                    <i class="fas fa-chevron-down"></i>
                                </div>

                            </div>
                            <div class="card-body">
                                <form action="{{route("video.store")}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" placeholder="Enter a title"
                                                    class="form-control" required>
                                                @error('title')
                                                    <span class="alert alert-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="video">Video</label>
                                                <input type="file" name="video" placeholder="Enter a video url"
                                                    class="form-control" required>
                                                @error('video')
                                                    <span class="alert alert-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End of Main Content --}}

    </div>
@endsection
