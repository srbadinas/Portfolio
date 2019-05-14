@extends('main')

@section('title', "Register User")

@section('content')

<div class="register-page col-md-12">
    <div class="col-md-4 col-md-offset-4 register">
        <div class="col-md-12 header">
            <h3>Register</h3>
        </div>
        <div class="col-md-12 wrapper">
            @include('partials._messages')
            {!! Form::open(['route' => 'register', 'method' => 'post', 'class' => 'form-horizontal', 'files' => true]) !!}
                <div class="form-group">
                    <div class="col-md-12">
                    {{ Form::label('username', 'Username:', ['class' => 'control-label']) }}
                    {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Enter Username', 'required' => '']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                    {{ Form::label('password', 'Password:', ['class' => 'control-label']) }}
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter Password', 'required' => '']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                    {{ Form::label('password_confirmation', 'Confirm Password:', ['class' => 'control-label']) }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Enter Confirm Password', 'required' => '']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                    {{ Form::label('email', 'Email Address:', ['class' => 'control-label']) }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address', 'required' => '']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                    {{ Form::label('firstname', 'Firstname:', ['class' => 'control-label']) }}
                    {{ Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'Enter Firstname', 'required' => '']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                    {{ Form::label('lastname', 'Lastname:', ['class' => 'control-label']) }}
                    {{ Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Enter Lastname', 'required' => '']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                    {{ Form::label('career', 'Career:', ['class' => 'control-label']) }}
                    {{ Form::text('career', null, ['class' => 'form-control', 'placeholder' => 'Enter Career', 'required' => '']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                    {{ Form::label('contact_number', 'Contact Number:', ['class' => 'control-label']) }}
                    {{ Form::text('contact_number', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Number', 'required' => '']) }}
                    </div>
                </div>
                <div class="form-group">
                        <div class="col-md-12">
                        {{ Form::label('picture', 'Picture:', ['class' => 'control-label']) }}
                        {{ Form::file('picture') }}
                        </div>
                    </div>
                <div class="form-group">
                    <div class="col-md-12">
                        {{ Form::submit('Register', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
