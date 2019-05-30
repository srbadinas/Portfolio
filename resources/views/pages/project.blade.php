@extends('main')

@section('title', "Projects")

@section('content')
    <div class="page-wrapper">
        <div class="page-title">
            <div class="title">
                <h1>Projects</h1>
            </div>
            @if (Auth::user())
                <div class="manage-button">
                    <button class="btn btn-outline-light float-right" onclick="location.href='{{ route('projects.index') }}'"><i class="fa fa-cog"></i></button>
                </div>
            @endif
        </div>
        <div class="page-content">
            <div class="container">
                @foreach($projects as $item)
                    <div class="project-card">
                        @if ($item->thumbnail) 
                            <img class="project-img" src="{{ asset('img/project/thumbnail/'.$item->thumbnail) }}"/>
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
                            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#project-modal-{{$item->id}}">Read More</button>
                        </div>
                        <!-- Modal -->
                        <div class="modal project-modal" id="project-modal-{{$item->id}}" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div id="project-carousel-{{ $item->id }}" class="carousel slide project-carousel carousel-fade" data-ride="carousel">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            @foreach ($item->images as $image)
                                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                    <img src="{{ asset('img/project/images/'.$image->image) }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        
                                        <!-- Controls -->
                                        <a class="carousel-control-prev" href="#project-carousel-{{ $item->id }}" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#project-carousel-{{ $item->id }}" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                                        <button type="button" class="btn btn-dark btn-sm float-left" data-dismiss="modal">Close</button>
                                        @if ($item->link)
                                            <a href="{{ $item->link }}" class="float-right">
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