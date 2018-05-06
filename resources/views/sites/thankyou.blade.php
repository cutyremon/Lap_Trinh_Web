@extends('layouts.menu')
@section('style')
    <title>Thank You</title>
    {{ HTML::style('css/sites/bootstrap-responsive.min.css') }}
    {{ HTML::style('css/sites/thankyou.css') }}
@endsection

@section('content')
    <div class="text">
        <label>THANK YOU !</label>
    </div>
    <div style="width: 100%;text-align: center">
        <img src="{{asset("../img/check.png")}}" width="250px" height="250px">
    </div>
    <div style="text-align: center;font-size: 1.2em">
        <label>Your order has been send.Click <a href="{{route('menu')}}">Here </a> to go back to menu </label>
    </div>
    <div style="text-align: center;margin-top: 10px;font-size: 1.2em;">
        <label>Or check your order detail <a href="{{route('user.profile',Auth::user()->id)}}"> Here</a></label>
    </div>

@endsection

@section('script')
    {{ HTML::script('js/sites/homepage.js') }}
    {{ HTML::script('bower/bootbox/bootbox.js') }}
@endsection

