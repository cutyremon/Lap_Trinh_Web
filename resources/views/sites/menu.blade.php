@extends('layouts.menu')
@section('style')
<title>Menu</title>
@endsection
{{ HTML::style('css/sites/bootstrap-responsive.min.css') }}
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
{{-- slider --}}
<section class="slider-pages" height="360px">

    <article class="js-scrolling__page js-scrolling__page-1 js-scrolling--active">
        <div class="slider-page slider-page--left">
            <div class="slider-page--skew">
                <div class="slider-page__content">
                </div>
                <!-- /.slider-page__content -->
            </div>
            <!-- /.slider-page--skew -->
        </div>
        <!-- /.slider-page slider-page--left -->

        <div class="slider-page slider-page--right">
            <div class="slider-page--skew">
                <div class="slider-page__content" style="height: 400px">
                    <h1 class="slider-page__title slider-page__title--big" style="font-size: 1.5em;
                    line-height: 54px;
                    margin-top: 84px;
                    margin-right: 9%;">
                    One cannot think well, love well, sleep well, if one has not dined
                    well...                        </p>
                </h1>
                <!-- /.slider-page__title slider-page__title--big -->
            </div>
            <!-- /.slider-page__content -->
        </div>
        <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--right -->
</article>
<!-- /.js-scrolling__page js-scrolling__page-1 js-scrolling--active -->


<article class="js-scrolling__page js-scrolling__page-2">
    <div class="slider-page slider-page--left">
        <div class="slider-page--skew">
            <div class="slider-page__content">
                <h1 class="slider-page__title">
                    Now you are here
                </h1>
                <!-- /.slider-page__title -->
                <p class="slider-page__description">
                    Please continue scrolling
                </p>
                <!-- /.slider-page__description -->
            </div>
            <!-- /.slider-page__content -->
        </div>
        <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--left -->

    <div class="slider-page slider-page--right">
        <div class="slider-page--skew">
            <div class="slider-page__content">
            </div>
            <!-- /.slider-page__content -->
        </div>
        <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--right -->
</article>
<!-- /.js-scrolling__page js-scrolling__page-2 -->

<div class="slider-page slider-page--right">
    <div class="slider-page--skew">
        <div class="slider-page__content" style="height: 400px">
            <h1 class="slider-page__title slider-page__title--big">
                Gray & White - Skewed Slider with Scrolling
            </h1>
            <!-- /.slider-page__title slider-page__title--big -->
            <h2 class="slider-page__title">
                Start of your story
            </h2>
            <!-- /.slider-page__title -->
            <p class="slider-page__description">
                Please scroll down or press the down arrow on your keyboard
            </p>
            <!-- /.slider-page__description -->
        </div>
        <!-- /.slider-page__content -->
    </div>
    <!-- /.slider-page--skew -->
</div>
<!-- /.slider-page slider-page--right -->
</article>
<!-- /.js-scrolling__page js-scrolling__page-1 js-scrolling--active -->

<article class="js-scrolling__page js-scrolling__page-3">
    <div class="slider-page slider-page--left">
        <div class="slider-page--skew">
            <div class="slider-page__content">
            </div>
            <!-- /.slider-page__content -->
        </div>
        <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--left -->

    <div class="slider-page slider-page--right">
        <div class="slider-page--skew">
            <div class="slider-page__content">
                <h1 class="slider-page__title">
                    Final is just the beginning
                </h1>
                <!-- /.slider-page__title -->
                <p class="slider-page__description">
                    Feel free to follow me on <a class="slider-page__link" href="https://twitter.com/WispProxy"
                    target="_blank">Twitter</a>
                    and check of <a class="slider-page__link" href="https://codepen.io/WispProxy/pens/public"
                    target="_blank">my other works</a>
                </p>
                <!-- /.slider-page__description -->
            </div>
            <!-- /.slider-page__content -->
        </div>
        <!-- /.slider-page--skew -->
    </div>
    <!-- /.slider-page slider-page--right -->
</article>
<!-- /.js-scrolling__page js-scrolling__page-3 -->

</section>
<!-- /.slider-pages -->

<div class="tabs">
    <div class="tab-2">
        <label for="tab2-1" class="title-label">FOOD</label>
        <input id="tab2-1" name="tabs-two" type="radio" checked="checked" style="width: 80%;margin: auto">
        <div>
            <div id="work" class="page">
                <div class="container">
                    <div class="row fix-height-menu">
                        <section   id="projects">
                            <div class="row fix-height-menu">
                                <div class="thumbex" v-for="food in foods">
                                    <div class="thumbnail">
                                        <a v-bind:href="'../product/'+food.id">
                                            <img v-bind:src="url+food.avatar"/>
                                            <span>@{{ food.name }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
        </div>
    </div>
    <div class="tab-2">
        <label for="tab2-2" class="title-label">DRINK</label>
        <input id="tab2-2" name="tabs-two" type="radio" style="width: 80%; margin: auto;">
        <div>
            <div id="work" class="page">
                <div class="container">
                    <div class="row fix-height-menu">
                        <section id="projects">
                            <div class="container">
                                <div class="thumbex" v-for="drink in drinks">
                                    <div class="thumbnail"><a v-bind:href="'../product/'+drink.id"> <img
                                        v-bind:src="url+drink.avatar"/><span>@{{ drink.name }}</span></a>
                                    </div>
                                </div>
                            </div>
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
        </div>
    </div>
</div>
<div id="about" class="page-alternate">
    <div class="container">
        <div class="row">
            <div class="span4 profile">
                <div class="image-wrap">
                    <div class="hover-wrap">
                        <span class="overlay-img"></span>
                        <span class="overlay-text-thumb">CTO/Founder</span>
                    </div>
                    <img src="../img/cherf1.png" alt="John Doe">
                </div>
                <h3 class="profile-name">John Doe</h3>
                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac
                    augue at erat <a href="#">hendrerit dictum</a>.
                    Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus
                    diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                    himenaeos.</p>
                </div>
                <div class="span4 profile">
                    <div class="image-wrap">
                        <div class="hover-wrap">
                            <span class="overlay-img"></span>
                            <span class="overlay-text-thumb">Creative Director</span>
                        </div>
                        <img src="../img/cherf2.jpg" alt="Jane Helf">
                    </div>
                    <h3 class="profile-name">Jane Helf</h3>
                    <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac
                        augue at erat <a href="#">hendrerit dictum</a>.
                        Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus
                        diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                        himenaeos.</p>
                        <div class="social">
                            <ul class="social-icons">
                                <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                                <li><a href="#"><i class="font-icon-social-email"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="span4 profile">
                        <div class="image-wrap">
                            <div class="hover-wrap">
                                <span class="overlay-img"></span>
                                <span class="overlay-text-thumb">Lead Designer</span>
                            </div>
                            <img src="../img/cherf6.jpg" alt="Joshua Insanus">
                        </div>
                        <h3 class="profile-name">Joshua Insanus</h3>
                        <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac
                            augue at erat <a href="#">hendrerit dictum</a>.
                            Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus
                            diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                            himenaeos.</p>
                            <div class="social">
                                <ul class="social-icons">
                                    <li><a href="#"><i class="font-icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="font-icon-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="font-icon-social-google-plus"></i></a></li>
                                    <li><a href="#"><i class="font-icon-social-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('sections.menu.footer')
            @endsection

            @section('script')
            {{ HTML::script('bower/jquery-1.12.4/index.js')}}
            {{ HTML::script('bower/jquery-ui/jquery-ui.js') }}
            {{ HTML::script('js/sites/page_menu.js') }}
            {{ HTML::script('js/sites/product_comment.js') }}
            @endsection
