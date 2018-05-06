<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MenuController extends Controller
{
    public function index()
    {
        return view('sites.menu');
    }

    public function search(Request $req)
    {
    	$product = Product::where('name','like',"%$req->name_product%")->get();
    	return view('sites.product_search',compact('product'));
    }
}
