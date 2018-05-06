@extends('layouts.menu')
@section('style')
    <title>Menu</title>
@endsection
{{ HTML::style('css/sites/bootstrap-responsive.min.css') }}
{{ HTML::style('bower/jquery-ui/themes/base/jquery-ui.css') }}
@section('content')

    <div class="nastv-icon">
        <a href="#" class="navicon"></a>
        <div class="toggle">
            <ul class="toggle-menu">
                @if (Auth::guest())
                        <li><a href="{{route('home')}}">Home</a></li>
                    <li><a class="active" href="{{route('menu')}}">Menu</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <h3>Hello {{Auth::user()->name}}</h3>
                    @if(Auth::user()->level == 1)
                        <li><a href="{{route('admin_home')}}">ADMIN</a></li>
                    @endif
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a class="active" href="{{route('menu')}}">Menu</a></li>
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
                @endif
            </ul>
        </div>
    </div>
    @include('sections.menu.header')
    <div id="work" class="page">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title">Show Food </h2>
                    </div>
                </div>
            </div>
            <div class="row fix-height-menu">
                <section id="projects">
                    <ul id="thumbs">
                        <li v-for="food in foods" class="item-thumbs span3 design">
                            <h1 class="name-product">@{{ food.name }}</h1>
                            <h3 class="price-product text-right">$@{{food.price | currency('',0)}} <sup>đ</sup></h3>
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" v-bind:href="'http://localhost:8000/product/'+food.id">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb btn_mua">
                                <div class="btn"><b>Mua Ngay</b></div>
                            </span>
                            </a>
                            <img v-bind:src="url+food.avatar" alt="">
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <div class="modal" id="info-product" role="dialog">
        <div class="modal-dialog">

        </div>

    </div>
    <div class="text-center bottom-pagination ">
        <nav>
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li v-for="pageNo in last_page_food "><a @click="show_food(pageNo)">@{{ pageNo }}</a></li>
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        </ul>
    </nav>
    </div>
    <div id="work" class="page">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="title-page">
                        <h2 class="title">Show Drink </h2>
                        <h3 class="title-description">Check Out Our Projects on <a href="#">Dribbble</a>.</h3>
                    </div>
                </div>
            </div>
            <div class="row fix-height-menu" >
                <section id="projects">
                    <ul id="thumbs">
                        <li v-for="drink in drinks" class="item-thumbs span3 design">
                            <h1 class="name-product">@{{ drink.name }}</h1>
                            <h3 class="price-product text-right">$@{{drink.price| currency('',0)}} <sup>đ</sup></h3>
                            <a class="hover-wrap fancybox" data-fancybox-group="gallery" v-bind:href="'http://../product/'+drink.id">
                                <span class="overlay-img"></span>
                                <span class="overlay-img-thumb btn_mua">
                                <div class="btn"><b>Mua Ngay</b></div>
                            </span>
                            </a>
                            <img v-bind:src="url+drink.avatar">
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
    <div class="text-center bottom-pagination ">
        <nav>
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li v-for="pageNo in last_page_drink "><a @click="show_drink(pageNo)">@{{ pageNo }}</a></li>
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
        </ul>
    </nav>
    </div>
    @include('sections.menu.footer')
@endsection

@section('script')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
    {{ HTML::script('bower/jquery-1.12.4/index.js')}}
    {{ HTML::script('bower/jquery-ui/jquery-ui.js') }}
    {{ HTML::script('js/sites/homepage.js') }}
    {{ HTML::script('js/sites/page_menu.js') }}
    {{ HTML::script('js/sites/product_comment.js') }}
@endsection

