<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use Session;

class productController extends Controller
{
    //
    static function index()
    {
        $userId = auth()->user()->id;
        return Product::where('user_id', $userId)->count();

    }

    public function productList(){
        $userId = auth()->user()->id;
        $products = DB::table('products')
        ->join('users', 'products.user_id', '=', 'products.id')
        ->where('products.user_id', $userId)
        ->select('products.*')
        ->get();

        return view('product', ['products'=>$products]);
    }

    public function search(Request $req)
    {
        $data = Product::where('title', 'like','%'. $req->input('search'). '%')
        ->orWhere('category', 'like','%' . $req->input('search'). '%')
        ->orWhere('description', 'like','%' . $req->input('search'). '%')
        ->get();
        return view('search', ['products'=>$data]);
    }
}                                                                                                                                                                                                                                         
