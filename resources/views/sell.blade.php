@extends('master')


@section('content')
    <h1>Sell Here!</h1>


    <form action="{{ route('sell') }}" class="sellForm form group" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title*</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="eg Phone">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category">
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
                placeholder="eg Has 128gb rom and 8gb ram">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Location</label>
            <input type="text" name="location" class="form-control" id="formGroupExampleInput2"
                placeholder="eg Slaughter">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Price</label>
            <input type="text" name="price" class="form-control" id="formGroupExampleInput2"
                placeholder="eg Ksh 12000">
        </div>

        <div class="form-group">
            <label for="images">Upload Images (You can upload upto 5 images)</label>
            <textarea class="form-control" id="images" name="images" rows="10"></textarea>
            <input type="file" id="imagesInput" name="images[]" multiple style="display:none">
        </div>


        <button class="btn btn-success">Submit</button>

    </form>

    <script src="{{ mix('js/script.js', 'resources') }}"></script>
@endsection
