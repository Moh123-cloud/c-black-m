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

        $req->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $images = $req->file('images') ?? [];

        if (count($images) > 5) {
            return redirect()->back()->with('error', 'You can only upload a maximum of 5 photos');
        } else {
            foreach ($images as $image) {
                $imagesname = time() . '.' . $images->getClientOriginalExtension();
                $req->file->move('images', $imagesname);
                $product->image = $imagesname;
            }
        }
        if (count($images) > 0) {
            $product->save();
            return redirect('sell');
        }





    }
}