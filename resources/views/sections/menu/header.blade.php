<div class="header-menu"></div>
<div class="header-first">
    <div class="col-md-3">
        <div class="title" id="headdddd">
            <a href={{route('home')}}><span>F</span><img src="{{ asset('img/oo.png') }}" alt=""><img
                        src="{{asset('img/oo.png')}}" alt="">dee</a></h1>
        </div>

        </div>
        <div class="col-md-6 header-navbar">
        <form action="{{ route('search','$name_product') }}" method="post" accept-charset="utf-8">
        {{  csrf_field() }}
            <input class="flipkart-navbar-input col-xs-11 " id="search_product" type="text" name="name_product"
            placeholder="Search for Products, Brands and more" name="">
            <button class="flipkart-navbar-button col-xs-1" type="submit">
                {{ __('Search') }}
            </button>
        </form>
        </div>
        <div class="col-md-1 phone-navbar">
            <nav class="nav-right pull-right">
                <ul class="nav-top1">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>
                        <a href=""> {{ __('1900 8193') }}</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-navbar-btn">
            <a href="{{route('showCart')}}" class="cart-button">
                @if(Auth::user())
                <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i><span class="item-number"
                style="font-size: 20px;margin-left: 5px;">({{Auth::user()->cart}}
                )</span>
                @else
                <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i><span class="item-number"
                style="font-size: 20px;margin-left: 5px;">0</span>
                @endif
            </a>
        </div>
    </div>
