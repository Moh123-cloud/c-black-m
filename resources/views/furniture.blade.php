@extends('master')

@section('content')
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

    {{-- Furniture Display --}}
    {{-- <div class="trending-wrapper slider-container" type>
        <h2>Furnitures</h2>
        @foreach ($product as $item)          
            <div class="trending-item">  
                <a href="details/{{$item['id']}}">             
                    <img src="image/{{ $item->images }}" alt="Photo of the product" class="product-img">
                    <h4>{{ $item->title }}</h3>
                    <p>{{ $item->description }}</p>
                    <h5>Ksh {{ $item->price }}</h5>
                </a>
            </div>  
        @endforeach
    </div><br><br>
    <br><br> --}}

    <div class="trending-wrapper">
        <div class="product-header">
            <div class="all-products-link">
                <a href="{{ route('furniture') }}">
                    <h2>Furnitures</h2> 
                </a>
            </div>
        </div>

        <div class="products-list">
            @foreach ($product as $item) 
                
                <div class="trending-item">  
                    <a href="details/{{$item['id']}}">             
                        <img src="image/{{ $item->gallery }}" alt="Photo of the product" class="product-img">
                        <h4>{{ $item->name }}</h3>
                        <p>{{ $item->description }}</p>
                        <h5>Ksh{{ $item->price }}</h5>
                    </a>
                </div>  

                
            @endforeach
        </div>
    </div>



        
    
@endsection 
