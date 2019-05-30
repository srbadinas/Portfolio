@extends('main')

@section('title', "Login")

@section('content')
<div class="login-page col-md-12">
    <div class="col-md-4 offset-md-4 login">
        <div class="col-md-12 header">
            <h3>Login</h3>
        </div>
        @include('partials._messages')
        
        <div class="col-md-12 wrapper">
            {!! Form::open(['route' => 'login', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user"></i></div>
                            </div>
                            {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Enter Username', 'required' => '']) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-lock"></i></div>
                            </div>
                            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Enter Password', 'required' => '']) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        {{ Form::submit('Login', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection