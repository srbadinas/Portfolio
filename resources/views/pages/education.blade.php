@extends('main')

@section('title', "Education")

@section('content')
<div class="page-wrapper">
    <div class="page-title">
        <h1>Education</h1>
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
                            <div class="school-address">
                                {{ $item->address }}
                            </div>
                            @if ($item->course)
                                <div class="course">
                                    Course: {{ $item->course }}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="education-date">
                                {{ date('F Y', strtotime($item->date_from)) }} - {{ date('F Y', strtotime($item->date_to)) }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
