<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function showCart()
    {
        $user = Auth::user();
        $products = DB::table('products')->join('cart', 'products.id', '=', 'cart.product_id')->distinct()->get();
        $user->cart = $products->count();
        $user->save();

        return view('sites.cart', compact('products'));
    }

    public function addToCart(Request $request)
    {
        $cart = Cart::where('product_id', '=', $request->id)->first();
        if ($cart != null) {
            $cart->quantity += $request->quantity;
            $cart->save();
        }

        else {
            $cart = new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->product_id = $request->id;
            $cart->quantity = $request->quantity;
            $cart->save();
            $user = Auth::user();
            $user->cart += 1;
            $user->save();
        }

        return redirect(route('showCart'));
    }

    public function deleteCart(Request $request)
    {
        Cart::destroy($request->id);
        $user = Auth::user();
        $user->cart -= 1;
        $user->save();

        return redirect(route('showCart'));
    }

    public function checkout()
    {
        $user = Auth::user();
        $products = DB::table('products')->join('cart', 'products.id', '=', 'cart.product_id')->distinct()->get();

        return view('sites.checkout', compact('user', 'products'));
    }

    public function saveCart(Request $request)
    {
        $i = 0;
        $carts = Cart::orderBy('created_at', 'asc')->get();
        $count = Auth::user()->cart;
        foreach ($carts as $cart) {
            $cart->quantity = $_POST["qty"][ $i++ ];
            if ($cart->quantity == 0) {
                Cart::destroy($cart->id);
                $user = Auth::user();
                $user->cart -= 1;
                $user->save();
            }
            else {
                $cart->save();
            }
        }

        return redirect(route('checkout'));
    }

    public function thankyou()
    {
        return view('sites.thankyou');
    }

    public function checkoutSubmit(Request $request)
    {
        $user = Auth::user();
        $order = new Order();
        $order->user_id = $user->id;
        $order->product_count = $user->cart;
        $order->sum = $request->sum;
        $order->save();
        $user->cart = 0;
        $user->save();
        $carts = Cart::where('user_id', '=', $user->id)->get();
        foreach ($carts as $cart) {
            $ord_detail = new OrderDetail();
            $ord_detail->order_id = $order->id;
            $ord_detail->product_id = $cart->product_id;
            $ord_detail->quantity = $cart->quantity;
            $product = Product::find($cart->product_id);
            $ord_detail->total = $cart->quantity * $product->price;
            $ord_detail->save();
            Cart::destroy($cart->id);
        }

        return redirect(route('thankyou'));
    }
}
