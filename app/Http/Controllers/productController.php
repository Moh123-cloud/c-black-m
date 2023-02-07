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
       if (auth()->check()){
            $userId = auth()->user()->id;
            return Product::where('user_id', $userId)->count();
        } else {
            return redirect()->back();
        }


    }


    //Controller to join the users and product tables
    public function productList(){
        $userId = auth()->user()->id;
        $products = DB::table('products')
        ->join('users', 'products.user_id', '=', 'users.id')
        ->where('products.user_id', $userId)
        ->select('products.*')
        ->get();



        return view('product', ['products'=>$products]);
    }

    //Controller to update products view
    public function update($id){
        $product = Product::find($id);
        return view('update', ['products'=>$product]);
    }


    //Controller to update products 
    public function updateproducts(Request $req, $id)
    {
        if (auth()->check()){
            $userId = auth()->user()->id;
            if (\Illuminate\Support\Facades\Auth::user()->usertype == '0') {
                $product = Product::findOrFail($id);
                $product->title = $req->title;
                $product->category = $req->category;
                $product->description = $req->description;
                $product->location = $req->location;
                $product->user_id = auth()->user()->id;
                $product->price = $req->price;
                $product->phone = $req->phone;


                $image = $req->file;
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $req->file->move('image', $imagename);
                $product->images = $imagename;
                $product->save();

                return redirect()->back()->with('success', 'Product Updated Successfully');
            }
            //if it is an admin
            else
                {
                return view('admin.home');
                }
           
        }
        else{
                return redirect('/login');
        }

            
       
    }


    //Controller to delete a product
    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }


    //Controller to search for product
    public function search(Request $req)
    {
        $data = Product::where('title', 'like','%'. $req->input('search'). '%')
        ->orWhere('category', 'like','%' . $req->input('search'). '%')
        ->orWhere('description', 'like','%' . $req->input('search'). '%')
        ->get();
        return view('search', ['products'=>$data]);
    }
}                                                                                                                                                                                                                                         
