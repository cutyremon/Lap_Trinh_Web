<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use session;
use App\Models\Product;

class AdminController extends Controller
{
//
//    protected $produces;
//
//    public function __construct(
//        Product $produces
//    )
//    {
//        $this->produces = $produces;
//    }

    public function home()
    {
        // if (Auth::check()) {
        //     if (Auth::User()->level == '1') {
        //         return view('admin.index2');
        //     } else
        //         return view('sites.home');
        // }
        // return view('sites.home');
        return view('admin.index2');
    }


    public function manage_food()
    {
        return view('admin.manage_food');
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
        return view('admin.manage_drink');
    }

    public function top()
    {
        return view('admin.pages.layout.top-nav');
    }
    //
}
