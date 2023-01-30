<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class homeController extends Controller
{
    //
    public function index(){
        $product = Product::all();

        return view('home', compact('product'));
    }


   /*   public function item($product){
        $product = Product::where('product', $product)->get();

        return view('home', compact('product'));
    } */

    public function details($id){
        return Product::find($id);
    }
}

