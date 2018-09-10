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
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label>Email</label>
                        <input id="email" type="email" name="email" value="{{ $email or old('email') }}" autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <input type="submit" value="Send Password Reset Link" style="padding: 9px !important;"/>
                </form>
                    <a href="{{route('login')}}" style="text-align: center !important;">Back to login</a>
            </div>
        </div>
        <br>
        <div class="copyright">
            <p>© 2017 <a href="{{route('home')}}"> Foodee</a>. All rights reserved</p>
        </div>
    </div>
@endsection
