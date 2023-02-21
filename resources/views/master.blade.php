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

    .container{
        width: 100% !important;
        margin-left: auto;
        margin-right: auto;
    }

    .trending-wrapper{
        width: 100% !important;
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
        
    }
    
    .trending-item:hover{
        transform: scale(1.01) !important;
    }

    .product-img {
        height: 200px !important;
        object-fit: cover;
        border-radius: 3px;
        width: 15vw;
    }

 
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


   /*  /* For screen larger than 1280(xl) */
 /*    @media(min-width:1280px){
        .container{
            max-width: :1380px;
        }

        .trending-item{
            float:left !important;
            width: 20% !important;
            max-width: 100%;
            display:block !important;        
        }
    }
 */
    /* For screen larger than 1024px(lg but less than 1280px) */
    /* @media(min-width:1024px){
        .container{
            max-width: 1280px;
        } 

        .lg-cols-6 {
            display:grid;
            grid-template-columns: repeat(6, minmax(0, 1fr));
        }

        .trending-item{
        float:left !important;
        width: 16.66% !important;
        max-width: 100%;
        display:block !important;
       
        
        }
    } */

    /* For screen larger than 768px(lg but less than 1024px) */
  /*   @media(min-width:768px){
        .container{
            max-width: 1024px;
        }

        .lg-cols-4 {
            display:grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .trending-item{
            float:left !important;
            width: 25% !important;
            max-width: 100%;
            display:block !important;
          
            
        }
    } */

    /* For screen larger than 640px(lg but less than 768px) */
     /*@media(min-width: 640px){
        

        .lg-cols-2 {
            display:grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .trending-item{
            float:left !important;
            width: 50% !important;
            max-width: 100%;
            display:block !important;
            
            
        }
    } */

  

    @media screen and (min-width: 1024px) {
        /* .trending-products {
            grid-template-columns: repeat(6, minmax(0, 1fr));
        }

        .trending-item{
            width: 16.66% !important;
            padding: 5px;
            padding: 5px;
        }

        .product-img{
            width: 15vw;
        } */

        .trending-item{
            flex: 100%;
            width: 100%;
        }
        
    }

    @media screen and (min-width: 768px) and (max-width: 1023px) {
        /* .trending-products {
            grid-template-columns: repeat(4, minmax(0, 1fr));
            padding: 5px;
        }

        .trending-item{
            width: 25% !important;
            padding: 5px;
            margin: 10px;
        }
        .product-img{
            width: 22vw;
        } */

        .trending-item{
            flex: 100%;
            width: 100%;
        }


    }

    @media screen and (min-width: 640px) and (max-width: 767px) {
        /* .trending-products {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .trending-item{
            width: 33.33% !important;
            padding: 5px;
            margin: 10px;
        }
        .product-img{
            width: 46vw;
        } */
        .trending-item{
            flex: 100%;
            width: 100%;
        }
    }

    @media screen and (min-width: 350px) and (max-width: 639px) {
     /*    .trending-products {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .trending-item{
            width: 50% !important;
            padding: 5px;
            margin: 10px;
        }
        .product-img{
            width: 46vw;
        } */

        .trending-item{
            flex: 100%;
            width: 100%;
        }
    }

    @media screen and (min-width: 0px) and (max-width: 349px) {
       /*  .trending-products {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        .trending-item{
            width: 90% !important;
            padding: 5px;
            margin: 10px;
        }

        .product-img{
            width:  70vw;
        } */

        .trending-item{
            flex: 100%;
            width: 100%;
        }
    }




    /* Footer  */

    .footer-container {
        display: flex;
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
