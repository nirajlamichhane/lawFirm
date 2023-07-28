@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="m-1">
            {{-- Page Header --}}
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Users</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            {{-- main content --}}
            <section class="content">
                <div class="container-fluid">
                    {{-- Small boxes --}}
                    <div class="row">
                        <div class="col-12">

                            {{-- User Table --}}
                            <div class="card mt-3">
                                <div class="card-header">
                                    <strong>Available Users </strong>
                                </div>
                                <div class="card-body">
                                    {{-- @if ($users->count() === 0)
                                        <div class="alert alert-danger">
                                            You have not added any users yet. Please use above form to add one.
                                        </div>
                                    @else --}}
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.N</th>
                                                    <th width="100px">Name</th>
                                                    <th>E-Mail Address</th>
                                                    <th>Type</th>
                                                    <th width="170px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->type }}</td>
                                                        <td>
                                                            <form method="POST"
                                                                action="{{ route('users.destroy', ['user' => $user->id]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a href="{{route('users.edit', ['user' => $user->id])}}" class="btn btn-sm btn-success">📝 Edit</a>
                                                                <input value="Delete" type="submit"
                                                                    class="btn btn-sm btn-danger">

                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    {{-- @endif --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>



        </div>
    </div>
@endsection
