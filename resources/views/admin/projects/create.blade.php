@extends('admin')

@section('title', "Add Project")


@section('content')
    <div class="col-md-12">
        @include('partials._messages')
        {{ Form::open(['route' => 'projects.store', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) }}
        <div class="form-group">
            <div class="col-md-8">
                {{ Form::label('name', 'Project Name:') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Project Name']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                {{ Form::label('highlight', 'Highlights:') }}
                {{ Form::textarea('highlight', null, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'Enter Highlights']) }}                   
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                {{ Form::label('link', 'Link:') }}
                {{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter Link']) }}
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-md-12">
                {{ Form::label('description', 'Description:') }}
                {{ Form::textarea('description', null, ['class' => 'form-control ckeditor', 'placeholder' => 'Enter Description']) }}                   
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                {{ Form::label('company', 'Company:') }}
                {{ Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Enter Company']) }}
            </div>
        </div>
        {{-- <div class="form-group">
            <div class="col-md-8">
                {{ Form::label('images', 'Images:') }}
                {{ Form::file('images[]', ['multiple' => true]) }}
            </div>
        </div> --}}
        <div class="form-group">
            <div class="col-md-8">
                {{ Form::label('thumbnail', 'Thumbnail:') }}
                {{ Form::file('thumbnail') }}
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="col-md-12">
                <button type="button" class="btn btn-dark btn-sm" onclick="location.href='{{ route('projects.index') }}'">Back to List</button>
                {{ Form::submit('Submit', ['class' => 'btn btn-success btn-sm']) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection

@section('scripts')
    <script src="//cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('.ckeditor');
    </script>
@endsection