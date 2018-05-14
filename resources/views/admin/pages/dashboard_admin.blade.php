@extends('admin.layout.master')
@section('style')
 {{ HTML::style('bower/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}
@endsection
@section('content')
    <div class="content-wrapper" id="thongke">
        <section class="content-header">
            <h1>
                Report
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="{{ route('manage.order') }}">
                            <span class="info-box-icon bg-green">
                                <i class="ion ion-ios-cart-outline"></i>
                            </span>
                        </a>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Order</span>
                            <span class="info-box-number">{!! $totalorder !!}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="{{ route('manage.customer') }}">
                            <span class="info-box-icon bg-yellow">
                                <i class="ion ion-ios-people-outline"></i>
                            </span>
                        </a>
                        <div class="info-box-content">
                            <span class="info-box-text"> Total Members</span>
                            <span class="info-box-number">{!! $totaluser !!}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <a href="" title="">
                        <span class="info-box-icon bg-red"><i class="fa fa-handshake-o"></i></span>
                        </a>
                        <div class="info-box-content">
                            <span class="info-box-text">Customers Potential</span>
                            <span class="info-box-number">120</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Recap Report</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tab-content" id="thongke1">
                                        <div id="day">
                                            <p class="text-center">
                                            <strong>{{ __('Day Report') }} </strong>
                                            </p>
                                            <p class="text-center">tube continue ..</p>

                                             <div id="bar-chart"></div>
                                        </div>
                                        <div id="month">
                                            <p class="text-center">
                                            <strong>{{ __('Month Report') }} </strong>
                                            </p>
                                            <p class="text-center">tube continue ..</p>
                                             <div id="bar-chart1"></div>
                                        </div>
                                        <div id="year">
                                            <p class="text-center">
                                            <strong>{{ __('Year Report') }} </strong>
                                            </p>
                                            <p class="text-center">tube continue ..</p>

                                             <div id="bar-chart2"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>Top Products</strong>
                                    </p>

                                    <div class="progress-group" v-for="prd in product">
                                        <span class="progress-text">@{{prd.name}}</span>
                                        <span class="progress-number"><b>@{{prd.so_luong*100/sum | currency('','')}}%</b></span>
                                        <div class="progress sm">
                                            <div v-if="prd.so_luong*100/sum>=50" class="progress-bar progress-bar-aqua" v-bind:style="{ width: prd.so_luong*100/sum +'%' }"></div>
                                            <div v-if="prd.so_luong*100/sum>=40 && prd.so_luong*100/sum<50" class="progress-bar progress-bar-red" v-bind:style="{ width: prd.so_luong*100/sum + '%' }"></div>
                                            <div v-if="prd.so_luong*100/sum>=30 && prd.so_luong*100/sum<40" class="progress-bar progress-bar-yellow" v-bind:style="{ width: prd.so_luong*100/sum + '%' }"></div>
                                            <div v-if="prd.so_luong*100/sum>=20 && prd.so_luong*100/sum<30" class="progress-bar progress-bar-green" v-bind:style="{ width: prd.so_luong*100/sum + '%' }"></div>
                                            <div v-if="prd.so_luong*100/sum<20" class="progress-bar progress-bar-blue" v-bind:style="{ width: prd.so_luong*100/sum + '%' }"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <div class="description-block border-right">
                                        <h5 class="description-header"> $ @{{tongtien}}</h5>
                                        <span class="description-text">TOTAL REVENUE</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="description-block border-right">
                                        <h5 class="description-header">$ @{{tien_ngay}}</h5>
                                        <span class="description-text">TOTAL COST</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    {{ HTML::script('js/admin/thongke.js') }}
@endsection
