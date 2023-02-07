@extends('master')


@section('content')
    <h1>Update your products</h1>


    <form action="{{ route('updateproducts', $products->id) }}" class="sellForm form group" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title*</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput" value="{{ $products->title }}"
                required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category" value="{{ $products->category }}" required>
                <option>Select</option>
                <option>Phone $ Accessories</option>
                <option>Electronics</option>
                <option>Fashion</option>
                <option>Furniture</option>
                <option>Sports $ Gaming</option>
                <option>Computer Accessories</option>
            </select>

        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Description</label>
            <input type="text" name="description" class="form-control" id="formGroupExampleInput2"
                value="{{ $products->description }}">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Location</label>
            <input type="text" name="location" class="form-control" id="formGroupExampleInput2"
                value="{{ $products->location }}" required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Price</label>
            <input type="text" name="price" class="form-control" id="formGroupExampleInput2" value="{{ $products->price }}"
                required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number</label>
            <input type=" number" name="phone" class="form-control" id="formGroupExampleInput2" value="{{ $products->phone }}"
                required>
        </div>

       <div class="form-group">
            <label for="">Upload Photo</label>
            <input type="file" name="file" value="{{ $products->images }}"  required>
       </div>

       <div class="form-group">
            <input type="hidden" name="user_id">
       </div>

       


        <button type="submit" class="btn btn-success">Update</button>

    </form>
@endsection
