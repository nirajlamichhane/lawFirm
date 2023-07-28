@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Services</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Body -->
        <div class="content">
            <div class="conatiner-fluid">
                <div class="row">
                    <div class="col-md-12">

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

            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title">All Services</h3>
                        <span class="ml-3 badge bg-info"></span>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-sm table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Service</th>

                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>{{ $service->name }}</td>
                                        <td class="project-actions text-right">
                                            <form action="{{ route('services.destroy', ['service' => $service->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')

                                                <a class="btn btn-info btn-sm no-propagation"
                                                    href="{{ route('services.edit', ['service' => $service->id]) }}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash">
                                                    </i>
                                                    Delete
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="m-2 d-flex justify-content-end">
                    {{-- {!! $services->links('pagination::bootstrap-4') !!} --}}
                </div>
            </div>

        </div>
    </div>




    </div>
@endsection
