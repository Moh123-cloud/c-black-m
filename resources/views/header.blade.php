<?php

use App\Http\Controllers\productController;
$total = productController::index();

?>

{{-- Navigation Bar --}}
{{-- <header>

    <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 30px !important; padding-top: 15px; padding-bottom: 15px;">
        <a class="navbar-brand" href="#">Black Market</a>
    
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto navbar-left"> 
                <li class="nav-item active">
                    <a class="nav-link fs" href="{{ route('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
    
    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('phone') }}">Phones & Accessories</a><br>
                        <a class="dropdown-item" href="{{ route('electronic') }}">Electronics</a><br>
                        <a class="dropdown-item" href="{{ route('furniture') }}">Furniture</a><br>
                        <a class="dropdown-item" href="{{ route('computer') }}">Computer Accessories</a><br>
                        <a class="dropdown-item" href="{{ route('fashion') }}">Fashion</a><br>
                        <a class="dropdown-item" href="{{ route('home1') }}">Home & Office</a><br>
                        <a class="dropdown-item" href="{{ route('health') }}">Health & Beauty</a><br>
                        <a class="dropdown-item" href="{{ route('other') }}">Others</a><br>
                        <a class="dropdown-item" href="{{ route('sport') }}">Sports & Gaming</a><br>
                        
                    </div>
    
                    
                </li>  
    
                <li><a href="{{ route('about') }}" class="fs">About Us</a></li>
                <li><a href=" {{ route('contact') }}" class="fs">Contact Us</a></li>
                <li  class="privacy" ><a href="{{ route('privacy') }}" class="fs">Privacy Policy</a></li>
    
            </ul>
    
            <div class="search-show">
                <form class="form-inline my-2 my-lg-0 navbar-left" action="{{route('search')}}" method="post" >
                    @csrf
                    <input class="form-control mr-sm-2 search search-box" type="search" placeholder="Search Title, Category or Description" aria-label="Search" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">Search</button>
                </form>
            </div>
    
            
            <ul class="nav navbar-nav mr-auto navbar-right">
    
                @if (Route::has('login'))
                    @auth
    
                        <li class="nav-item">
                            <a class="nav-link fs" href="{{ url('item') }}">Your Products({{$total}})</a>
                        </li>
    
                        <li class="nav-item ">
                            <a class="nav-link fs" href="{{ route('sell') }}">Sell</a>
                        </li>
    
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" style="margin-left: 13px">
                                @csrf
                                <button type="submit" class="btn-br" style="background-color: transparent"><i class="fa fa-sign-out" aria-hidden="true"></i></button>
                            </form>
                        </li>
                    @else
                       <li class="nav-item">
                            <a class="nav-link fs" href="{{ url('item') }}">Your Products</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link fs" href="{{ route('sell') }}">Sell</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link fs" href="{{ Route('login') }}" style="margin-left: 13px;">
                                <button type="submit" class="btn-br1" style="background-color: transparent"><i class="fa fa-sign-in" aria-hidden="true"></i></button>
                            </a>
                        </li>
    
                    @endauth
                @endif
                
            
    
                
            </ul>
        </div>
    

    
        <button class="navbar-toggler toggle-button" style="background-color: transparent; margin-bottom: 13px;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin: 10px">
            <span class="navbar-toggler-icon toggle-btn"><i class="fas fa-bars" aria-hidden="true"></i></span>
        </button>
    
        
    </nav>
    
    
    <div class="form-container">
        <form class="" action="{{route('search')}}" method="post" style="margin-left: 13px; width:80vw;">
            <div class="div">
    
                @csrf
                <input class="search search-box" type="search" placeholder="Search Title, Category or Description" aria-label="Search" name="search" style="width:90%; height: 40px; margin-bottom: 5px">
                <button class="search-btn" type="submit" style="">Search</button>
            </div>
        </form>
    </div>
</header> --}}


 <section id="header">
            <a href="#"><img src="img/black.png" class="logo" alt=""></a>

        <form class="" action="{{route('search')}}" method="post">
            @csrf
            <div class="searchbox" onclick="onClick(event)">
                <!-- added placeholder text -->
                <input type="text" onfocus="onfocus()" onBlur="onBlur()" placeholder="Search product..">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </form>
         
                <ul id="navbar">
                    <li><a class="active" href="{{ route('/') }}">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <!-- <li><a href="about.html">About</a></li> -->
                    <!-- <li><a href="#">Contact</a></li> -->
                    <li><a href="{{ route('sell') }}">Sell</a></li>
                    <li><a href="{{ url('item') }}">Your products</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" style="margin-left: 13px">
                                @csrf
                                <button type="submit" class="btn-br" style="background-color: transparent">Logout</button>
                            </form>
                    </li>
                    <img src="img/header/moon1.png" alt="png" id="icon">
                    <a href="#"><i id="close" class="fa-solid fa-xmark"></i></a>
                </ul>
                
          
            <div id="mobile">
                <i id="bar" class="fa-solid fa-bars"></i>

            </div>
        </section>

<script>
           // Script for navigation bar
    const bar = document.getElementById('bar');
    const close = document.getElementById('close');
    const nav = document.getElementById('navbar');

    if (bar) {
        bar.addEventListener('click', () => {
            nav.classList.add('active');
        })
    }

    if (close) {
        close.addEventListener('click', () => {
            nav.classList.remove('active');
        })
    }

    // js for searchbox

 </script>