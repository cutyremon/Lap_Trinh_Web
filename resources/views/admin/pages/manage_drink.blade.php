@extends('admin.layout.master')
@section('style')
    {{ HTML::style('bower/datatables.net-bs/css/dataTables.bootstrap.min.css') }}
@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content-header">
            <h1>
                MANAGE drink
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">manage</a></li>
                <li class="active">manage drink</li>
            </ol>
        </section>
        <section class="content" id="manage_drink">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">
                                <div class="btn btn-success"@click="show_create">CREATE</div>
                            </h3>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Avatar</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_drinks as $drink )
                                    <tr>
                                        <td class="table_drink">{{ $drink->id}}</td>
                                        <td class="table_drink">
                                            <img src="../img/{{$drink->avatar}}" class="fix-img" alt="">
                                            <i> {{$drink->name}}</i>
                                        </td>
                                        <td class="table_drink">${{$drink->price}}</td>
                                        <td class="table_drink">
                                            <a href="javascript:void(0)" @click="edit_drink({{$drink}})">
                                            <i class="fa fa-pencil-square-o fa-2x " aria-hidden="true"></i>
                                            </a>
                                            <a href="javascript:void(0)" @click="confirm_delete({{$drink}})">
                                                <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Avatar</th>
                                    <th class="text-center">Price</th>
                                    <th class="table-center">Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="delete_drink_confirm">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Confirm Delete drink</h4>
                        </div>
                        <div class="modal-body">
                            <p>Bạn có muốn xóa <span style="color:red">@{{ item_drink.name }}</span> không ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" @click="delete_drink(item_drink.id)"
                            >Yes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="show_edit_drink">
                <div class="modal-dialog fix-width-edit-drink">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Edit <span class="edit_drink"><i>@{{item_drink.name }}</i></span> </h3>
                        </div>
                        <div class="modal-body">
                            <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="edit(item_drink.id)">
                                <div class="form-group">
                                    <label for="">Name :</label>
                                    <input type="text" class="form-control" name="name" v-model="item_drink.name">
                                </div>
                                <div class="form-group">
                                    <label for="">Price :</label>
                                    <input type="number" min="0" class="form-control" name="price" v-model="item_drink.price" >
                                </div>
                                <div class="form-group">
                                    <label for="">Description :</label>
                                    <textarea  rows="5" class="form-control" name="description" v-model="item_drink.description"></textarea>
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
                <div class="modal-dialog fix-width-edit-drink">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h3 class="modal-title">Create New drink</h3>
                        </div>
                        <div class="modal-body">
                            <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="create_drink">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Name :</label>
                                    <input type="text" class="form-control" name="name" v-model="new_drink.name">
                                </div>
                                <div class="form-group">
                                    <label for="">Price :</label>
                                    <input type="number" min="0" class="form-control" name="price" v-model="new_drink.price" >
                                </div>
                                <div class="form-group">
                                    <label for="">Description :</label>
                                    <textarea rows="5" type="text" class="form-control" name="description" v-model="new_drink.description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Images : </label>
                                    {{-- <input type="file"  class="form-control" name="image_drink" v-model="new_drink.image_drink" > --}}
                                    <input id="fileupload" type="file" multiple="multiple" name='image' v-on:change="onChange"/>
                                    </br>
                                    <b>Live Preview</b>
                                    <br />
                                    <div id="dvPreview">
                                    </div>
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
    {{ HTML::script('bower/datatables.net/js/jquery.dataTables.min.js') }}
    {{ HTML::script('bower/datatables.net-bs/js/dataTables.bootstrap.min.js') }}
    {{ HTML::script('bower/fastclick/lib/fastclick.js') }}
    <script>
        $(document).ready(function () {
            $(function () {
                $("#fileupload").change(function () {
                    if (typeof (FileReader) != "undefined") {
                        var dvPreview = $("#dvPreview");
                        dvPreview.html("");
                        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                        $($(this)[0].files).each(function () {
                            var file = $(this);
                            if (regex.test(file[0].name.toLowerCase())) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    var img = $("<img />");
                                    img.attr("style", "height:150px;width: 200px");
                                    img.attr("src", e.target.result);
                                    dvPreview.append(img);
                                }
                                reader.readAsDataURL(file[0]);
                            } else {
                                alert(file[0].name + " is not a valid image file.");
                                dvPreview.html("");
                                return false;
                            }
                        });
                    } else {
                        alert("This browser does not support HTML5 FileReader.");
                    }
                });
            });
            $(function () {
            $('#example1').DataTable();
        })
        });
    </script>
    {{ HTML::script('js/admin/manage_drink.js') }}
@endsection
