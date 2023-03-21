@extends('master')

@section('content')
   

    <div class="trending-wrapper">
        <h1 class="py hfs">Searched Items</h1>
    
        @foreach ($products as $item)          
            <div class="trending-item">  
                <a href="details/{{$item['id']}}">             
                    <img src="image/{{ $item->gallery }}" alt="Photo of the product" class="product-img">
                    <h3>{{ $item->name }}</h3>
                    <p>{{ $item->description }}</p>
                    <h4>{{ $item->price }}</h4>
                </a>
            </div>  
        @endforeach
    </div>   

        
    
@endsection 
