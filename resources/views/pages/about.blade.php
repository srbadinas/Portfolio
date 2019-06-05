@extends('main')

@section('title', "About Me")

@section('content')
    <div class="page-wrapper">
        <div class="page-title">
            <div class="title">
                <h1>About</h1>
            </div>
            @if (Auth::user())
                <div class="manage-button">
                    <button class="btn btn-outline-light float-right"><i class="fa fa-cog"></i></button>
                </div>
            @endif
        </div>
        <div class="page-content">
            <div class="about">
                <div class="intro">
                    <div class="content text-fade-in">
                        Hello. I'm Sebastian Badinas, a Web Developer from Philippines. Feel free to look around!
                    </div>
                </div>
                <div class="body text-fade-in animation-delay-1">
                    I have a deep passion in programming and I am craving for new knowledge about it. I always getting excited whenever I learned new things whether it's a tool/plugins that would make my work easily or a new programming language, coding structure and a framework which will be added to my skillset. I even watch tutorials and read documentations about programming in some of my free time. I am currently looking for a job overseas as a Web Developer.
                </div>
            </div>
        </div>
    </div>
@endsection
