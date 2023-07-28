@extends('admin.layouts.app')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            <a href="{{ route('cases.index') }}">
                                <i class="fas fa fa-arrow-left" style="font-size: 18px"></i>
                            </a>

                            <span class="ml-3">Update case : {{ $case->title }}</span>
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
                                <h3 class="card-title">Update case</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('cases.updatecase', ['case' => $case->id]) }}" method="POST">
                                    @csrf
                                    @method('post')

                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="required" for="inputName">Title</label>
                                                    <input autocomplete="off" type="text" id="inputName" name="title"
                                                        class="form-control" required value="{{ $case->title }}">

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
                                                    <input autocomplete="off" type="text" id="inputName" name="user_id"
                                                        value="{{ $case->user->id }}" class="form-control" required>

                                                    @error('user_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="required" for="inputName">Case</label>
                                                    <input autocomplete="off" type="text" id="inputName" name="problem_id"
                                                        value="{{ $case->id }}" class="form-control" required
                                                        readonly>

                                                    @error('user_id')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="required" for="inputName">Service</label>
                                                    <input autocomplete="off" type="text" id="inputName" name="service"
                                                        value="{{ $case->service }}" class="form-control" required
                                                        readonly>

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
                                                        name="status" value="{{ $case->status }}">
                                                        <option selected>Incomplete</option>
                                                        <option value="2">Complete</option>
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
                                                        {{-- value="{{ $case->next_hearing->format('Y-m-d') }}" --}} class="form-control" required>

                                                    @error('next_hearing')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <label class="required" for="inputDescription">Description</label>
                                                    <textarea rows="4" required autocomplete="off" name="description" value="{{ old('description') }}"
                                                        id="inputDescription" class="form-control"
                                                        rows="1"> {!! $case->description !!}</textarea>
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            {{-- @dd($case) --}}
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="customer_has_access"
                                                    {{ $case->customer_has_access ? 'checked' : '' }}
                                                    id="flexCheckChecked">
                                                <label class="form-check-label" for="flexCheckChecked">
                                                    Customer has access
                                                </label>
                                            </div>

                                            <div class="col-md-12 d-flex justify-content-end">
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
