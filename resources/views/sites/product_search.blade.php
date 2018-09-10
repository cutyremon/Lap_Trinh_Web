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
            </ul>
        </div>
    </div>

    @include('sections.menu.header')
    <div>

        <div id="work" class="page">
            <div class="container">
                <div class="row fix-height-menu">
                    <section id="projects">
                        <div class="row fix-height-menu" style="margin-left: 0px !important;margin-top: 5%">
                            @foreach($product as $prd)
                                <div class="thumbex">
                                    <div class="thumbnail">
                                        <a href="../product/{{$prd->id}}">
                                            <img src="../img/{{$prd->avatar}}"/>
                                            <span>{{ $prd->name }}</span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
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

    @include('sections.menu.footer')
@endsection

@section('script')
    {{ HTML::script('bower/jquery-1.12.4/index.js')}}
    {{ HTML::script('bower/jquery-ui/jquery-ui.js') }}
    {{ HTML::script('js/sites/page_menu.js') }}
@endsection

