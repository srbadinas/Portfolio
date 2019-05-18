@extends('main')

@section('title', "Projects")

@section('content')
    <div class="page-wrapper">
        <div class="page-title">
            <div class="title">
                <h1>PROJECTS</h1>
            </div>
            @if (Auth::user())
                <div class="manage-button">
                    <button class="btn btn-default pull-right" onclick="location.href='{{ route('projects.index') }}'"><i class="glyphicon glyphicon-cog"></i></button>
                </div>
            @endif
        </div>
        <div class="page-content">
            <div class="container">
                @foreach($projects as $item)
                    <div class="project-card">
                        @if ($item->image_url) 
                            <img class="project-img" src="{{ asset('img/project/thumbnail'.$item->thumbnail) }}"/>
                        @else
                            <img class="project-img" src="{{ asset('img/no_image_available.jpg') }}" />
                        @endif
                        <div class="project-title">
                            <div class="title">
                                {{ $item->name }}
                            </div>
                            <span class="highlight teal-text">
                                {{ $item->highlight }}
                            </span>
                        </div>
                        <div class="button">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#project-modal-{{$item->id}}">Read More</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal project-modal" id="project-modal-{{$item->id}}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div id="project-carousel-{{ $item->id }}" class="carousel slide project-carousel" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            @foreach ($item->images as $image)
                                                <div class="item {{ $loop->first ? 'active' : '' }}">
                                                    <img src="{{ asset('img/project/images/'.$image->image_url) }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#project-carousel-{{ $item->id }}" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#project-carousel-{{ $item->id }}" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="project-title">
                                            {{ $item->name }}
                                        </div>
                                        <div class="project-company">
                                            {{ $item->company }}
                                        </div>
                                        <div class="project-description">
                                            {!! $item->description !!}
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default btn-sm pull-left" data-dismiss="modal">Close</button>
                                        @if ($item->link)
                                            <a href="{{ $item->link }}" class="pull-right">
                                                <button type="button" class="btn btn-warning btn-sm">
                                                    <span class="glyphicon glyphicon-new-window"></span>
                                                    Visit Site
                                                </button>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection