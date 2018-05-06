<div class="header">
    <div class="container" style="width: 88% !important;">
        <div class="logo animated wow pulse animated" data-wow-duration="1000ms" data-wow-delay="500ms"
             style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: pulse;width: 30%;">
            <h1><a href={{route('home')}}><span>F</span><img src="img/oo.png" alt=""><img src="img/oo.png"
                                                                                          alt="">dee</a></h1>
        </div>
        <div class="nav-icon">
            <a href="#" class="navicon"></a>
            <div class="toggle">
                <ul class="toggle-menu">
                    @if (Auth::guest())
                        <li><a class="active" href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('menu')}}">Menu</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <h3>Hello {{Auth::user()->name}}</h3>
                        @if(Auth::user()->level == 1)
                            <li><a href="{{route('admin_home')}}">ADMIN</a></li>
                        @endif
                        <li><a class="active" href="{{route('home')}}">Home</a></li>
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
        <div class="clearfix"></div>
    </div>
    <div class="banner" style="margin-top: 8%">
        <h4 class="animated wow fadeInLeft" data-wow-duration="2000ms" data-wow-delay="100ms">Hello And Welcome To
            Food</h4>
        <a class="scroll down" href="#fh5co-container"><img src="img/down.png" alt=""></a>
    </div>
</div>
