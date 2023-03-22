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

            <div class="tips">
                <ol>
                    <h3>Tips</h3>
                    <li>Meet in public.</li>
                    <li>If possible, bring a friend.</li>
                    <li>Inspect the product thoroughly before buying.</li>
                    <li>Only buy once fully satisfied with the product.</li>
                    <li>Use secure payment methods.</li>
                    <li>Trust your instincts!</li>
                    <li>Be safe!</li>


                </ol>
            </div>
        </div>  
    
@endsection 
