@extends('main')

@section('title', "Skills")

@section('content')
    <div class="page-wrapper">
        <div class="page-title">
            <h1>SKILLS</h1>
        </div>
        <div class="page-content">
            <div class="container">
                @foreach ($skill_types as $item)
                <div class="card">
                    <div class="card-content">
                        <div class="card-header">
                            @if ($item->image) 
                                <div class="image">
                                    <img src="{{ asset('img/skill_type/'. $item->image) }}" />
                                </div>
                            @endif
                            <div class="title">
                                {{ $item->name }}
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="skill">
                                @foreach ($item->skills as $_item)
                                <li>
                                    {{ $_item->name }}
                                    {{-- <div class="skill-container">
                                        <div class="skill-bar-container">
                                            <div class="skill-bar" style="width: {{ $_item->rate }}%">
                                                <div class="skill">
                                                    {{ $_item->name }} 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-rate">
                                            {{ $_item->rate }}%
                                        </div>
                                    </div> --}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                    </div>
                </div>
                @endforeach 
            </div>    
        </div>
    </div>
@endsection