@extends('user')

@section('title', "Projects")


@section('content')
    <div class="col-md-10 col-md-offset-1 user-page">
        <div class="col-md-12 header">
            <h3>Projects</h3>
            <button type="button" class="btn btn-success btn-sm pull-right" onclick="location.href='{{ route('projects.create') }}'"><i class="glyphicon glyphicon-plus"></i> Add Project</button>
        </div>
        @include('partials._messages')
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-condensed">
                    <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($projects as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->company }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12 pagination-wrapper">
            {{ $projects->links() }}
        </div>
    </div>
@endsection