<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class homeController extends Controller
{
    //
       public function index()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $product = Product::all();

                $phone = Product::where('category', 'Phone & Accessories')
                    ->get();

                $computer = Product::where('category', 'Computer Accessories')
                    ->get();

                $electronic = Product::where('category', 'Electronics')
                    ->get();

                $sport = Product::where('category', 'Sports & Gaming')
                    ->get();

                $furniture = Product::where('category', 'Furniture')
                    ->get();

                $fashion = Product::where('category', 'Fashion')
                    ->get();

                return view('home', compact('product', 'phone', 'computer', 'electronic', 'sport', 'furniture', 'fashion'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect('/login');
        }
    
    }

    //Controller for all products
    public function main()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $product = Product::all();

                $phone = Product::where('category', 'Phone & Accessories')
                    ->get();

                $computer = Product::where('category', 'Computer Accessories')
                    ->get();

                $electronic = Product::where('category', 'Electronics')
                    ->get();

                $sport = Product::where('category', 'Sports & Gaming')
                    ->get();

                $furniture = Product::where('category', 'Furniture')
                    ->get();

                $fashion = Product::where('category', 'Fashion')
                    ->get();

                return view('home', compact('product', 'phone', 'computer', 'electronic', 'sport', 'furniture', 'fashion'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect('/login');
        }
    }

    //Controller for detail page
    public function details($id)
    {
        $data = Product::find($id);
        return view('details', ['product' => $data]);
    }

    //Controller for phone
    public function phone(){
        $phone = Product::where('category', 'Phone & Accessories')
                ->get();
        return view('phone', ['product' => $phone]);
    }
   
    //Controller for electronic
    public function electronic(){
        $electronic = Product::where('category', 'Electronics')
                ->get();
        return view('electronic', ['product' => $electronic]);
    }

    //Controller for furniture
    public function furniture(){
        $furniture = Product::where('category', 'Furniture')
                ->get();
        return view('furniture', ['product' => $furniture]);
    }

    //Controller for computer
    public function computer(){
        $computer = Product::where('category', 'Computer Accessories')
                ->get();
        return view('computer', ['product' => $computer]);
    }
   
    //Controller for fashion
    public function fashion(){
        $fashion = Product::where('category', 'Fashion')
            ->get();
        return view('fashion', ['product' => $fashion]);
    }
   
    //Controller for sport
    public function sport(){
        $sport = Product::where('category', 'Sports & Gaming')
            ->get();
        return view('sport', ['product' => $sport]);
    }
   


/* public function logout()
{
Session::forget('user');
return redirect('/home');
} */


}


