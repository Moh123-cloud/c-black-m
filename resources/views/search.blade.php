@extends('master')

@section('content')
   

    <div class="trending-wrapper">
        <h1 class="py hfs" style="margin-bottom: 50px;">Searched Items</h1>
    
        <div class="products-list">

                @foreach ($products as $item)              
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

        
    
@endsection 
