@extends('master')


@section('content')

    <div align="center" style="padding: 30px;">
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success" id="alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif

        </div>
    </div>

    <h1 class="py hfs">Your Products</h1> 

    @if(count($products)>0)

    <h3 style="font-style: italic; margin-top: 20px; margin-bottom: 10px">Kindly delete products after selling to avoid intrest from other users.</h3>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Location</th>
            <th scope="col">Price</th>
            <th scope="col">Buttons</th>
            </tr>
        </thead>
    @foreach($products as $item) 
        <tbody>
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>
                    <img src="/image/{{ $item->gallery }}" alt="Product Image" class="update-img">
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->location}}</td>
                <td>{{$item->price}}</td>
                <td>

                    <form action="{{ route('update', $item->id) }}" method="put">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>

                    <form action="{{ route('delete', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </td>

            </tr>
        </tbody>
            @endforeach
    </table> 

    @else
        <h3 class="products-none my">You have not posted any products! To post <a href="{{ route('sell') }}">Click here</a></h3>
    @endif



        
    <script type="text/javascript">

        $("document").ready(function(){
            setTime(function()
            {
                $("div.alert").remove();
            },3000);
        });

    </script>
    

@endsection