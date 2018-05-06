<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/navbar-fixed-top.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]>
<script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="js/ie-emulation-modes-warning.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Fixed navbar -->
<div class="container">

    {{--<div class="row">--}}
        {{--<div class="col-sm-3">--}}
            {{--<div class="rating-block">--}}
                {{--<h4>Average user rating</h4>--}}
                {{--<h2 class="bold padding-bottom-7">4.3--}}
                    {{--<small>/ 5</small>--}}
                {{--</h2>--}}
                {{--<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">--}}
                    {{--<span class="glyphicon glyphicon-star " style="font-size:13px;" aria-hidden="true"></span>--}}
                {{--</button>--}}
                {{--<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">--}}
                    {{--<span class="glyphicon glyphicon-star" style="font-size:13px;" aria-hidden="true"></span>--}}
                {{--</button>--}}
                {{--<button type="button" class="btn btn-warning btn-sm" aria-label="Left Align">--}}
                    {{--<span class="glyphicon glyphicon-star" style="font-size:13px;" aria-hidden="true"></span>--}}
                {{--</button>--}}
                {{--<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">--}}
                    {{--<span class="glyphicon glyphicon-star" style="font-size:13px;" aria-hidden="true"></span>--}}
                {{--</button>--}}
                {{--<button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">--}}
                    {{--<span class="glyphicon glyphicon-star" style="font-size:13px;" aria-hidden="true"></span>--}}
                {{--</button>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-3">--}}
            {{--<h4>Rating breakdown</h4>--}}
            {{--<div class="pull-left">--}}
                {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--<div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"--}}
                                                                   {{--style="font-size:13px;"></span></div>--}}
                {{--</div>--}}
                {{--<div class="pull-left" style="width:180px;">--}}
                    {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                        {{--<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5"--}}
                             {{--aria-valuemin="0" aria-valuemax="5" style="width: 1000%">--}}
                            {{--<span class="sr-only">80% Complete (danger)</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="pull-right" style="margin-left:10px;">1</div>--}}
            {{--</div>--}}
            {{--<div class="pull-left">--}}
                {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--<div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"--}}
                                                                   {{--style="font-size:13px;"></span></div>--}}
                {{--</div>--}}
                {{--<div class="pull-left" style="width:180px;">--}}
                    {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                        {{--<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4"--}}
                             {{--aria-valuemin="0" aria-valuemax="5" style="width: 80%">--}}
                            {{--<span class="sr-only">80% Complete (danger)</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="pull-right" style="margin-left:10px;">1</div>--}}
            {{--</div>--}}
            {{--<div class="pull-left">--}}
                {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--<div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"--}}
                                                                   {{--style="font-size:13px;"></span></div>--}}
                {{--</div>--}}
                {{--<div class="pull-left" style="width:180px;">--}}
                    {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                        {{--<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3"--}}
                             {{--aria-valuemin="0" aria-valuemax="5" style="width: 60%">--}}
                            {{--<span class="sr-only">80% Complete (danger)</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="pull-right" style="margin-left:10px;">0</div>--}}
            {{--</div>--}}
            {{--<div class="pull-left">--}}
                {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--<div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"--}}
                                                                   {{--style="font-size:13px;"></span></div>--}}
                {{--</div>--}}
                {{--<div class="pull-left" style="width:180px;">--}}
                    {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                        {{--<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2"--}}
                             {{--aria-valuemin="0" aria-valuemax="5" style="width: 40%">--}}
                            {{--<span class="sr-only">80% Complete (danger)</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="pull-right" style="margin-left:10px;">0</div>--}}
            {{--</div>--}}
            {{--<div class="pull-left">--}}
                {{--<div class="pull-left" style="width:35px; line-height:1;">--}}
                    {{--<div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"--}}
                                                                   {{--style="font-size:13px;"></span></div>--}}
                {{--</div>--}}
                {{--<div class="pull-left" style="width:180px;">--}}
                    {{--<div class="progress" style="height:9px; margin:8px 0;">--}}
                        {{--<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1"--}}
                             {{--aria-valuemin="0" aria-valuemax="5" style="width: 20%">--}}
                            {{--<span class="sr-only">80% Complete (danger)</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="pull-right" style="margin-left:10px;">0</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    @foreach($listCmt as $comment)
        <div class="row">
            <div class="col-sm-7">
                <hr/>
                <div class="review-block">
                    <div class="row">
                        @foreach( $listUser as $users1)
                            @if($users1->id==$comment->user_id)
                                <div class="col-sm-3">
                                    @if(isset($users1->avatar))
                                        <img src="{{$users1->avatar}}" class="img-rounded" style="max-width: 25% !important;">
                                    @else
                                        <img src="http://www.surreyvale.co.uk/wp-content/uploads/2015/06/default_avatar-man.png"
                                             class="img-rounded" style=" max-width: 25% !important;">
                                    @endif
                                    <div class="review-block-name"><a href="#">
                                            {{$users1->name}}
                                        </a></div>
                                    <div class="review-block-date">{{$comment->created_at}}</div>
                                </div>
                            @endif
                        @endforeach
                        <div class="col-sm-9">
                            <div class="review-block-rate">
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" style="font-size:13px;"
                                          aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" style="font-size:13px;"
                                          aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" style="font-size:13px;"
                                          aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" style="font-size:13px;"
                                          aria-hidden="true"></span>
                                </button>
                                <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-star" style="font-size:13px;"
                                          aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="review-block-title">
                            </div>

                            <div class="review-block-description">{{$comment->content}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

{{--<div>--}}
    {{--<ul class="list-group">--}}
        {{--@foreach($listCmt as $comment)--}}
        {{--<li class="list-group-item comment-botron"><label>--}}
        {{--@foreach( $listUser as $users1)--}}
        {{--@if($users1->id==$comment->user_id)--}}
        {{--{{$users1->full_name}}--}}
        {{--@endif--}}

        {{--@endforeach--}}
        {{--</label>:{{$comment->content}}</li>--}}
        {{--@endforeach--}}
        {{--@if(Auth::check())--}}
            {{--<li class="list-group-item">--}}
                {{--<i id="styleId" name="styleId" value="{{$showStyle->id}}"></i>--}}
                {{--<input type="hidden" id="product_1" name="product_1" value="{{$prd_detail->id}}">--}}

                {{--<input type="text" class="form-control" id="comment" name="comment"--}}
                       {{--placeholder="Add comment..."/>--}}
            {{--</li>--}}
            {{--<button id="postComment" class="comment-button">addComment</button>--}}
        {{--@endif--}}
    {{--</ul>--}}
{{--</div>--}}
{{ HTML::script('/js/sites/product_comment.js',['type' => 'text/javascript'])}}