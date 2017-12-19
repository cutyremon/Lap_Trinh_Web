{{ HTML::style('css/sites/product_detail.css') }}
{{ HTML::style('bower/bootstrap-star-rating/css/star-rating.css') }}
<form action="{{route('editCmt',$cmt->id)}}" method="POST">
    {{ csrf_field() }}

    <textarea class="form-control animated" cols="50"
              id="new-review" name="content1"
              placeholder="Enter your review here..."
              rows="3" required>{{$cmt->content}}</textarea>

    <div class="text-right">
        <form accept-charset="UTF-8">
            <input id="input-send" name="cmt_star" type="text"
                   class="rating" data-min="0"
                   data-max="5" onchange="myFunction()"
                   data-size="xs" data-step=0.5 value="{{$cmt->rated}}"
                   title="">

        </form>
        <button class="btn btn-success btn-lg" type="submit">Save
        </button>
    </div>
</form>

{{ HTML::script('js/sites/product_detail.js') }}
{{ HTML::script('js/sites/star-rating.js')}}