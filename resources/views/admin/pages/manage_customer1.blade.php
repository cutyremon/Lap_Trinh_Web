@extends('admin.layout.master')
@section('style')
    {{ HTML::style('bower/datatables.net-bs/css/dataTables.bootstrap.min.css') }}
@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content-header">
            <h1>
                MANAGE USER
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">manage</a></li>
                <li class="active">manage user</li>
            </ol>
        </section>
        <section class="content" id="manage_user">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center weight-title">User ID</th>
                                    <th class="text-center weight-title">Name</th>
                                    <th class="text-center weight-title">Email</th>
                                    <th class="text-center weight-title">Phone</th>
                                    <th class="text-center weight-title">Order quantity</th>
                                    <th class="text-center weight-title">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user )
                                    <tr>
                                        <td class="text-center">{{$user->id}}</td>
                                        <td class="text-center">{{$user->name}}</td>
                                        <td class="text-center">{{$user->email}}</td>
                                        <td class="text-center">{{$user->phone}}</td>
                                        <td class="text-center">{{$user->soluong}}</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" @click="show_info_user({{$user}})">
                                            <i class="fa fa-pencil-square-o fa-2x " aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="show_info_user">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button data-dismiss="modal" type="button" class="close">x</button> 
                            <h4 class="modal-title">User Information</h4>
                        </div>
                        <div id="result" class="modal-body" style="padding: 0px 15px 15px !important;">
                            <div class="row fix-profile-bottom">
                                <div class="img-avata-icon">
                                    <img src="http://localhost:8000/img/avata.png" class="img-responsive">
                                </div><!--col-md-4 col-sm-4 col-xs-12 close-->
                                <div class="fullname">
                                    <h2 class="text-center name_info">
                                    <div class="btn btn-info">
                                        @{{user.name}}
                                    </div>
                                    </h2>
                                </div>
                            </div>
                            <div class="row"><!--left col-->
                                <ul class="list-group list-info">
                                    <li class="list-group-item text-right">
                                        <span class="pull-left"><strong>Email:</strong></span> 
                                        @{{user.email}}
                                    </li>
                                    <li class="list-group-item text-right">
                                        <span class="pull-left"><strong>Phone :</strong></span>
                                        @{{user.phone}}
                                    </li>
                                    <li class="list-group-item text-right"><span class="pull-left"><strong>Birthday:</strong>
                                    </span>
                                    @{{user.date_of_birth}}
                                </li>
                                <li class="list-group-item text-right">
                                    <span class="pull-left"><strong>Address:</strong>
                                    </span>
                                    @{{user.address}}
                                </li>
                                <li class="list-group-item text-right">
                                    <span class="pull-left"><strong>Total Order:</strong>
                                    </span>
                                    <div class="btn btn-success"> @{{order_sl}}</div>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    {{ HTML::script('bower/datatables.net/js/jquery.dataTables.min.js') }}
    {{ HTML::script('bower/datatables.net-bs/js/dataTables.bootstrap.min.js') }}
    {{ HTML::script('bower/fastclick/lib/fastclick.js') }}
    <script>
        $(document).ready(function () {
            $(function () {
            $('#example1').DataTable();
        })
        });
    </script>
    {{ HTML::script('js/admin/manage_customer.js') }}
@endsection
