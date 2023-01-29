<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class sellController extends Controller
{
    //
    public function sell(Request $req)
    {
        $product = new product;
        $product->title = $req->title;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->location = $req->location;
        $product->price = $req->price;

        if ($req->hasFile('image')) {
            /*  $req->validate([
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            ]); */
            $images = $req->image;

            $imagesname = time() . '.' . $images->getClientOriginalExtension();
            $req->file->move('Images', $imagesname);
            $product->image = $imagesname;

        }
        $product->save();
        return redirect()->back();

    }

}