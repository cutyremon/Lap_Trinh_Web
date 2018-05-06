<?php

namespace App\Http\Controllers;

use App\Helpers\HelpText;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;
use Validator;


class UserController extends Controller
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

    public function profile(Request $request)
    {
        $users = User::find($request->id);
        $orders = Order::where('user_id', '=', $users->id)->orderBy('created_at', 'desc')->get();
        $products = DB::table('products')->join('order_details', 'products.id', '=', 'order_details.product_id')
            ->distinct()
            ->get();

        $count = $orders->count();

        return view('sites.user.user_profile', compact('users', 'orders', 'count', 'products'));
    }

    public function editProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->route('user.profile')
                ->withErrors($validator);
        }
        $users = User::find(Auth::user()->id);
        $users->fill($request->all());
        $users->save();

        return redirect()->back();
    }

    public function updateAvatar(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($request->hasFile('image_upload')) {
            HelpText::deleteFile($user->avatar);

            $nameFile = $request->image_upload->hashName();
            $path = $request->file('image_upload')->store('upload/user_image', 'uploads');
            $user->avatar = $path;
            $user->save();
        }

        return redirect()->back();
    }

    public function admin_credential_rules(array $data)
    {
        $messages = [
            'old_password.required' => 'Please enter old password',
            'new_password.required' => 'Please enter new password',
            'confirm.required'      => 'Please confirm password'
        ];

        $validator = Validator::make($data, [
            'old_password' => 'required',
            'new_password' => 'required|min:4|max:30',
            'confirm'      => 'required|same:new_password|min:4|max:30',
        ], $messages);

        return $validator;
    }

    public function changePassword(Request $request)
    {
        if (Auth::Check()) {
            $request_data = $request->All();
            $validator = $this->admin_credential_rules($request_data);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->getMessageBag()->toArray()], 400);
            }
            else {
                $old_password = Auth::User()->password;
                if (Hash::check($request_data['old_password'], $old_password)) {
                    $user_id = Auth::User()->id;
                    $obj_user = User::find($user_id);
                    $obj_user->password = Hash::make($request_data['new_password']);
                    $obj_user->save();

                    return "Change password success";
                }
                else {
                    $error = ['old_password' => 'Please enter correct current password'];

                    return response()->json(['error' => $error], 400);
                }
            }
        }

        return redirect()->to('/');
    }
}
