@extends('admin.layout.master')
@section('style')
<<<<<<< HEAD
    {{ HTML::style('bower/datatables.net-bs/css/dataTables.bootstrap.min.css') }}
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                MANAGE FOOD
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">manage</a></li>
                <li class="active">manage food</li>
            </ol>
        </section>
        <section class="content" id="manage_food">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">
                                <div class="btn btn-success" data-toggle="modal" data-target="#per-create">CREATE</div>
                                <div id="per-create" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content form-edit">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                                <h4 class="modal-title">Thêm Produces</h4>
                                            </div>
                                            <form class="form-horizontal" action="{{route('postProducts')}}"
                                                  method="POST" enctype="multipart/form-data">

                                                {{ csrf_field() }}
                                                <div class="modal-body ">


                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label for="display_name">name Food</label>
                                                            <input class="form-control " type="text"
                                                                   name="name"
                                                                   placeholder="name produce">
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                            <label for="category_id" id="category" value="food"> category :food</label>

                                                        </div>
                                                        {{--<div class="form-group col-md-3">--}}
                                                            {{--<label for="category_id">{{__('categories')}}</label>--}}
                                                            {{--<select id="category_id" name="category_id">--}}
                                                                {{--@foreach($categories as $category)--}}
                                                                    {{--<option value="{{($category->id)}}">{{$category->category_name}}</option>--}}
                                                                {{--@endforeach--}}
                                                            {{--</select>--}}
                                                        {{--</div>--}}

                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label for="avatar">Image</label>
                                                            <input type="url" class="form-control"
                                                                   name="avatar"
                                                            >
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label for="money">Price</label>
                                                            <input type="number" class="form-control" name="price">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <label for="description">Mô Tả</label>
                                                            <textarea class="form-control" type="text" row="6"
                                                                      id="description" name="description"></textarea>
                                                        </div>
                                                    </div>
                                                    {{--<div class="row">--}}
                                                    {{--<div class="form-group col-md-8">--}}
                                                    {{--<label for="color">Color</label>--}}
                                                    {{--<select id="color" name="color">--}}
                                                    {{--<option value="Black"--}}
                                                    {{--class="admin_black"--}}
                                                    {{-->Black--}}
                                                    {{--</option>--}}
                                                    {{--<option value="Blue" class="admin_blue"--}}
                                                    {{--selected="selected">Blue--}}
                                                    {{--</option>--}}
                                                    {{--<option value="Red"--}}
                                                    {{--class="admin_red">Red--}}
                                                    {{--</option>--}}
                                                    {{--<option value="White"--}}
                                                    {{--class="admin_white">White--}}
                                                    {{--</option>--}}

                                                    {{--</select>--}}
                                                    {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row"    >--}}
                                                    {{--<div class="form-group col-md-3" class="admin_form_1">--}}

                                                    {{--<label for="gender">{{__('gender')}}</label>--}}
                                                    {{--<select id="gender" name="gender">--}}
                                                    {{--<option value="male">--}}
                                                    {{--{{__('male')}}--}}
                                                    {{--</option>--}}
                                                    {{--<option value="female">--}}
                                                    {{--{{__('female')}}--}}
                                                    {{--</option>--}}
                                                    {{--</select>--}}
                                                    {{--</div>--}}
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" class="btn btn-default" value="Add Produce"/>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                        </div>

=======
{{ HTML::style('bower/datatables.net-bs/css/dataTables.bootstrap.min.css') }}
<script src="https://unpkg.com/vue/dist/vue.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue2-filters/dist/vue2-filters.min.js"></script>
@endsection

@section('content')
<div class="content-wrapper" >
    <section class="content-header">
        <h1>
            MANAGE FOOD
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">manage</a></li>
            <li class="active">manage food</li>
        </ol>
    </section>
    <section class="content" id="manage_food">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">
                            <div class="btn btn-success" @click="show_create">CREATE</div>
>>>>>>> 3d474a27802ece00783087124264701faaa35fd7
                        </h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Avatar</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
<<<<<<< HEAD
                            <tr v-for="food in foods">
                                <td class="table_food">@{{ food.id }}</td>
                                <td><img v-bind:src="food.avatar" class="fix-img">
                                    @{{ food.name }}
                                </td>
                                <td class="table_food">@{{ food.price }}</td>
                                <td class="table_food">@{{food.status }}</td>
                                <td class="table_food">
                                    <a href="javascript:void(0)" @click="edit_food(food)">
                                        <i class="fa fa-pencil-square-o fa-2x " aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" @click="confirm_delete(food)">
                                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
=======
                                <tr v-for="food in foods">
                                    <td class="table_food">@{{ food.id }}</td>
                                    <td><img v-bind:src="url+food.avatar" class="fix-img">
                                        @{{ food.name }}
                                    </td>
                                    <td class="table_food">
                                    <span id="element">
                                        @{{ food.price | currency('',0)}}<sup><ins>đ</ins></sup>
                                    </span>
                                    </td>
                                    <td class="table_food">@{{ food.status }}</td>
                                    <td class="table_food">
                                        <a href="javascript:void(0)" @click="edit_food(food)">
                                            <i class="fa fa-pencil-square-o fa-2x " aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0)" @click="confirm_delete(food)">
                                            <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
>>>>>>> 3d474a27802ece00783087124264701faaa35fd7
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Avatar</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Status</th>
                                <th class="table-center">Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    <div class="modal fade" id="delete_food_confirm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Confirm Delete Food</h4>
                </div>
                <div class="modal-body">
                    <p>Bạn có muốn xóa <span style="color:red">@{{ item_food.name }}</span> không ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal"
                            @click="delete_food(item_food.id)"
                    >Yes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="show_edit_food">
        <div class="modal-dialog fix-width-edit-food">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">Edit <span class="edit_food"><i>@{{item_food.name }}</i></span></h3>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="edit(item_food.id)">
                        <div class="form-group">
                            <label for="">Name :</label>
                            <input type="text" class="form-control" name="name" v-model="item_food.name">
                        </div>
                        <div class="form-group">
                            <label for="">Price :</label>
                            <input type="text" class="form-control" name="price" v-model="item_food.price">
                        </div>
                        <div class="form-group">
                            <label for="">Description :</label>
                            <input type="text" class="form-control" name="description" v-model="item_food.description">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="show_create">
        <div class="modal-dialog fix-width-edit-food">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">Create New Food</h3>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="create_food">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Name :</label>
                            <input type="text" class="form-control" name="name" v-model="new_food.name">
                        </div>
                        <div class="form-group">
                            <label for="">Price :</label>
                            <input type="text" class="form-control" name="price" v-model="new_food.price">
                        </div>
                        <div class="form-group">
                            <label for="">Category :</label>
                            <input type="text" class="form-control" name="category" v-model="new_food.category">
                        </div>
                        <div class="form-group">
                            <label for="">Description :</label>
                            <input type="text" class="form-control" name="description" v-model="new_food.description">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </section>

    </div>
@endsection
@section('script')
<<<<<<< HEAD
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
    {{ HTML::script('js/admin/manage_food.js') }}
=======
{{ HTML::script('bower/datatables.net/js/jquery.dataTables.min.js') }}
{{ HTML::script('bower/datatables.net-bs/js/dataTables.bootstrap.min.js') }}
{{ HTML::script('bower/fastclick/lib/fastclick.js') }}
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        });
    });
</script>
{{ HTML::script('js/admin/manage_food.js') }}
>>>>>>> 3d474a27802ece00783087124264701faaa35fd7
@endsection
