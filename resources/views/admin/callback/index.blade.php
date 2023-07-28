@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            <a href="#">
                                <i class="fas fa fa-arrow-left" style="font-size: 18px"></i>
                            </a>

                            <span class="ml-3">Request CallBack :</span>
                        </h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="card-title">All Request CallBack</h3>
                            <span class="ml-3 badge bg-info"></span>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-sm table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Enquiry</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($callbacks as $callback)
                                        <tr>
                                            <td>{{ $callback->id }}</td>
                                            <td>{{ $callback->name }}</td>
                                            <td>{{ $callback->email }}</td>

                                            <td>{{ $callback->phone }}</td>
                                            <td>{{ $callback->enquiry }}</td>
                                            <td class="project-actions text-right">
                                                <form
                                                    action="{{ route('callback.destroy', ['callback' => $callback->id]) }}}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <a
                                                        href="{{ route('callback.complete', ['callback' => $callback->id]) }}">

                                                        @if ($callback->isComplete == 0)
                                                            <div class="btn btn-info btn-sm">InComplete</div>
                                                        @else
                                                            <div class="btn btn-primary btn-sm">Complete</div>
                                                        @endif
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
        </section>

    </div>
@endsection
