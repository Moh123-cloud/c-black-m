@extends('master')


@section('content')
    <div align="center" style="padding: 30px;">
        <div>
            @if(session()->has('success'))
                <div class="alert alert-success" id="alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('success') }}
                </div>
            @endif

        </div>
    </div>

     <h1 class="py hfs">Update your products!</h1>

    <form action="{{ route('updateproducts', $products->id) }}" class="sellForm form group" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title*</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{ $products->name }}"
                required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select required class="form-control" id="exampleFormControlSelect1" name="category" value="{{ $products->category }}" required>
                <option disabled selected>Select Category</option>
                <option>Phone & Accessories</option>
                <option>Electronics</option>
                <option>Fashion</option>
                <option>Furniture</option>
                <option>Sports & Gaming</option>
                <option>Computer Accessories</option>
            </select>

        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Description</label>
            <input type="text" name="description" class="form-control" id="formGroupExampleInput2"
                value="{{ $products->description }}" required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Location</label>
            <input type="text" name="location" class="form-control" id="formGroupExampleInput2"
                value="{{ $products->location }}" required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Price</label>
            <input type="number" name="price" class="form-control" id="formGroupExampleInput2" value="{{ $products->price }}"
                required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number (+254*********)</label>
            <input type=" number" name="phone" class="form-control" id="formGroupExampleInput2" value="{{ $products->phone }}"
                required pattern="[0-9,+]{13}">
        </div>

       <div class="form-group">
            <label for="">Upload Photo</label>
            <input type="file" name="file" value="{{ $products->gallery }}"  required>
       </div>

       <div class="form-group">
            <input type="hidden" name="user_id">
       </div>

       


        <button type="submit" class="btn btn-success">Update</button>

    </form>
@endsection
