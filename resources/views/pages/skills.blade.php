@extends('main')

@section('title', "Skills")

@section('content')
    <div class="page-wrapper">
        <div class="page-title">
            <h1>SKILLS</h1>
        </div>
        <div class="page-content">
            @foreach ($skills as $item)
                <div class="card">
                    <div class="card-content">
                        <div class="title">
                            {{ $item->name }}
                        </div>
                    </div>
                </div>
            @endforeach     
        </div>
    </div>
@endsection