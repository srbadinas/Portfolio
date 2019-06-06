@extends('admin')

@section('title', "Project Images")

@section('content')
    <div class="col-md-12">
            {{ Form::open(['route' => ['projects.images', $project->id], 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) }}
                <div class="form-group">
                    <div class="col-md-12">
                        {{ Form::label('image', 'Upload Image:') }}
                        
                    </div>
                    <div class="col-md-8 offset-md-1">
                        {{ Form::file('image') }}
                        {{ Form::submit('Upload Image', ['class' => 'btn btn-success btn-sm']) }}
                    </div>
                </div>
        {{ Form::close() }}
        <label class="col-md-4">Images:</label>
        <div class="col-md-12">
            <div class="row">
                @foreach($project->images as $image)
                    <div class="col-sm-2 margin-bottom-30">
                        <div class="content-image">
                            <img src="{{ asset('img/project/images/'.$image->image) }}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>        
        <hr>
        <div class="col-md-12 margin-bottom-10">
            <button type="button" class="btn btn-dark btn-sm" onclick="location.href='{{ route('projects.index') }}'">Back to List</button>
        </div>
    </div>
@endsection