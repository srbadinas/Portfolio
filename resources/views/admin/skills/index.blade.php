@extends('admin')

@section('title', "Skills")

@section('content')
    <div class="col-md-12 margin-bottom-10">
        <button type="button" class="btn btn-outline-success btn-sm" onclick="location.href='{{ route('skills.create') }}'"><i class="fa fa-plus"></i> Add Skill</button>
        <button type="button" class="btn btn-outline-warning btn-sm"><i class="fa fa-pencil-alt"></i></button>
    </div>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-borderless table-striped table-hover">
                <thead class="thead-dark">
                    <th>#</th>
                    <th>Name</th>
                    <th>Skill Type</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($skills as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->skill_type->name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <button type="button" class="btn btn-warning btn-sm" onclick="location.href='{{ route('skills.edit', $item->id) }}'"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12 pagination-wrapper">
        {{ $skills->links() }}
    </div>
@endsection