@extends('layouts.app')

@section('content')
    <div class="agile-login">
        <div class="wrapper">
            <h2>Reset Password</h2>
            <div class="w3ls-form">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email</label>
                        <input id="email" type="email" name="email" value="{{ $email or old('email') }}" required
                               autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>Password</label>
                        <input id="password" type="password" name="password">
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

                    <input type="submit" value="Reset Password"/>
                </form>
            </div>
        </div>
        <br>
        <div class="copyright">
            <p>© 2017 <a href="{{route('home')}}"> Foodee</a>. All rights reserved</p>
        </div>
    </div>
@endsection
