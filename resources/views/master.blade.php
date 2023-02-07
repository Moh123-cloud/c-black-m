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

    .container{
        align-items: center;
        justify-content: center;
    }

    .product-img {
        /* width: 100px !important; */
        height: 200px !important;
        object-fit: cover;
        border-radius: 3px;
    }

    .category-block{
        display: flex !important;
        flex-wrap: wrap !important;
        margin: 20px;

    }
 
    .trending-wrapper{
        /* margin: 10px !important;
        margin-bottom: 30px; */
    }

    .trending-item{
        float:left !important;
       /*  width: 20% !important; */
        max-width: 100%;
        display:block !important;
        
    }

    .trending-item:hover{
        transform: scale(1.01) !important;
    }

    .detail-container{
        margin: 50px;
    }

    .update-img{
        width: 60px !important;
        height: 50px !important;
    }
    .detail-img{
        width: 400px !important;
        height: 350px !important;
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


    /* For screen larger than 1280(xl) */
    @media(min-width:1280px){
        .container{
            max-width: :1280px;
        }
    }

    /* For screen larger than 1024px(lg but less than 1280px) */
    @media(min-width:1024px){
        .container{
            max-width: 1280px;
        }

        .lg-cols-6 {
            display:grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
        }
    }

    /* For screen larger than 768px(lg but less than 768px) */
    @media(min-width:768px){
        .container{
            max-width: 768px;
        }

        .lg-cols-4 {
            display:grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }
    }

    /* For screen larger than 640px(lg but less than 768px) */
    @media(min-width: 640px){
        .container{
            max-width: 640px;
        }

        .lg-cols-4 {
            display:grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

</style>

</html>
