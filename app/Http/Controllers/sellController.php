<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class sellController extends Controller
{
    //

    public function sellProduct()
    {
        return view('sell');
    }

    public function sell(Request $req)
    {
        $product = new Product;

        $product->title = $req->title;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->location = $req->location;
        $product->price = $req->price;

        
        $image = $req->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $req->file->move('image', $imagename);
        $product->images = $imagename;
        $product->save();

        return redirect()->back();
    

    }

}