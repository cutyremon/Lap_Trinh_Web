{{--@foreach($listCmt as $comment)--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-7">--}}
            {{--<hr/>--}}
            {{--<div class="review-block">--}}
                {{--<div class="row">--}}
                    {{--@foreach( $listUser as $users1)--}}
                        {{--@if($users1->id==$comment->user_id)--}}
                            {{--<div class="col-sm-3">--}}
                                {{--@if(isset($users1->avatar))--}}
                                    {{--<img src="{{$users1->avatar}}" class="img-rounded">--}}
                                {{--@else--}}
                                    {{--<img src="http://www.surreyvale.co.uk/wp-content/uploads/2015/06/default_avatar-man.png"--}}
                                         {{--class="img-rounded">--}}
                                {{--@endif--}}
                                {{--<div class="review-block-name"><a href="#">--}}
                                        {{--{{$users1->name}}--}}
                                    {{--</a></div>--}}
                                {{--<div class="review-block-date">{{$comment->created_at}}</div>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}
                    {{--<div class="col-sm-9">--}}
                        {{--<div class="review-block-rate">--}}
                            {{--<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">--}}
                                    {{--<span class="glyphicon glyphicon-star" style="font-size:13px;"--}}
                                          {{--aria-hidden="true"></span>--}}
                            {{--</button>--}}
                            {{--<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">--}}
                                    {{--<span class="glyphicon glyphicon-star" style="font-size:13px;"--}}
                                          {{--aria-hidden="true"></span>--}}
                            {{--</button>--}}
                            {{--<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">--}}
                                    {{--<span class="glyphicon glyphicon-star" style="font-size:13px;"--}}
                                          {{--aria-hidden="true"></span>--}}
                            {{--</button>--}}
                            {{--<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">--}}
                                    {{--<span class="glyphicon glyphicon-star" style="font-size:13px;"--}}
                                          {{--aria-hidden="true"></span>--}}
                            {{--</button>--}}
                            {{--<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">--}}
                                    {{--<span class="glyphicon glyphicon-star" style="font-size:13px;"--}}
                                          {{--aria-hidden="true"></span>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                        {{--<div class="review-block-title">--}}
                        {{--</div>--}}

                        {{--<div class="review-block-description">{{$comment->content}}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endforeach--}}