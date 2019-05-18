@extends('user')

@section('title', "Projects")


@section('content')
    <div class="col-md-10 col-md-offset-1 user-page">
        <div class="col-md-12 header">
            <h3>Projects</h3>
        </div>
        @include('partials._messages')

        <div class="col-md-12">
            <dl class="dl-horizontal">
                <dt>Project Name:</dt>
                <dd>{{ $project->name }}</dd>
                <dt>Highlights:</dt>
                <dd>{{ $project->highlight }}</dd>
                <dt>Thumbnail:</dt>
                <dd><img src="{{ asset($project->thumbnail) }}" /></dd>
                <dt>Link:</dt>
                <dd>{{ $project->link }}</dd>
                <dt>Description:</dt>
                <dd>{!! $project->description !!}</dd>
                <dt>Company:</dt>
                <dd>{{ $project->company }}</dd>
                <dt>Created At:</dt>
                <dd>{{ $project->created_at }}</dd>
                <dt>Updated At:</dt>
                <dd>{{ $project->updated_at }}</dd>
            </dl>
        </div>
    </div>
@endsection