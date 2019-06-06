@extends('admin')

@section('title', "Add Skill")


@section('content')
    <div class="col-md-12">
        @include('partials._messages')
        {{ Form::open(['route' => 'skills.store', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) }}
        <div class="form-group">
            <div class="col-md-8">
                {{ Form::label('name', 'Skill:') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Skill']) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                {{ Form::label('skill_type_id', 'Type:') }}
                {{ Form::select('skill_type_id', $skill_types, null, ['class' => 'form-control']) }}                   
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="col-md-12">
                <button type="button" class="btn btn-dark btn-sm" onclick="location.href='{{ route('skills.index') }}'">Back to List</button>
                {{ Form::submit('Submit', ['class' => 'btn btn-success btn-sm']) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection
