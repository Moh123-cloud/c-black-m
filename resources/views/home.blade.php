@extends('master')

@section('content')

<div class="row">
    {{-- Owl Corousel --}}
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-item carousel-inner">

            =
            <div class="item active d-block">
                <img src="{{ url('assets/img2.jpeg') }}" class="w-100" alt="Example Image">
            </div>

            <div class="item d-block">
                <img src="{{ url('assets/img2.jpeg') }}" alt="Example Image">
            </div>

            <div class="item d-block">
                <img src="{{ url('assets/img2.jpeg') }}" alt="Example Image">
            </div>

            <div class="d-md-block carousel-caption d-none">
                <h1>Shop here</h1>
                <p>New or Second-hand, Comrades got you</p>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    {{-- All products Display --}}

    <div class="container trending-products">

        <h1>Products</h1> 
        <div class="trending-wrapper">
        
            @foreach ($product as $item)          
                <div class="trending-item">  
                    <a href="details/{{$item['id']}}">             
                        <img src="image/{{ $item->images }}" alt="Photo of the product" class="product-img">
                        <h4>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <h5>{{ $item->price }}</h5>
                    </a>
                </div>  
            @endforeach
        </div><br><br>
    
        {{-- Phones Display --}}
        <a href="{{ route('phone') }}">
            <h2>Phones  accessories</h2>
            <h5>View more</h5>
        </a>
        <div class="trending-wrapper">
        @foreach ($phone as $item)          
                <div class="trending-item">  
                    <a href="details/{{$item['id']}}">             
                        <img src="image/{{ $item->images }}" alt="Photo of the product" class="product-img">
                        <h4>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <h5>{{ $item->price }}</h5>
                    </a>
                </div>  
            @endforeach
        </div><br><br>
        
        {{-- Electronics category --}}
        <a href="{{ route('electronic') }}">
            <h2>Electronics</h2>
            <h5>View more</h5>
        </a>
        <div class="trending-wrapper">
            @foreach ($electronic as $item)          
                <div class="trending-item">  
                    <a href="details/{{$item['id']}}">             
                        <img src="image/{{ $item->images }}" alt="Photo of the product" class="product-img">
                        <h4>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <h5>{{ $item->price }}</h5>
                    </a>
                </div>  
            @endforeach
        </div><br><br>

        {{-- Furniture Display --}}
        <a href="{{ route('furniture') }}">
            <h2>Furnitures</h2> 
            <h5>View more</h5>
        </a>
        <div class="trending-wrapper">
            @foreach ($furniture as $item)          
                <div class="trending-item">  
                    <a href="details/{{$item['id']}}">             
                        <img src="image/{{ $item->images }}" alt="Photo of the product" class="product-img">
                        <h4>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <h5>{{ $item->price }}</h5>
                    </a>
                </div>  
            @endforeach
        </div><br><br>
    
    
        {{-- Computer Accessories Display --}}
        <a href="{{ route('computer') }}">
            <h2>Computer Accessories</h2>
            <h5>View more</h5>
        </a>
        <div class="trending-wrapper">
            @foreach ($computer as $item)          
                <div class="trending-item">  
                    <a href="details/{{$item['id']}}">             
                        <img src="image/{{ $item->images }}" alt="Photo of the product" class="product-img">
                        <h4>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <h5>{{ $item->price }}</h5>
                    </a>
                </div>  
            @endforeach
        </div><br><br>

    
    
        {{-- Sports $Gaming --}}
        <a href="{{ route('sport') }}">
            <h2>Sports and Games</h2>
            <h5>View more</h5>
        </a>
        <div class="trending-wrapper">
            @foreach ($sport as $item)          
                <div class="trending-item">  
                    <a href="details/{{$item['id']}}">             
                        <img src="image/{{ $item->images }}" alt="Photo of the product" class="product-img">
                        <h4>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <h5>{{ $item->price }}</h5>
                    </a>
                </div>  
            @endforeach
        </div><br><br>
    
    
    
        {{-- Fashion Display --}}
        <a href="{{ route('fashion') }}">
            <h2>Fashion</h2>
            <h5>View more</h5>
        </a>
        <div class="trending-wrapper">
            @foreach ($fashion as $item)          
                <div class="trending-item">  
                    <a href="details/{{$item['id']}}">             
                        <img src="image/{{ $item->images }}" alt="Photo of the product" class="product-img">
                        <h4>{{ $item->title }}</h3>
                        <p>{{ $item->description }}</p>
                        <h5>{{ $item->price }}</h5>
                    </a>
                </div>  
            @endforeach
        </div><br><br>
    </div>

</div>
        
    
@endsection 
