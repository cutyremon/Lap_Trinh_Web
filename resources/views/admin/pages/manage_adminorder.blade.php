@extends('admin.layout.master')
@section('style')
    {{ HTML::style('bower/datatables.net-bs/css/dataTables.bootstrap.min.css') }}
    {{ HTML::style('css/sites/admin_manage_order.css') }}
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                MANAGE ORDER
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="{{ route('manage.order') }}">manage order</a></li>
            </ol>
        </section>
        <section class="content" id="manage_drink">
            <hr>
            <div class="row">
                <div id="content">
                    <div id="tab1">
                        <div class="table-responsive status-order" style="border-radius: 10px;">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th class="text-center weight-title">User Name</th>
                                    <th class="text-center weight-title">Time</th>
                                    <th class="text-center weight-title">Order Quantity</th>
                                    <th class="text-center weight-title">Total</th>
                                    <th class="text-center weight-title">Action</th>
                                </tr>
                                </thead>
                                @foreach($orders as $order)
                                    @foreach($users as $user)
                                        @if($order->user_id == $user->user_id)
                                            <tbody id="items">
                                            <td>{{$user->name}}</td>
                                            <td>{{$order->created_at}}</td>
                                            <td>{{$order->product_count}}</td>
                                            <td>${{$order->sum}}</td>
                                            <td>
                                                <div class="aaa">
                                                    <a class="orderID" href="javascript:void(0)" data-toggle="modal"
                                                       data-target="#modalOrder"
                                                       data-id="{{$order->id}}">
                                                        <span class="glyphicon glyphicon-eye-open"></span>
                                                    </a>
                                                    <input class="inputID" type="hidden" value="{{$order->id}}"
                                                           name="orderID">
                                                </div>
                                            </td>
                                            </tbody>
                                        @endif
                                    @endforeach
                                @endforeach
                                <tr></tr>
                            </table>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                </div>
                            </div>
                        </div><!--/table-resp-->
                        <hr>
                    </div>
                </div>
            </div><!--/tab-content-->
        </section>
        <div id="modalOrder" class="modal fade" role="dialog">
            <div class="modal-dialog order">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        {{ Form::button('x', [ 'class' => 'close', 'data-dismiss' => 'modal' ]) }}
                        <h4 class="modal-title">{{ __('order detail') }}</h4>
                    </div>
                    <div class="modal-body" id="result" style="padding: 0 15px 15px 15px !important;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{ HTML::script('bower/datatables.net/js/jquery.dataTables.min.js') }}
    {{ HTML::script('bower/datatables.net-bs/js/dataTables.bootstrap.min.js') }}
    {{ HTML::script('bower/fastclick/lib/fastclick.js') }}
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
    {{ HTML::script('js/admin/manage_drink.js') }}
    {{ HTML::script('js/sites/homepage.js') }}
@endsection