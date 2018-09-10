@extends('layouts.menu')
@section('style')
    <title>Checkout</title>
    {{ HTML::style('css/sites/bootstrap-responsive.min.css') }}
    {{ HTML::style('css/sites/checkout.css') }}
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
            </ul>
        </div>

    </div>

    @include('sections.menu.header')
    <div class="container wrapper">
        <div class="row cart-body" style="margin-top: 5%;min-height: 576px;">
            <div class="form-horizontal">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info" id="review">
                        <div class="panel-heading">
                            Review Order
                            <div class="pull-right">
                                <small><a class="afix-1" href="{{route('showCart')}}">Back To Cart</a></small>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php
                            $sum = 0;
                            ?>

                            @foreach($products as $product)
                                <div class="form-group">
                                    <div class="col-sm-3 col-xs-3">
                                        <a href="{{route('product.detail',$product->product_id)}}"> <img
                                                    class="img-responsive"
                                                    src="{{asset("../img/$product->avatar")}}"/>
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="col-xs-12 prdName"><a
                                                    href="{{route('product.detail',$product->product_id)}}">{{$product->name}}</a>
                                        </div>
                                        <div class="col-xs-12">
                                            <small>Quantity: <span>{{$product->quantity}}</span></small>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3 text-right">
                                        <h6><span>$</span>{{$product->quantity * $product->price}}</h6>
                                    </div>
                                </div>

                                <?php
                                $sum += $product->quantity * $product->price;
                                ?>

                                <div class="form-group">
                                    <hr/>
                                </div>
                            @endforeach
                            <div class="form-group">
                                <div class="col-xs-12" style="font-size: 1.2em;font-weight: bold;">
                                    <strong>Order Total</strong>
                                    <div class="pull-right"><span>$</span><span>{{$sum}}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <form action="{{route('chSubmit',$sum)}}" method="POST">
                        {{ csrf_field() }}
                        <div class="panel panel-info">
                            <div class="panel-heading">Address</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <h4>Shipping Address</h4>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Name:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="name" value="{{$user->name}}"
                                               required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Address:</strong></div>
                                    <div class="col-md-12">
                                        <input type="text" name="address" class="form-control"
                                               value="{{$user->address}}" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Phone Number:</strong></div>
                                    <div class="col-md-12"><input type="text" name="phone" class="form-control"
                                                                  value="{{$user->phone}}" required/></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Email Address:</strong></div>
                                    <div class="col-md-12"><input type="text" name="email" class="form-control"
                                                                  value="{{$user->email}}" readonly="readonly"/></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12"><strong>Payment Method:</strong></div>
                                    <div class="col-md-12">
                                        <label><input type="radio" name="option" value="Yes" id="cash"/>Cash</label>
                                        <label style="margin-left: 20px"><input type="radio" name="option" value="No"
                                                                                id="card"/>Credit Card</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--SHIPPING METHOD END-->
                        <!--CREDIT CART PAYMENT-->
                        <div class="panel panel-info" id="credit-card" style="display: none">
                            <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Secure
                                Payment
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Card Type:</strong></div>
                                    <div class="col-md-12">
                                        <select id="CreditCardType" name="CreditCardType" class="form-control">
                                            <option value="5">Visa</option>
                                            <option value="6">MasterCard</option>
                                            <option value="7">American Express</option>
                                            <option value="8">Discover</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                                    <div class="col-md-12"><input id="card_num" type="text" class="form-control"
                                                                  name="card_number"
                                                                  value=""/></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12"><strong>Card CVV:</strong></div>
                                    <div class="col-md-12"><input id="card_cvv" type="text" class="form-control"
                                                                  name="card_code"
                                                                  value=""/></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <strong>Expiration Date</strong>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="month" id="month">
                                            <option value="">Month</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <select class="form-control" name="year" id="year">
                                            <option value="">Year</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <span>Pay secure using your credit card.</span>
                                    </div>
                                    <div class="col-md-12">
                                        <ul class="cards">
                                            <li class="visa hand">Visa</li>
                                            <li class="mastercard hand">MasterCard</li>
                                            <li class="amex hand">Amex</li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success"
                                        style="width: 100%;font-size: 1.2em;">
                                    Place Order
                                </button>
                            </div>
                        </div>
                        <!--CREDIT CART PAYMENT END-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('sections.menu.footer')
@endsection

@section('script')
    {{ HTML::script('bower/jquery-1.12.4/index.js')}}
    {{ HTML::script('js/sites/page_menu.js') }}
    {{ HTML::script('bower/jquery-3.2.1.min/index.js') }}

    <script>
        $('#cash').prop('checked', true);
        $card = $('#card');
        $cash = $('#cash');
        $('input[type="radio"]').on('click change', function (e) {
            if ($card.is(":checked")) {
                $("#credit-card").slideDown("slow");
                $("#card_num").attr("required", "required");
                $("#card_cvv").attr("required", "required");
                $("#month").attr("required", "required");
                $("#year").attr("required", "required");
            }
            if ($cash.is(":checked")) {
                $("#card_num").removeAttr('required');
                $("#card_cvv").removeAttr('required');
                $("#month").removeAttr('required');
                $("#year").removeAttr('required');
                $("#credit-card").slideUp("slow");
            }
        });
    </script>
@endsection

