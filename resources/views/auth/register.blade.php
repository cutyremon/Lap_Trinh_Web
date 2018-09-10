@extends('layouts.app')

@section('content')
    <div class="agile-login">
        <div class="wrapper">
            <h2>Register</h2>
            <div class="w3ls-form">
                {!! Form::open(['role' => 'form','method' =>'POST','route'=>'register']) !!}
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label>Name</label>
                    {!! Form::input('text','name',old('name'),['id'=>'name','autofocus'=>'true']) !!}
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email</label>
                    {!! Form::input('email','email',old('email'),['id'=>'email','autofocus'=>'true']) !!}
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label>Password</label>
                    {!! Form::input('password','password',null,['id'=>'password']) !!}

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label>Confirm Password</label>
                    <input id="password-confirm" type="password" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                </div>

                <input type="submit" value="Register"/>
                {!! Form::close() !!}
            </div>
            <div class="agile-icons">
                <a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                <a href="{{route('facebook')}}"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-pinterest-p"></span></a>
            </div>
            Already Have An Account ?
            <a href="{{route('login')}}">Login Here</a>
        </div>
        <br>
        <div class="copyright">
            <p>© 2017 <a href="{{route('home')}}"> Foodee</a>. All rights reserved</p>
        </div>
    </div>
@endsection
