@extends('layouts.menu')
@section('style')
    <title>Product</title>
    {{ HTML::style('/css/sites/product_detail.css') }}
    {{ HTML::style('/bower/bootstrap-star-rating/css/star-rating.css') }}
    {{ HTML::style('/bower/bootstrap-star-rating/themes/krajee-svg/theme.css')}}
@endsection

@section('content')
    <div class="nastv-icon">
        <a href="#" class="navicon"></a>
        <div class="toggle">
            <ul class="toggle-menu">
                @if (Auth::guest())
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('menu')}}">Menu</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <h3>Hello {{Auth::user()->name}}</h3>
                    @if(Auth::user()->level == 1)
                        <li><a href="{{route('admin_home')}}">ADMIN</a></li>
                    @endif
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('menu')}}">Menu</a></li>
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

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper">
                        <div class="preview col-md-7">
                            <div id='ninja-slider' style="border-radius: 15px">
                                <div>
                                    <div class="slider-inner">
                                        <ul id="aaa">
                                            @if($prd_img->count() > 0 )
                                                @foreach($prd_img as $pi)
                                                    <li><a class="ns-img" href="/img/{!! $pi->image !!}"></a></li>
                                                @endforeach
                                            @else
                                                <li>
                                                    <a class="ns-img" href="{!! asset('img/no_image.jpg') !!}"></a>
                                                </li>
                                            @endif
                                        </ul>
                                        <div class="fs-icon" title="Expand/Close"></div>
                                    </div>
                                    <div id="thumbnail-slider">
                                        <div class="inner">
                                            <ul>
                                                @if($prd_img->count() > 0)
                                                    @foreach($prd_img as $pi)
                                                        <li>
                                                            <a class="thumb" href="/img/{!! $pi->image !!}"></a>
                                                        </li>
                                                    @endforeach
                                                @else
                                                    <li>
                                                        <a class="thumb" href="{!! asset('img/no_image.jpg') !!}"></a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details col-md-5">
                            <div class="row">
                                <h3 class="product-title">{!! $prd_detail->name !!}</h3>
                            </div>
                            <div class="row starr">
                                <input id="input-id" type="text" class="rating" data-min="0"
                                       data-max="5"
                                       data-size="xs" data-step=0.5 value="{!! $prd_detail->rated !!}"
                                       title="">
                                <h4>This product is rated {!! $prd_detail->rated !!} stars</h4>
                            </div>
                            <div class="row">
                                <p class="product-description">{!! $prd_detail->description !!}</p>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <h4 class="price">current price: <span>{!! $prd_detail->price !!}
                                        </span><i class="fa fa-dollar"></i>
                                    </h4>
                                </div>
                                <div class="col-md-5">
                                    <span>Avability :</span>
                                    @if($prd_detail->status == 0)
                                        <span style="color: green">In stock</span>
                                    @else
                                        <span style="color: red">Out stock</span>
                                    @endif
                                </div>
                            </div>
                            <form action="{{route('addToCart',$prd_id)}}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-2"
                                         style="padding-left: -10px">
                                        <p>Quantity</p>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="number" class="quantity" name="quantity" min="1" value="1">
                                    </div>
                                </div>
                                <div class="row">
                                </div>
                                <div class="row">
                                    <div class="action">
                                        <button class="add-to-cart btn btn-default" type="submit"
                                                style="margin-top: 20px;">add to cart
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="row" id="comment_1">--}}
        <div class="row">
            <div class="col-sm-3">
                <div class="rating-block">
                    <h4>Average user rating</h4>
                    <h2 class="bold padding-bottom-7">4.3
                        <small>/ 5</small>
                    </h2>
                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star " style="font-size:13px;" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" style="font-size:13px;" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" style="font-size:13px;" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" style="font-size:13px;" aria-hidden="true"></span>
                    </button>
                    <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                        <span class="glyphicon glyphicon-star" style="font-size:13px;" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <h4>Rating breakdown</h4>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"
                                                                       style="font-size:13px;"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5"
                                 aria-valuemin="0" aria-valuemax="5" style="width: 1000%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">1</div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"
                                                                       style="font-size:13px;"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4"
                                 aria-valuemin="0" aria-valuemax="5" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">1</div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"
                                                                       style="font-size:13px;"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3"
                                 aria-valuemin="0" aria-valuemax="5" style="width: 60%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">0</div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"
                                                                       style="font-size:13px;"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2"
                                 aria-valuemin="0" aria-valuemax="5" style="width: 40%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">0</div>
                </div>
                <div class="pull-left">
                    <div class="pull-left" style="width:35px; line-height:1;">
                        <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"
                                                                       style="font-size:13px;"></span></div>
                    </div>
                    <div class="pull-left" style="width:180px;">
                        <div class="progress" style="height:9px; margin:8px 0;">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1"
                                 aria-valuemin="0" aria-valuemax="5" style="width: 20%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right" style="margin-left:10px;">0</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="comment_1">
                @include("sites.comment");
            </div>
            @if(Auth::check())
                <form id="postComment" action="{{route('addComment')}}" method="get">
                    <!-- Form input fields here (do not forget your name attributes). -->
                    <div>

                        <ul class="list-group" style="margin-right: 502px !important;">

                            <li class="list-group-item">
                                {{--<i id="styleId" name="styleId" value="{{$showStyle->id}}"></i>--}}
                                <input type="hidden" id="product_1" name="product_1" value="{{$prd_detail->id}}">

                                <input type="text" style="width: 100%; padding: 10px;" id="comment_text" name="comment_text"
                                       placeholder="Add comment..."/>
                            </li>
                            <button type="submit" class="comment-button">addComment</button>
                        </ul>
                    </div>
                </form>
            @endif

        </div>

        <div class="row">
            <div class="product-other">
                <div class="row">
                    <hr>
                    <div class="product-other-title">
                        <h2>Similar Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="product-other-content">
                        @foreach($prd_similar as $ps)
                            <div class="col-md-3 col-xs-2">
                                <a href="{{ route('product.detail', [ 'id' => $ps->id ]) }}">
                                    <img src="/img/{!! $ps->avatar !!}">
                                    <h3>{!! $ps->name !!}</h3>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sections.menu.footer')
@endsection

@section('script')
    {{ HTML::script('/js/sites/homepage.js') }}
    {{ HTML::script('/js/sites/product_detail.js') }}
    {{ HTML::script('/js/sites/star-rating.js')}}
    {{ HTML::script('/bower/bootstrap-star-rating/js/locales/LANG.js')}}
    {{ HTML::script('/bower/bootstrap-star-rating/themes/krajee-svg/theme.js')}}
    {{ HTML::script('/js/sites/product_comment.js',['type' => 'text/javascript'])}}
@endsection

