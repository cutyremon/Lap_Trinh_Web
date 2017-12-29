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

        $order_details = OrderDetail::all();
        foreach ($order_details as $ord_detail) {
            $prd = Product::find($ord_detail->product_id);
            $ord_detail->total = $prd->price * $ord_detail->quantity;
            $ord_detail->save();
        }
        $orders_1 = Order::all();

        foreach ($orders_1 as $ord) {
            $sum = 0;
            $ord_dts = OrderDetail::where('order_id', '=', $ord->id)->get();
            foreach ($ord_dts as $ord_dt) {
                $sum += $ord_dt->total;
            }
            $ord->sum = $sum;
            $ord->save();
        }


        return view('admin.pages.dashboard_admin', compact(
            'totalorder',
            'totaluser',
            'products',
            'Order'
        ));
    }

    public function manage_food()
    {
        $all_foods = Product::where('category', 'like', '%ood')->where('hidden','=',0)
                    ->select('products.id','products.avatar','products.price','products.name','products.description',DB::raw('SUM(order_details.quantity) as soluong'))
                    ->leftjoin('order_details', 'order_details.product_id', '=', 'products.id')
                    ->groupBy('products.id')
                    ->orderBy('products.id', 'asc')
                    ->get();
        return view('admin.pages.manage_food', compact( 'all_foods'));
    }

    public function post_products(Request $request)
    {
        $produces = new Product();
        $produces->name = $request->name;
        $produces->price = $request->price;
        $produces->description = $request->description;
        $produces->avatar = $request->avatar;
        $produces->save();

        return redirect()->back();

    }

    public function manage_drink()
    {
        $all_drinks = Product::where('category', 'like', '%rink')->where('hidden','=',0)
                    ->select('products.id','products.avatar','products.price','products.name','products.description',DB::raw('SUM(order_details.quantity) as soluong'))
                    ->leftjoin('order_details', 'order_details.product_id', '=', 'products.id')
                    ->groupBy('products.id')
                    ->orderBy('products.id', 'asc')
                    ->get();
        return view('admin.pages.manage_drink', compact( 'all_drinks'));
    }

    public function manage_customer()
    {
        // $users = User::all();
        $users = User::
            select('users.id','users.email','users.name','users.date_of_birth','users.phone','users.address','users.avatar',DB::raw('COUNT(orders.id) as soluong'))
            ->leftjoin('orders', 'users.id', '=', 'orders.user_id')
            ->groupBy('users.id')
            ->orderBy('users.id', 'asc')
            ->get();
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
            where DATE(orders.updated_at) = CURRENT_DATE and lower(orders.status) = \'completed\'
            ');

        return Response::json($complete);
    }

    public function waiting()
    {
        $waiting = DB::select('
            select count(*) as so_luong
            from orders
            where DATE(orders.updated_at) = CURRENT_DATE and lower(orders.status) =\'waiting\'
            ');

        return Response::json($waiting);
    }

    public function inprogress()
    {
        $inprogress = DB::select('
            select count(*) as so_luong
            from orders
            where DATE(orders.updated_at) = CURRENT_DATE and lower(orders.status) =\'inprogress\'
            ');

        return Response::json($inprogress);
    }

    public function food_sl()
    {
        $food_sl = DB::select('
            select count(*) as so_luong
            from products
            where lower(products.category) = \'food\' and products.hidden = 0
            ');

        return Response::json($food_sl);
    }

    public function drink_sl()
    {
        $drink_sl = DB::select('
            select count(*) as so_luong
            from products
            where lower(products.category) = \'drink\' and products.hidden = 0
            ');

        return Response::json($drink_sl);
    }

    public function month()
    {
        $month = DB::select('
            select extract( month from orders.created_at) as month , sum(orders.sum) as tong_so, count(*) as so_luong
            from orders
            where extract( year from orders.created_at) = extract( year from CURRENT_DATE)
            group by month
            order by month ASC
            ');

        return Response::json($month);

    }

    public function day()
    {
        $day = DB::select('
            select extract(day from orders.created_at) as days , sum(orders.sum) as tong_so, count(*) as so_luong
            from orders
            where extract(month from orders.created_at) = extract(month from CURRENT_DATE)
            group by days
            order by days ASC
            ');

        return Response::json($day);
    }

    public function year()
    {
        $years = DB::select('
            select extract(year from orders.created_at) as years , sum(orders.sum) as tong_so, count(*) as so_luong
            from orders
            group by years
            order by years ASC
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
