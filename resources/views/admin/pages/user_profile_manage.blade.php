@foreach($inforUser as $infor)
    <div class="row fix-profile-bottom">
        <div class="img-avata-icon">
            @if(($infor->avatar) != null)
                <img src="{!! url($infor->avatar) !!}" class="img-responsive"/>
            @else
                <img src="{!! asset('/img/avata.png') !!}" class="img-responsive"/>
            @endif
        </div><!--col-md-4 col-sm-4 col-xs-12 close-->
        <div class="fullname">
            <h2>{!! $infor->name !!}</h2>
        </div>
    </div>
    <div class="row"><!--left col-->
        <ul class="list-group list-info">
            <li class="list-group-item text-right">
                <span class="pull-left"><strong>Email:</strong></span> {!! $infor->email !!}
            </li>
            <li class="list-group-item text-right">
                <span class="pull-left"><strong>Phone :</strong></span> {!! $infor->phone !!}
            </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Birthday:</strong>
                        </span> {!! $infor->date_of_birth !!}
            </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Address:</strong>
                        </span> {!! $infor->address !!}
            </li>
        </ul>
    </div><!--/col-3-->
@endforeach
