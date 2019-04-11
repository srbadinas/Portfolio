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
                            <div class="image">
                                <img src="{{ str_replace('public','', $item->image_url) }}" />
                            </div>
                            <div class="title">
                                {{ $item->name }}
                            </div>
                        </div>
                        <div class="card-body">
                            <ul>
                                @foreach ($item->skills as $_item)
                                <li>
                                    <div class="skill-container">
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
                                    </div>
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