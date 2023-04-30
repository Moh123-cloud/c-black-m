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
                $product = Product::inRandomOrder()->limit(8)->get();

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

                $home1 = Product::where('category', 'Home & Office')
                    ->get();

                $health = Product::where('category', 'Health & Beauty')
                    ->get();

                $other = Product::where('category', 'Others')
                    ->get();

                return view('home', compact('product', 'phone', 'computer', 'electronic', 'sport', 'furniture', 'fashion', 'home1', 'health', 'other'));
            } else {
                return view('admin.update');
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
                $product = Product::inRandomOrder()->limit(8)->get();

                $phone = Product::where('category', 'Phone & Accessories')->inRandomOrder()->limit(4)
                    ->get();

                $computer = Product::where('category', 'Computer Accessories')->inRandomOrder()->limit(4)
                    ->get();

                $electronic = Product::where('category', 'Electronics')->inRandomOrder()->limit(4)
                    ->get();

                $sport = Product::where('category', 'Sports & Gaming')->inRandomOrder()->limit(4)
                    ->get();

                $furniture = Product::where('category', 'Furniture')->inRandomOrder()->limit(4)
                    ->get();

                $fashion = Product::where('category', 'Fashion')->inRandomOrder()->limit(4)
                    ->get();

                $home1 = Product::where('category', 'Home & Office')->inRandomOrder()->limit(4)
                    ->get();

                $health = Product::where('category', 'Health & Beauty')->inRandomOrder()->limit(4)
                    ->get();

                $other = Product::where('category', 'Others')->inRandomOrder()->limit(4)
                    ->get();

                return view('home', compact('product', 'phone', 'computer', 'electronic', 'sport', 'furniture', 'fashion', 'home1', 'health', 'other'));
            } else {
                return view('admin.update');
            }
        } else {
            return redirect('/login');
        }
    }

    //Controller for detail page
    public function details($id)
    {
        if (Auth::id()) {
            $data = Product::find($id);
            return view('details', ['product' => $data]);
        } else {
            return redirect('/login');
        }
    }

    //Controller for All Products
    public function all(){
        $all = Product::all();
        return view('all_products', ['product' => $all]);
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

    public function home1(){
        $home1 = Product::where('category', 'Home & Office')
            ->get();
        return view('home1', ['product' => $home1]);
    }

    public function health(){
        $health = Product::where('category', 'Health & Beauty')
            ->get();
        return view('health', ['product' => $health]);
    }

    public function other(){
        $other = Product::where('category', 'Others')
            ->get();
        return view('other', ['product' => $other]);
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


