<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

class AdminController extends Controller
{
    protected $information;
    protected $order;
    protected $orderDetail;
    protected $product;

    public function __construct(
        User $information,
        OrderDetail $orderDetail,
        Order $order,
        Product $product
    )
    {
        $this->information = $information;
        $this->order = $order;
        $this->orderDetail = $orderDetail;
        $this->product = $product;
    }

    public function home()
    {
        $users = $this->information->all();
        $totaluser = $users->count();

        $Order = $this->order->all();
        $totalorder = $Order->count();

        $products = DB::table('products')
            ->join('order_details', 'products.id', '=', 'order_details.product_id')
            ->distinct()
            ->get();

        return view('admin.pages.dashboard_admin', compact(
            'totalorder',
            'totaluser',
            'products',
            'Order'
        ));
    }

    public function manage_food()
    {
        $Order = $this->order->all();
        $totalorder = $Order->count();
        $all_foods = Product::where('category', '=', 'Food')->where('hidden','=',0)->get();

        return view('admin.pages.manage_food', compact(
            'totalorder', 'all_foods'
        ));
    }

    public function post_products(Request $request)
    {
        $produces = new Product();
        $produces->name = $request->name;
        $produces->price = $request->price;
//        $produces->category = $request->category;
        $produces->description = $request->description;
        $produces->avatar = $request->avatar;
        $produces->save();

        return redirect()->back();

    }

    public function manage_drink()
    {
        $Order = $this->order->all();
        $totalorder = $Order->count();
        $all_drinks = Product::where('category', '=', 'drink')->where('hidden','=',0)->get();

        return view('admin.pages.manage_drink', compact(
            'totalorder', 'all_drinks'
        ));
    }

    public function manage_customer()
    {
        $users = User::all();

        return view('admin.pages.manage_customer1', compact('users'));
    }

    public function manage_order()
    {
        $orders = DB::select('
            select orders.id ,users.name, orders.created_at, orders.product_count, orders.sum ,orders.status from orders, users
            where orders.user_id = users.id
            order by orders.created_at desc
            ');

        return view('admin.pages.manage_order', compact('orders'));
    }

    public function getUserID($id)
    {
        $inforUser = $this->information->where('id', '=', $id)->get();

        return view('admin.pages.user_profile_manage', compact('inforUser', 'id'));
    }

    public function user_order($user_id)
    {
        $so_luong = DB::table('orders')
            ->where('user_id', '=', $user_id)
            ->count();

        return Response::json($so_luong);
    }

    public function order_detail($order_id)
    {
        $order_details = DB::table('order_details')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->join('orders', 'orders.id', '=', 'order_details.order_id')
            ->where('order_id', $order_id)->get();

        return Response::json($order_details);
    }

    public function complete()
    {
        // $complete  = DB::table('orders')
        // ->where('status','=' ,'complete')
        // ->where(DATE('updated_at'),'=',Curdate())
        // ->count();
        $complete = DB::select('
            select count(*) as so_luong
            from orders
            where DATE(orders.updated_at) = Curdate() and orders.status ="completed"
            ');

        return Response::json($complete);
    }

    public function waiting()
    {
        $waiting = DB::select('
            select count(*) as so_luong
            from orders
            where DATE(orders.updated_at) = Curdate() and orders.status ="waiting"
            ');

        return Response::json($waiting);
    }

    public function inprogress()
    {
        $inprogress = DB::select('
            select count(*) as so_luong
            from orders
            where DATE(orders.updated_at) = Curdate() and orders.status ="inprogress"
            ');

        return Response::json($inprogress);
    }

    public function food_sl()
    {
        $food_sl = DB::select('
            select count(*) as so_luong
            from products
            where products.category = "Food" and products.hidden = 0
            ');

        return Response::json($food_sl);
    }

    public function drink_sl()
    {
        $drink_sl = DB::select('
            select count(*) as so_luong
            from products
            where products.category = "Drink" and products.hidden = 0
            ');

        return Response::json($drink_sl);
    }

    public function month()
    {
        $month = DB::select('
            select month(orders.created_at) as month , sum(orders.sum) as tong_so, count(*) as so_luong
            from orders
            where year(orders.created_at) = year(curdate())
            group by month
            ');

        return Response::json($month);

    }

    public function day()
    {
        $day = DB::select('
            select day(orders.created_at) as days , sum(orders.sum) as tong_so, count(*) as so_luong
            from orders
            where month(orders.created_at) = month(curdate())
            group by days
            ');

        return Response::json($day);
    }

    public function year()
    {
        $years = DB::select('
            select year(orders.created_at) as years , sum(orders.sum) as tong_so, count(*) as so_luong
            from orders
            group by years
            ');

        return Response::json($years);
    }

    public function change_status(Request $request)
    {

        $order = Order::where('id', '=', $request->id)->first();
        $order->status = $request->status;
        $order->save();

        return Redirect()->back();
    }
}
