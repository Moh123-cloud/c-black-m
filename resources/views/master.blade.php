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

    ul {
        list-style-type: none;
    }


     /* Search */
    .search {
        width: 400px !important;

    }


    /* Corousel */
    .carousel-item img {
        width: 100vw;
        height: 50vh !important;
    }


    /* Products Page*/

    .trending-products{
        margin: auto;
    }

    .trending-wrapper{
        display: block;                                                                                        
    }

    .products-list{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .trending-item{
        width: 15%;
        margin: 10px;
    }

    .product-img{
        width: 100%;
        height: 200px;
        border-radius: 3px;
    }

    .trending-item:hover{
        transform: scale(1.01) !important;
    }


    /* Media query */
    @media screen and (min-width: 0px) {
        .trending-item{
            width: 50%;
            margin: 10px;
        }

        .product-img{
            width: 100%;
            height: 100px;
            border-radius: 3px;
        }

        .footer-col {
        width: 90%;
        text-align: center;
    }
    }

    @media screen and (min-width: 320px) {
        .trending-item{
            width: 30%;
            margin: 10px;
        }

        .product-img{
            width: 100%;
            height: 100px;
            border-radius: 3px;
        }
    }

    @media screen and (min-width: 480px) {
        .trending-item{
            width: 24%;
            margin: 10px;
        }

        .product-img{
            width: 100%;
            height: 150px;
            border-radius: 3px;
        }

        .footer-col {
            width: 45%;
            text-align: center;
        }
    }

    @media screen and (min-width: 768px) {
        .trending-item{
            width: 20%;
            margin: 10px;
        }

        .product-img{
            width: 100%;
            height: 150px;
            border-radius: 3px;
        }

        .footer-col {
            width: 30%;
            text-align: center;
        }
    }

    @media screen and (min-width: 1024px) {
        .trending-item{
            width: 16.66%;
            margin: 10px;
        }

        .product-img{
            width: 100%;
            height: 150px;
            border-radius: 3px;
        }

        .footer-col {
            width: 24%;
            text-align: center;
        }
    }

    @media screen and (min-width: 1200px) {
        .trending-item{
            width: 14%;
            margin: 10px;
        }

        .product-img{
            width: 100%;
            height: 150px;
            border-radius: 3px;
        }
    }


    
   


    /* Products Page*/
/* 
    .trending-container{
        width: 100% !important;
        margin-left: auto;
        margin-right: auto;
    }

    .trending-wrapper{
        width: 98vw !important;
        margin: 2px !important;
        margin-bottom: 50px;
        display: flex !important;
        flex-wrap: wrap !important;
    }

    .trending-item{
        float:left !important;
        width: 16.66% !important;
        max-width: 100%;
        padding: 5px;
        flex: 1 !important;
        margin: 0.5px !important;
        text-align: center !important;
        display: inline !important;
        
    }
    
    .trending-item:hover{
        transform: scale(1.01) !important;
    }

    .product-img-wrapper{
        overflow: hidden;
    }

    .product-img {
        height: 200px !important;
        object-fit: cover;
        border-radius: 3px;
        width: 15vw;
    }

    .product-header{
        display: block;
    }

    .products-list{
        display: block;
    } */

 
    /* Sell form */
    .sellForm {
        margin-top: 20px;
        margin-left: 40px;
        margin-right: 40px;
        padding: 10px;
    }

   

    
    /* Details Page */
    .detail-container{
        margin: 50px;
    }

    .detail-img{
        width: 400px !important;
        height: 350px !important;
    }


    /* Update page */
    .update-img{
        width: 60px !important;
        height: 50px !important;
    }
    


    a{
        text-decoration:none !important;
    }

    a:hover{
        color:blue !important;
    }




    /* Footer  */

    .footer-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
        background-color: #333;
        color: #fff;
        margin-top: 100px;
        margin-bottom: 50px;
    }

    

    .footer-col {
        width: 30%;
        text-align: center;
    }


</style>

</html>
