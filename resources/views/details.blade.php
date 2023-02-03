@extends('master')

@section('content')   

        <div class="container detail-container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/image/{{ $product['images'] }}" alt="Product Image" class="detail-img">

                </div>

                <div class="col-sm-6">
                    <a href="{{ url('home') }}">Go Back</a>
                    <h2>{{ $product['title'] }}</h2>
                    <h3>Category: {{ $product['category'] }}</h3>
                    <h5>Description: {{ $product['description'] }}</h5>
                    <h5>Price: {{ $product['price'] }}</h5>
                    <h5>Location: {{ $product['location'] }}</h5>
                    <h5>Contact: {{ $product['phone'] }}</h5>
                    
                </div>
            </div>
        </div>  
    
@endsection 
