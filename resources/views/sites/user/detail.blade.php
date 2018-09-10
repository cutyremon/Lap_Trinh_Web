<div class="cart" id="cart">
    <table class="table table-hover">
        <tbody>
        @if($products->count() > 0)
            @foreach($products as $product)
                @if($product->order_id == $id)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                <a href={{route('product.detail',$product->product_id)}}> <img
                                            class="media-object"
                                            src="{{asset("../img/$product->avatar")}}">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a
                                                href={{route('product.detail',$product->product_id)}}>{{$product->name}}</a>
                                    </h4>
                                    <h5 class="media-heading"> Type : <a
                                                href={{route('menu')}}>{{$product->category}}</a>
                                    </h5>
                                </div>
                            </div>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">
                            <span class="price">x</span>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="font-size: 1.3em !important;">
                            <span class="price">{{$product->quantity}}</span>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center" style="font-weight: bold !important;">
                            $<span id="amount" class="amount">{{$product->total}}</span>
                        </td>
                    </tr>
                @endif
            @endforeach
        @else
            <h4>No information</h4>
        @endif
        </tbody>
    </table>
</div>