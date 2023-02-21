<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class footerController extends Controller
{
    //

    //about page
    public function about(){
        return view('about');
    }

    //safety page
    public function safety(){
        return view('safety');
    }

    //privacy page
    public function privacy(){
        return view('privacy');
    }

    //contact page
    public function contact(){
        return view('contact');
    }
}
