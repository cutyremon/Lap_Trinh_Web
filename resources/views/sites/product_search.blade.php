@extends('layouts.menu')
@section('style')
<title>Cart</title>
{{ HTML::style('css/sites/bootstrap-responsive.min.css') }}
{{ HTML::style('css/sites/cart.css') }}
@endsection

@section('content')

<div class="nastv-icon">
    <a href="#" class="navicon"></a>
    <div class="toggle">
        <ul class="toggle-menu">
            <h3>Hello {{Auth::user()->name}}</h3>
            @if(Auth::user()->level == 1)
            <li><a href="{{route('admin_home')}}">ADMIN</a></li>
            @endif
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a class="active"  href="{{route('menu')}}">Menu</a></li>
            <li><a href="{{route('showCart')}}">Your Cart</a></li>
            <li><a href="{{route('user.profile',Auth::user()->id)}}">Profile</a></li>
            <li>
                <a href="javascript:void(0)" id="logout-1">
                    Logout
                </a>
                {!! Form::open(['role'=>'form', 'route'=> 'logout', 'method'=>'POST', 'id'=>'logout-form']) !!}
                {{ csrf_field() }}
                {!! Form::close() !!}
            </li>
        </ul>
    </div>

</div>

@include('sections.menu.header')

<div>
    @foreach($product as $prd) 
    <div>
       {{ $prd->name }}
    </div>
    @endforeach
    
</div>

@include('sections.menu.footer')
@endsection

@section('script')
{{ HTML::script('js/sites/homepage.js') }}
@endsection

