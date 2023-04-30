@extends('master')

@section('content')   

        {{-- <div class="container detail-container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="details-img-wrapper">

                        <img src="/image/{{ $product['gallery'] }}" alt="Product Image" class="detail-img"  style="height: 70vh !important">
                    </div>
 
                </div>

                <div class="col-sm-6">
                    <a href="{{ url('/') }}">Go Back</a>
                    <h2>{{ $product['name'] }}</h2>
                    <h3>Category: {{ $product['category'] }}</h3>
                    <h4>Description: {{ $product['description'] }}</h4>
                    <h3>Price: Ksh {{ $product['price'] }}</h3>
                    <h5>Location: {{ $product['location'] }}</h5>
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
        </div>   --}}

        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="/image/{{ $product['gallery'] }}" width="100%" id="MainImg" alt="Product Image">
            </div>
            <div class="single-pro-details">
                <h6>Fashion</h6>
                <h4>Title: {{ $product['name'] }}</h4>
                <h2>Price: {{ $product['price'] }}</h2>
                <h4>Product Details</h4>
                <span>{{ $product['description'] }}</span>
                <h5>Location: {{ $product['location'] }}</h5>
                <h5>Contacts:  {{ $product['phone'] }} </h5>
                <h4>Safety Tips</h4>
                <ul>
                    <li>Meet in a public place</li>
                    <li>Bring a friend</li>
                    <li>Inspect product before buying</li>
                    <li>Use secure payment methods</li>
                    <li>Don't give out personal information</li>
                    <li>Trust your instincts</li>
                </ul>
              

            </div>
            

        </section>
    
@endsection 
