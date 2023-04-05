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
    
    <h1 class="py hfs">Sell Here!</h1>


    <form action="{{ url('sellproducts') }}" class="sellForm form group" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title*</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="eg Phone"
                required maxlength="40">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Category*</label>
            <select class="form-control" id="exampleFormControlSelect1" name="category" required>
                <option disabled selected>Select Category</option>
                <option>Phone & Accessories</option>
                <option>Electronics</option>
                <option>Fashion</option>
                <option>Furniture</option>
                <option>Sports & Gaming</option>
                <option>Computer Accessories</option>
                <option>Home & Office</option>
                <option>Health & Beauty</option>
                <option>Others</option>
                
            </select>

        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Description*</label>
            <input type="text" name="description" class="form-control" id="formGroupExampleInput2"
                placeholder="eg Has 128gb rom and 8gb ram" maxlength="50" required>
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Location*</label>
            <input type="text" name="location" class="form-control" id="formGroupExampleInput2"
                placeholder="eg Slaughter" required maxlength="50">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Price*</label>
            <input type="number" name="price" class="form-control" id="formGroupExampleInput2" placeholder="eg Ksh 12000"
                required pattern="[0-9]{10}">
        </div>

        <div class="form-group">
            <label for="formGroupExampleInput2">Phone Number (+254*********)*</label>
            <input type=" tel" name="phone" class="form-control" id="formGroupExampleInput2" placeholder="eg +254712345678"
                required pattern="[0-9,+]{13}">
        </div>

       <div class="form-group">
            <label for="">Upload Photo*</label>
            <input type="file" name="file" accept="image/png,image/jpeg,image/jpg" required>
       </div>

       <div class="form-group">
            <input type="hidden" name="user_id">
       </div>

       


        <button type="submit" class="btn btn-success">Submit</button>

    </form>
@endsection
