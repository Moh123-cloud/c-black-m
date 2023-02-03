<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Black Market</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    {{-- jquery minified --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>

<body>
    
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}

</body>

<style>
    .carousel-item img {
        width: 70vw;
        height: 50vh !important;
    }

    .sellForm {
        margin-top: 20px;
        margin-left: 40px;
        margin-right: 40px;
        padding: 10px;
    }

    .search {
        width: 1000px;

    }

    .product-img {
        /* width: 100px !important; */
        height: 200px !important;
        border-radius: 3px;
    }

    .category-block{
        display: block !important;
    }

    .trending-wrapper{
        margin: 30px;
        margin-bottom: 30px;
    }

    .trending-item{
        float:left !important;
        width: 20% !important;
        margin: 3 px;
        padding: 2px;
    }

    .trending-item:hover{
        transform: scale(1.01) !important;
    }

    .detail-container{
        margin: 50px;
    }

    .detail-img{
        width: 95% !important;
        height: 50vh !important;
    }

    .search-box{
        width: 500px !important;
    }

    a{
        text-decoration:none !important;
    }

    a:hover{
        color:blue !important;
    }

</style>

</html>
