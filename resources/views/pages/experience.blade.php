@extends('main')

@section('title', "Experiences")

@section('content')
<div class="page-wrapper">
    <div class="page-title">
        <h1>Experiences</h1>
    </div>
    <div class="page-content">
        <div class="container">
            @foreach ($experiences as $item)
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="image">
                                @if ($item->company_url)
                                    <a href="{{ $item->company_url }}">
                                        <img src="{{ str_replace('public','', $item->image_url) }}" />
                                    </a>
                                @else
                                    <img src="{{ str_replace('public','', $item->image_url) }}" />
                                @endif
                            </div>
                            <div class="company">
                                @if ($item->company_url)
                                    <a href="{{ $item->company_url }}">
                                        {{ $item->company_name }}
                                    </a>
                                @else
                                    {{ $item->company_name }}
                                @endif
                            </div>
                            <div class="job-title">
                                {{ $item->job }}
                            </div>
                        </div>
                        <div class="card-body">
                            {!! $item->description !!}
                        </div>
                        <div class="card-footer">
                            <div class="employment-date">
                                {{ date('F Y', strtotime($item->date_from)) }} - {{ date('F Y', strtotime($item->date_to)) }} | {{ $item->address }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
