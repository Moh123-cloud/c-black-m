@extends('master')


@section('content')
    <h1>Sell Here!</h1>


    <form action="{{ url('sellproducts') }}" class="sellForm form group" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title*</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="eg Phone"
                required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category" required>
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
                placeholder="eg Has 128gb rom and 8gb ram" required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Location</label>
            <input type="text" name="location" class="form-control" id="formGroupExampleInput2"
                placeholder="eg Slaughter" required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Price</label>
            <input type="text" name="price" class="form-control" id="formGroupExampleInput2" placeholder="eg Ksh 12000"
                required>
        </div>

       <div class="form-group">
        <label for="">Upload Photo</label>
        <input type="file" name="file">
       </div>


        <button type="submit" class="btn btn-success">Submit</button>

    </form>
@endsection
