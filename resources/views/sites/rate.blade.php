{{ HTML::style('css/sites/product_detail.css') }}
{{ HTML::style('bower/bootstrap-star-rating/css/star-rating.css') }}
{{ HTML::style('bower/bootstrap-star-rating/themes/krajee-svg/theme.css')}}

@if(isset($ratetb))
    <div class="row starr" style="padding-bottom: 10px">
        <input id="input-id" type="text" class="rating" data-min="0"
               data-max="5"
               data-size="xs" data-step=0.1 value="{!! round($ratetb * 2) / 2 !!}"
               title="" disabled="disabled">
        <h4>( Rated {{bcdiv($ratetb,1,2)}}/5 by {{$countuser}}People )</h4>
    </div>
@else

    <div class="row starr" style="padding-bottom: 10px">
        <input id="input-id" type="text" class="rating" data-min="0"
               data-max="5"
               data-size="xs" data-step=0.1 value="{!! round($prd_detail->rated * 2) / 2 !!}"
               title="" disabled="disabled">
        {{-- <h4>( Rated {{bcdiv($prd_detail->rated,1,2)}}/5 by {{$countuser}} People )</h4> --}}
        <h4>( Rated {{$prd_detail->rated}}/5 by {{$countuser}}People )</h4>
    </div>
@endif
{{ HTML::script('js/sites/product_detail.js') }}
{{ HTML::script('js/sites/star-rating.js')}}
{{ HTML::script('bower/bootstrap-star-rating/js/locales/LANG.js')}}
{{ HTML::script('bower/bootstrap-star-rating/themes/krajee-svg/theme.js')}}
{{ HTML::script('js/sites/product_comment.js')}}