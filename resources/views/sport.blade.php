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
    
        {{-- Sports $Gaming --}}
        <div class="trending-wrapper">
            <div class="product-header">               
                <a href="{{ route('sport') }}" class="hfs">
                    <h2>Sports and Games</h2>
                </a>
            </div>

            <div class="products-list">
                @foreach ($product as $item)  
                    <div class="trending-item">  
                        <a href="details/{{$item['id']}}">             
                            <img src="image/{{ $item->gallery }}" alt="Photo of the product" class="product-img">
                            <div class="product-desc">
                                <h4>{{ $item->name }}</h3>
                                <p>{{ $item->description }}</p>
                                <h5>Ksh {{ $item->price }}</h5>
                            </div>
                        </a>
                    </div>               
                @endforeach
            </div>
        </div><br><br>
    

    </div>


        
    
@endsection 
