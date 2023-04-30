@extends('master')

@section('content')
    

        <section id="hero">
            <h4>For comrades by comrades</h4>
            <h2 class="hero-h2">Super value deals</h2>
            <h1>on all products</h1>
            <p>Save more with coupons & up to 70% off</p>
            <button>Shop Now</button>
        </section>
        
        <section id="product1" class="section-p1">
            <h2>Computer Accessories</h2>
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
