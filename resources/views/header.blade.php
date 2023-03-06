<?php

use App\Http\Controllers\productController;
$total = productController::index();

?>

{{-- Navigation Bar --}}
<header>

    <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 30px !important; padding-top: 15px; padding-bottom: 15px;">
        <a class="navbar-brand" href="#">Black Market</a>
    
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto navbar-left"> 
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
    
    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('phone') }}">Phones & Accessories</a><br>
                        <a class="dropdown-item" href="{{ route('electronic') }}">Electronics</a><br>
                        <a class="dropdown-item" href="{{ route('furniture') }}">Furniture</a><br>
                        <a class="dropdown-item" href="{{ route('computer') }}">Computer Accessories</a><br>
                        <a class="dropdown-item" href="{{ route('fashion') }}">Fashion</a><br>
                        <a class="dropdown-item" href="{{ route('sport') }}">Sports & Gaming</a><br>
                        
                    </div>
    
                    
                </li>  
    
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href=" {{ route('contact') }}">Contact Us</a></li>
                <li  class="privacy" ><a href="{{ route('privacy') }}">Privacy Policy</a></li>
    
            </ul>
    
            <div class="search-show">
                <form class="form-inline my-2 my-lg-0 navbar-left" action="{{route('search')}}" method="post" >
                    @csrf
                    <input class="form-control mr-sm-2 " type="search" placeholder="Search Title, Category or Description" aria-label="Search" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
    
    
            
            <ul class="nav navbar-nav mr-auto navbar-right">
    
                @if (Route::has('login'))
                    @auth
    
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('item') }}">Your Products({{$total}})</a>
                        </li>
    
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('sell') }}">Sell Here</a>
                        </li>
    
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" style="margin-left: 13px">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ Route('login') }}"> Login</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{ Route('register') }}"> Register</a>
                        </li>
    
                    @endauth
                @endif
                
            
    
                
            </ul>
        </div>
    
        @if (Route::has('login'))
            @auth
    
                <ul class="nav-products" style="display: flex; margin-top:15px; margin-left: 0px">
                    <li class="nav-item" style="margin-right: 10px;">
                        <a class="nav-link" href="{{ url('item') }}">Your Products({{$total}})</a>
                    </li>
    
                    <li class="nav-item " style="margin-right: 3px;">
                        <a class="nav-link" href="{{ route('sell') }}">Sell</a>
                    </li>
                </ul>
                
            @else
                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ Route('login') }}"> Login</a>
                </li>
    
                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ Route('register') }}"> Register</a>
                </li>
    
            @endauth
        @endif
    
        <button class="navbar-toggler toggle-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin: 10px">
            <span class="navbar-toggler-icon toggle-btn"><i class="fas fa-bars" aria-hidden="true"></i></span>
        </button>
    
        
    </nav>
    
    
    <div class="form-container">
        <form class="" action="{{route('search')}}" method="post" style="margin-left: 13px; width:80vw;">
            <div class="div">
    
                @csrf
                <input class="search search-box" type="search" placeholder="Search Title, Category or Description" aria-label="Search" name="search" style="width:90%; height: 40px; margin-bottom: 5px">
                <button class="" type="submit" style="">Search</button>
            </div>
        </form>
    </div>
</header>

{{-- 
    <div class="form-container">
        <form class="form-inline my-2 my-lg-0 navbar-left" action="{{route('search')}}" method="post" >
            @csrf
            <input class="form-control mr-sm-2 search search-box" type="search" placeholder="Search Title, Category or Description" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
    </div>
 --}}