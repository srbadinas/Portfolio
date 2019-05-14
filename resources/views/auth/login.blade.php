@extends('main')

@section('title', "Login")

@section('content')
<div class="login-page col-md-12">
    <div class="col-md-4 col-md-offset-4 login">
        <div class="col-md-12 header">
            <h3>Login</h3>
        </div>
        @include('partials._messages')
        
        <div class="col-md-12 wrapper">
            {!! Form::open(['route' => 'login', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
                            {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Enter Username', 'required' => '']) }}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
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