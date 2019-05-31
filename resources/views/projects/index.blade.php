@extends('user')

@section('title', "Projects")


@section('content')
    <div class="col-md-12 margin-bottom-10">
        <button type="button" class="btn btn-success btn-sm" onclick="location.href='{{ route('projects.create') }}'"><i class="glyphicon glyphicon-plus"></i> Add Project</button>
    </div>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-borderless table-striped table-hover">
                <thead class="thead-dark">
                    <th>#</th>
                    <th>Name</th>
                    <th>Order</th>
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
                            <td>{{ $item->order }}</td>
                            <td>{{ $item->company }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" onclick="location.href='{{ route('projects.edit', $item->id) }}'"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                {{-- <a href="{{ route('projects.edit', $item->id) }}">Edit</a> |  --}}
                                {{-- <a href="#">Delete</a>  --}}
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
@endsection