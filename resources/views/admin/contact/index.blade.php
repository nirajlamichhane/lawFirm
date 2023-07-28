@extends('admin.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Contact</h1>
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
                            <div class="card-header" style="cursor: pointer" data-card-widget="collapse"
                                title="Collapse">
                                <h3 class="card-title">Contact</h3>

                                <div class="card-tools">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action=" {{ route('contact.store') }}" method="POST">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">Name</label>
                                                <input autocomplete="off" type="text" id="inputName" name="name"
                                                    class="form-control" required value="{{ old('name') }}">

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
                                                    value="{{ old('email') }}" class="form-control" required>

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

                                                <input class="form-control" name="title" value="{{ old('title') }}">


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
                                                <textarea type="text" rows="4" cols="4" autocomplete="off" name="description" value="{{ old('description') }}"
                                                    class="form-control" required>
                                                </textarea>

                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <h3 class="card-title">Contact</h3>
                                <span class="ml-3 badge bg-info"></span>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-sm table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td>{{ $contact->id }}</td>
                                                <td>{{ $contact->title }}</td>

                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->name }}</td>
                                                <td class="project-actions text-right">
                                                    <form action="{{route('contact.destroy',['contact'=>$contact->id])}}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')

                                                        <a class="btn btn-info btn-sm no-propagation"
                                                            href="{{route('contact.edit',['contact'=>$contact->id])}}">
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
        </section>
    </div>
@endsection
