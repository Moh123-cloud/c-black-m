<?php

use App\Http\Controllers\productController;
$total = productController::index();

?>

{{-- Navigation Bar --}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Black Market</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mr-auto navbar-left">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('/home') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('phone') }}">Phones & Accessories</a>
                    <a class="dropdown-item" href="{{ route('electronic') }}">Electronics</a>
                    <a class="dropdown-item" href="{{ route('furniture') }}">Furniture</a>
                    <a class="dropdown-item" href="{{ route('computer') }}">Computer Accessories</a>
                    <a class="dropdown-item" href="{{ route('fashion') }}">Fashion</a>
                    <a class="dropdown-item" href="{{ route('sport') }}">Sports & Gaming</a>
                    
                </div>
            </li>  

        </ul>
        <form class="form-inline my-2 my-lg-0 navbar-left" action="{{route('search')}}" method="post">
            @csrf
            <input class="form-control mr-sm-2 search search-box" type="search" placeholder="Search Title, Category or Description" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>


        
        <ul class="nav navbar-nav mr-auto navbar-right">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('item') }}">Your Products({{$total}})</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{ route('sell') }}">SELL</a>
            </li>

           
            @if(Auth::id())



            @auth
                
                <li class="na v-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ route('logout') }}"> Logout</a>
                </li> 
            
            @else
                <li class="na v-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}"> Login</a>
                </li>

                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}"> Register</a>
                </li>
                
            @endauth
            @endif
            
        

            
        </ul>
    </div>
</nav>
