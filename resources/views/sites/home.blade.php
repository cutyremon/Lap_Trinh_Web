@extends('layouts.master')
@section('style')
    {{ HTML::style('bower/animate.css/animate.css') }}
    {{ HTML::style('css/sites/icomoon.css') }}
    {{ HTML::style('bower/simple-line-icons/css/simple-line-icons.css') }}
    {{ HTML::style('bower/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}
    {{ HTML::style('bower/flexslider/flexslider.css') }}
    {{ HTML::style('bower/bootstrap/dist/css/bootstrap.css') }}
    {{ HTML::style('css/sites/style.css') }}
    {{ HTML::script('js/sites/modernizr-2.6.2.min.js') }}
@endsection

@section('content')
    @include('sections.home.header')
    <div id="fh5co-container">
        <div id="fh5co-sayings">
            <div class="container">
                <div class="row to-animate">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <blockquote>
                                    <p>&ldquo;Cooking is an art, but all art requires knowing something about the
                                        techniques and materials&rdquo;</p>
                                    <p class="quote-author">&mdash; Nathan Myhrvold</p>
                                </blockquote>
                            </li>
                            <li>
                                <blockquote>
                                    <p>&ldquo;Give a man food, and he can eat for a day. Give a man a job, and he can
                                        only eat for 30 minutes on break.&rdquo;</p>
                                    <p class="quote-author">&mdash; Lev L. Spiro</p>
                                </blockquote>
                            </li>
                            <li>
                                <blockquote>
                                    <p>&ldquo;Find something you’re passionate about and keep tremendously interested in
                                        it.&rdquo;</p>
                                    <p class="quote-author">&mdash; Julia Child</p>
                                </blockquote>
                            </li>
                            <li>
                                <blockquote>
                                    <p>&ldquo;Never work before breakfast; if you have to work before breakfast, eat
                                        your breakfast first.&rdquo;</p>
                                    <p class="quote-author">&mdash; Josh Billings</p>
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-featured" data-section="features">
            <div class="container">
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">Featured Dishes</h2>
                        <p class="sub-heading to-animate">Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="fh5co-grid">
                        <div class="fh5co-v-half to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(../img/f1.jpg)"></div>
                            <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                                <h2>Fresh Mushrooms</h2>
                                <span class="pricing">$7.50</span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                        <div class="fh5co-v-half">
                            <div class="fh5co-h-row-2 to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img"
                                     style="background-image: url(../img/f2.jpg)"></div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-left">
                                    <h2>Grilled Chiken Salad</h2>
                                    <span class="pricing">$12.00</span>
                                    <p>Far far away, behind the word mountains.</p>
                                </div>
                            </div>
                            <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img"
                                     style="background-image: url(../img/f8.jpg)"></div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-right">
                                    <h2>Cheese and Garlic Toast</h2>
                                    <span class="pricing">$4.50</span>
                                    <p>Far far away, behind the word mountains.</p>
                                </div>
                            </div>
                        </div>
                        <div class="fh5co-v-half">
                            <div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img"
                                     style="background-image: url(../img/f7.jpg)"></div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-right">
                                    <h2>Organic Egg</h2>
                                    <span class="pricing">$4.99</span>
                                    <p>Far far away, behind the word mountains.</p>
                                </div>
                            </div>
                            <div class="fh5co-h-row-2 to-animate-2">
                                <div class="fh5co-v-col-2 fh5co-bg-img"
                                     style="background-image: url(../img/f6.jpg)"></div>
                                <div class="fh5co-v-col-2 fh5co-text arrow-left">
                                    <h2>Salad with Crispy Chicken</h2>
                                    <span class="pricing">$8.50</span>
                                    <p>Far far away, behind the word mountains.</p>
                                </div>
                            </div>
                        </div>
                        <div class="fh5co-v-half to-animate-2">
                            <div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(../img/f4.jpg)"></div>
                            <div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
                                <h2>Tomato Soup with Chicken</h2>
                                <span class="pricing">$12.99</span>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-type" style="background-image: url(../img/s3.jpg);" data-stellar-background-ratio="0.5">
            <div class="fh5co-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 to-animate">
                        <div class="fh5co-type">
                            <h3 class="with-icon icon-1">Fruits</h3>
                            <p>A apple a day keeps the doctor away.</p>
                        </div>
                    </div>
                    <div class="col-md-3 to-animate">
                        <div class="fh5co-type">
                            <h3 class="with-icon icon-2">Sea food</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                    <div class="col-md-3 to-animate">
                        <div class="fh5co-type">
                            <h3 class="with-icon icon-3">Vegetables</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                    </div>
                    <div class="col-md-3 to-animate">
                        <div class="fh5co-type">
                            <h3 class="with-icon icon-4">Meat</h3>
                            <p>The only time to eat diet food is while you’re waiting for the steak to cook.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-menus" data-section="menu">
            <div class="container">
                <div class="row text-center fh5co-heading row-padded">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="heading to-animate">Food Menu</h2>
                        <p class="sub-heading to-animate">One cannot think well, love well, sleep well, if one has not
                            dined well.</p>
                    </div>
                </div>
                <div class="row row-padded" id="menu">
                    <div class="col-md-6">
                        <div class="fh5co-food-menu to-animate-2">
                            <h2 class="fh5co-dishes">Food</h2>
                            <ul>
                                @foreach($foods as $food)
                                    <li>
                                        <div class="fh5co-food-desc">
                                            <figure>
                                                <img src="../img/{{$food->avatar}}" class="img-responsive" alt="">
                                            </figure>
                                            <div class="text1">
                                                <h3><a href="{{route('product.detail',$food->id)}}">{{$food->name}}
                                                </h3></a>
                                            </div>
                                        </div>
                                        <div class="fh5co-food-pricing">
                                            ${{$food->price}}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fh5co-food-menu to-animate-2">
                            <h2 class="fh5co-drinks">Drinks</h2>
                            <ul>
                                @foreach($drinks as $drink)
                                    <li>
                                        <div class="fh5co-food-desc">
                                            <figure>
                                                <img src="../img/{{$drink->avatar}}" class="img-responsive" alt="">
                                            </figure>
                                            <div class="text1">
                                                <h3><a href="{{route('product.detail',$drink->id)}}"> {{$drink->name}}
                                                </h3></a>
                                            </div>
                                        </div>
                                        <div class="fh5co-food-pricing">
                                            ${{$drink->price}}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center to-animate-2">
                        <p><a href="{{route('menu')}}" class="btn btn-primary btn-outline">More Food Menu</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sections.home.footer')
@endsection

@section('script')
    {{ HTML::script('js/sites/jquery.min.js') }}
    {{ HTML::script('bower/easing/easing.js') }}
    {{ HTML::script('bower/bootstrap/dist/js/bootstrap.min.js') }}
    {{ HTML::script('bower/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}
    {{ HTML::script('js/sites/jquery.waypoints.min.js') }}
    {{ HTML::script('js/sites/jquery.stellar.min.js') }}
    {{ HTML::script('js/sites/jquery.flexslider-min.js') }}
    {{ HTML::script('js/sites/main.js') }}
@endsection
