<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class homeController extends Controller
{
    //
    public function index(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $product = Product::all();
                return view('home', compact('product'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            $product = Product::all();
            return view('home', compact('product'));
        }
    }

    public function main(){
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $product = Product::all();
                return view('home', compact('product'));
            } else {
                return view('admin.home');
            }
        } else {
            $product = Product::all();
            return view('home', compact('product'));
        }
    }

    /* public function index(){
        $product = Product::all();

        return view('home', compact('product'));
    } */


   /*   public function item($product){
        $product = Product::where('product', $product)->get();

        return view('home', compact('product'));
    } */

    public function details($id){
        $data = Product::find($id);
        return view('details', ['product'=>$data]);
    }


  /*   public function logout()
    {
        Session::forget('user');
        return redirect('/home');
    } */
}

