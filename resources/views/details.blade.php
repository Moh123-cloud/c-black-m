@extends('master')

@section('content')   

        <div class="container detail-container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="/image/{{ $product['gallery'] }}" alt="Product Image" class="detail-img">

                </div>

                <div class="col-sm-6">
                    <a href="{{ url('/') }}">Go Back</a>
                    <h2>{{ $product['name'] }}</h2>
                    <h3>Category: {{ $product['category'] }}</h3>
                    <h4>Description: {{ $product['description'] }}</h4>
                    <h4>Price: Ksh {{ $product['price'] }}</h4>
                    <h4>Location: {{ $product['location'] }}</h4>
                    <h4>Contact: {{ $product['phone'] }}</h4>
                    
                </div>
            </div>
        </div>  
    
@endsection 
