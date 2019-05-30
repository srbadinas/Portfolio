@extends('main')

@section('title', "Education")

@section('content')
<div class="page-wrapper">
    <div class="page-title">
        <div class="title">
            <h1>Education</h1>
        </div>
        @if (Auth::user())
            <div class="manage-button">
                <button class="btn btn-outline-light float-right"><i class="fa fa-cog"></i></button>
            </div>
        @endif
    </div>
    <div class="page-content">
        <div class="container">
            @foreach ($education as $item)
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="school">
                                {{ $item->school }}
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div class="school-address">
                                {{ $item->address }}
                            </div>
                            @if ($item->course)
                                <div class="course">
                                    Course: {{ $item->course }}
                                </div>
                            @endif
                        </div>
                        <div class="card-footer">
                            <div class="education-date">
                                Graduated: {{ date('Y', strtotime($item->date_from)) }} - {{ date('Y', strtotime($item->date_to)) }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
