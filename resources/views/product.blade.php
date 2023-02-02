@extends('master')


@section('content')
@php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
@endphp
    <h1>Your Products</h1>

    @if($products !== null)
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">category</th>
            <th scope="col">Location</th>
            <th scope="col">Price</th>
            <th scope="col">Buttons</th>
            </tr>
        </thead>
    @foreach($products as $item) 
        <tbody>
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->location}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->images}}</td>
                <td>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </td>

            </tr>
        </tbody>
            @endforeach
    </table> 

    @else
        {{'You have no products!'}}
    @endif

        

    

@endsection