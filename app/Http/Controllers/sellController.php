<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sellController extends Controller
{
    //

    public function sellProduct()
    {
        if (Auth::id()) {
            return view('sell');
        } else {
            return redirect('/login');
        }
    }


    public function sell(Request $req)
    {
        
        $product = new Product;

        $product->name = $req->name;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->location = $req->location;
        $product->user_id = auth()->user()->id;
        $product->price = $req->price;
        $product->phone = $req->phone;

        
        $image = $req->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $req->file->move('image', $imagename);
        $product->gallery = $imagename;
        $product->save();

        return redirect()->back()->with('message', 'Product added Successfully!');
    

    }

}