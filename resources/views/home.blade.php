@extends('master')

@section('content')

{{-- <div class="row"> --}}
    {{-- Owl Corousel --}}
   {{--  <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
                <img src="{{ url('assets/img2.jpeg') }}" class="carousel-img" alt="Example Image">
            </div>

            <div class="item d-block">
                <img src="{{ url('assets/img4.webp') }}" class="carousel-img"  alt="Example Image">
            </div>

            <div class="item d-block">
                <img src="{{ url('assets/img5.jpeg') }}" class="carousel-img"  alt="Example Image">
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
            <h2>Categories</h2>
    </section>
    <section id="feature" class="section-p1">
            <div class="fe-box">
                <a href="{{ route('phone') }}">
                    <img src="img/features/phone.webp" alt="">
                    <h6>Phones & Accessories</h6>
                </a>
            </div>
            <div class="fe-box">
                <a href="{{ route('furniture') }}">                   
                    <img src="img/features/seat.webp" alt="">
                    <h6>Furniture</h6>
                </a>
            </div>
            <div class="fe-box">
                <a href="{{ route('electronic') }}">   
                    <img src="img/features/speaker.webp" alt="">
                    <h6>Electronics</h6>
                </a>
            </div>
            <div class="fe-box">
                <a href="{{ route('computer') }}">                  
                    <img src="img/features/lapi.jpg" alt="">
                    <h6>Computer Accessories</h6>
                </a>
            </div>
            <div class="fe-box">
                <a href="{{ route('home1') }}">
                    <img src="img/features/fashion3.jpg" alt="">
                    <h6>Home & Office</h6>     
                </a>
            </div>
            <div class="fe-box">
                <a href="{{ route('fashion') }}">
                    <img src="img/features/fashion3.jpg" alt="">
                    <h6>Fashion</h6>     
                </a>
            </div>
    </section>


    {{-- All products Display --}}

        <section id="product1" class="section-p1">
            <h2>All Products</h2>
            <p><a href="{{ route('all') }}">See All</a></p>
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
        
        <section id="product1" class="section-p1">
              @if (count($phone) > 0)
                <a href="{{ route('phone') }}">
                    <h2>Phones & Accessories</h2>
                        <p><a href="{{ route('phone') }}">See All</a></p>
                </a>
            @endif
            <div class="pro-container">
                 @foreach ($phone as $item)          
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

        <section id="product1" class="section-p1">
              @if (count($electronic) > 0)
                <a href="{{ route('electronic') }}">
                    <h2>Electronics</h2>
                        <p><a href="{{ route('electronic') }}">See All</a></p>
                </a>
            @endif
            <div class="pro-container">
                 @foreach ($electronic as $item)          
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
        <section id="product1" class="section-p1">
              @if (count($home1) > 0)
                <a href="{{ route('home1') }}">
                    <h2>Home and Office</h2>
                        <p><a href="{{ route('home1') }}">See All</a></p>
                </a>
            @endif
            <div class="pro-container">
                 @foreach ($home1 as $item)          
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
        <section id="product1" class="section-p1">
              @if (count($furniture) > 0)
                <a href="{{ route('furniture') }}">
                    <h2>Furnitures</h2>
                        <p><a href="{{ route('furniture') }}">See All</a></p>
                </a>
            @endif
            <div class="pro-container">
                 @foreach ($furniture as $item)          
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
        <section id="product1" class="section-p1">
             @if (count($computer) > 0)
                <a href="{{ route('computer') }}">
                    <h2>Computer Accessories</h2>
                        <p><a href="{{ route('computer') }}">See All</a></p>
                </a>
            @endif
            
            <div class="pro-container">
                 @foreach ($computer as $item)          
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
        <section id="product1" class="section-p1">
              @if (count($fashion) > 0)
                <a href="{{ route('fashion') }}">
                    <h2>Fashion</h2>
                        <p><a href="{{ route('fashion') }}">See All</a></p>
                </a>
            @endif
            <div class="pro-container">
                 @foreach ($fashion as $item)          
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
        <section id="product1" class="section-p1">
              @if (count($sport) > 0)
                <a href="{{ route('sport') }}">
                    <h2>Sports</h2>
                        <p><a href="{{ route('sport') }}">See All</a></p>
                </a>
            @endif
            <div class="pro-container">
                 @foreach ($sport as $item)          
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

          <section id="banner" class="section-m1">
                <h4>Repair Services</h4>
                <h2>Up to <span>70% off</span>-  All T-shirts and Accessories</h2>
                <button class="normal">Explore More</button>
            </section>
 



        






        {{-- <div class="trending-wrapper">

            <div class="product-header">
                <a href="{{ route('all') }}" class="hfs">
                    All Products
                    <h5>View more</h5>
                </a>
            </div>
            
            <div class="products-list">
                @foreach ($product as $item)          
                    <div class="trending-item">  
                        <a href="details/{{$item['id']}}">  
                            <div class="product-img-wrapper">
                                <img src="image/{{ $item->gallery }}" alt="Photo of the product" class="product-img">                           
                            </div>  
                            <div class="product-desc">
                                <h5>{{ $item->name }}</h5>
                                <p>{{ $item->description }}</p>
                                <h6> Ksh {{ $item->price }}</h6>            
                            </div>         
                        </a>
                    </div>  
                @endforeach
            </div>
        </div> --}}

        

       

    
        {{-- Phones Display --}}
       {{--  <div class="trending-wrapper">

            <div class="product-header"> 
                @if (count($phone) > 0)
                    <a href="{{ route('phone') }}" class="hfs">
                        <h2>Phones  accessories</h2>
                        <h5>View more</h5>
                    </a>

                @endif
            </div>

            <div class="products-list">

                @foreach ($phone as $item)              
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
        </div>
     --}}
        {{-- Home Display --}}
      {{--   <div class="trending-wrapper">

            <div class="product-header"> 
                @if (count($home1) > 0)
                    <a href="{{ route('home1') }}" class="hfs">
                        <h2>Home & Office</h2>
                        <h5>View more</h5>
                    </a>

                @endif
            </div>

            <div class="products-list">

                @foreach ($home1 as $item)              
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
        </div> --}}
        
        {{-- Electronics category --}}
       {{--  <div class="trending-wrapper">
            <div class="product-header">
                @if (count($electronic) > 0)
                    <div class="all-products-link">
                        <a href="{{ route('electronic') }}" class="hfs">
                            <h2>Electronics</h2> 
                            <h5>View more</h5>
                        </a>

                    </div>

                @endif
            </div>

            <div class="products-list">
                @foreach ($electronic as $item) 
                    
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
        </div> --}}


        {{-- Furniture Display --}}
        {{-- <div class="trending-wrapper">
            <div class="product-header">
                @if (count($furniture) > 0)
                    <div class="all-products-link">
                        <a href="{{ route('furniture') }}" class="hfs">
                            <h2>Furnitures</h2> 
                            <h5>View more</h5>
                        </a>

                    </div>

                @endif
            </div>

            <div class="products-list">
                @foreach ($furniture as $item) 
                    
                    <div class="trending-item">  
                        <a href="details/{{$item['id']}}">             
                            <img src="image/{{ $item->gallery }}" alt="Photo of the product" class="product-img">
                            <div class="product-desc">
                                <h4>{{ $item->name }}</h3>
                                <p>{{ $item->description }}</p>
                                <h5>Ksh{{ $item->price }}</h5>
                            </div>
                        </a>
                    </div>  

                    
                @endforeach
            </div>
        </div> --}}
    
    
        {{-- Computer Accessories Display --}}
      {{--   <div class="trending-wrapper">
            <div class="product-header">
                @if (count($computer) > 0)
                    <a href="{{ route('computer') }}" class="hfs">
                        <h2>Computer Accessories</h2>
                        <h5>View more</h5>
                    </a>
                @endif
            </div>

            <div class="products-list">
                @foreach ($computer as $item)          
                        
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
        </div><br><br> --}}

        {{-- Health & Beauty Display --}}
        {{-- <div class="trending-wrapper">
            <div class="product-header">
                @if (count($health) > 0)
                    <a href="{{ route('health') }}" class="hfs">
                        <h2>Health & Beauty</h2>
                        <h5>View more</h5>
                    </a>
                @endif
            </div>

            <div class="products-list">
                @foreach ($health as $item)          
                        
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
        </div><br><br> --}}

    
    
        {{-- Sports $Gaming --}}
        
       {{--  <div class="trending-wrapper">
            <div class="product-header">
                @if (count($sport) > 0)
                        
                    <a href="{{ route('sport') }}" class="hfs">
                        <h2>Sports and Games</h2>
                        <h5>View more</h5>
                    </a>
    
                @endif
            </div>

            <div class="products-list">
                @foreach ($sport as $item)  
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
        </div><br><br> --}}
    
    
    
        {{-- Fashion Display --}}
        
   {{--      <div class="trending-wrapper">
            <div class="product-header">
                @if (count($fashion) > 0)
                
                    <a href="{{ route('fashion') }}" class="hfs">
                        <h2>Fashion</h2>
                        <h5>View more</h5>
                    </a>
    
                @endif
            </div>

            <div class="products-list">

                @foreach ($fashion as $item)
    
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
        </div>
    </div> --}}


        {{-- Others Display --}}
        
        {{-- <div class="trending-wrapper">
            <div class="product-header">
                @if (count($other) > 0)
                
                    <a href="{{ route('other') }}" class="hfs">
                        <h2>Others</h2>
                        <h5>View more</h5>
                    </a>
    
                @endif
            </div>

            <div class="products-list">

                @foreach ($other as $item)
    
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
        </div> 
    </div>

{{-- </div> --}}
        
    
@endsection 
