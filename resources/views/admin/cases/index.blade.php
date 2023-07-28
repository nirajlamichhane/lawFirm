@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Cases</h1>
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
                                <h3 class="card-title">Create New Cases</h3>

                                <div class="card-tools">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action=" {{ route('cases.store') }}" method="POST">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">Title</label>
                                                <input autocomplete="off" type="text" id="inputName" name="title"
                                                    class="form-control" required value="{{ old('title') }}">

                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">User</label>

                                                <select class="form-select h-100" id="users"
                                                    aria-label="Default select example" name="user_id"
                                                    value="{{ old('user_id') }}">
                                                    <option value="0">Create New User</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                    @endforeach
                                                </select>

                                                @error('user_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="row m-0" id="userForm">

                                            <form>
                                                <div class="col-md-6 pl-0">
                                                    <div class="form-group">
                                                        <label for="exampleInputName1">User Name</label>
                                                        <input type="text" name="username" class="form-control"
                                                            placeholder="Username" value="{{ old('username') }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pr-0">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input type="email" name="email" class="form-control"
                                                            value="{{ old('email') }}" placeholder="Email">
                                                    </div>
                                                </div>

                                            </form>

                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">Service</label>
                                                <select name="service" class="form-control">
                                                    @foreach ($services as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                    @endforeach

                                                </select>

                                                @error('service')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">Status</label>

                                                <select class="form-select" aria-label="Default select example"
                                                    name="status" value="{{ old('status') }}">
                                                    <option value="Incomplete" selected>Incomplete</option>
                                                    <option value="Complete">Complete</option>
                                                </select>

                                                @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="required" for="inputName">Next Hearing</label>
                                                <input type="date" autocomplete="off" id="inputName" name="next_hearing"
                                                    value="{{ old('next_hearing') }}" class="form-control" required>

                                                @error('next_hearing')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="required">Description</label>
                                                <textarea rows="4" cols="4" required name="description" value="{{ old('description') }}" class="form-control"
                                                    id="ckeditor"> {{ old('description') }}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="customer_has_access"
                                                {{ old('customer_has_access') ? 'checked' : '' }} id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Customer has access
                                            </label>
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
                                <h3 class="card-title">All Cases</h3>
                                <span class="ml-3 badge bg-info"></span>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-sm table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Service</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cases as $case)
                                            <tr>
                                                <td>{{ $case->id }}</td>
                                                <td>{{ $case->title }}</td>

                                                <td>{{ $case->status }}</td>
                                                <td>{{ $case->user->name }}</td>
                                                <td class="project-actions text-right">
                                                    <form action="{{ route('cases.destroy', ['case' => $case->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')

                                                        <a class="btn btn-info btn-sm no-propagation"
                                                            href="{{ route('cases.edit', ['case' => $case->id]) }}">
                                                            <i class="fas fa-pencil-alt">
                                                            </i>
                                                            Edit
                                                        </a>

                                                        <a class="btn btn-primary btn-sm no-propagation" 
                                                            href="{{ route('cases.show', ['case'=> $case->id]) }}">
                                                                <i class=" fas fa-pencil-alt">
                                                            </i>
                                                            Update
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
@section('extraJS')
    <script>
        $('#users').select2({});

        $('#users').on("change", function() {
            if (this.value != 0) {
                $("#userForm").hide();
            } else {
                $("#userForm").show();
            }
        });

        ClassicEditor
            .create(document.querySelector('#ckeditor'));
    </script>
@endsection
