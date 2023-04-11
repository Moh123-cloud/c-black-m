@extends('master')

@section('content')
    {{-- Owl Corousel --}}
    {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
    </div> --}}

        
         <section id="hero">
            <h4>For comrades by comrades</h4>
            <h2 class="hero-h2">Super value deals</h2>
            <h1>on all products</h1>
            <p>Save more with coupons & up to 70% off</p>
            <button>Shop Now</button>
        </section>
 

        <section id="product1" class="section-p1">
            <h2>Furnitures</h2>
            <div class="pro-container">
                 @foreach ($product as $item)          
                    <div class="pro">  
                        <a href="details/{{$item['id']}}">  
                                <img src="image/{{ $item->gallery }}" alt="Photo of the product" class="">                           
                            
                            <div class="des">
                                <h5>{{ $item->name }}</h5>
                                <span>{{ $item->description }}</span>
                                <h4> Ksh {{ $item->price }}</h4>            
                            </div>         
                        </a>
                    </div>  
                @endforeach
            </div>

        </section>


        
    
@endsection 
