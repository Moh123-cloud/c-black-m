<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BlackM</title>

    {{-- Font Awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    /* Navigation Bar */
@import url("https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Spartan", sans-serif;
}

/* colors 
1. #222831 -- background dark mode
2. #EEEEEE -- Good with a dark background for h6;
3. #4F8A8B -- good color for background
4. #FBD46D -- good color for header only
 */

html {
  scroll-behavior: smooth;
}

/* Global Styles */

h1 {
  font-size: 50px;
  line-height: 64px;
  color: #222;
}

h2 {
  font-size: 46px;
  line-height: 54px;
  color: #222;
}

h4 {
  font-size: 20px;
  color: #222;
}

/* ===============added h5 for products page================== */
h5 {
  font-size: 16px;
  line-height: 40px;
}

/* =============================================== */

h6 {
  font-weight: 700;
  font-size: 12px;
}

p {
  font-size: 16px;
  color: #465b52;
  margin: 15px 0 20px 0;
}

.section-p1 {
  padding: 40px 80px;
}

.section-m1 {
  margin: 40px 0;
}

body {
  width: 100%;
}

/* =======================after adding blackM logo i adjusted the width========================== */
.logo {
  width: 94px;
}

/* ======================================================== */

#icon {
  width: 24px;
  cursor: pointer;
}

/* -------------searchbox------------------ */


/* ===================modified search bar======================== */


/* ==============added margin left for blackM logo======================= */
.searchbox {
  position: relative;
  height: 40px;
  width: 400px;
  margin: 10px auto;
  overflow: hidden;
  background: none;
  color: #465b52;
  perspective: 1800px;
  perspective-origin: 40% 40%;
  transform-style: preserve-3d;
  border-radius: 10px;
  background-color: #fff;
  /* margin-left: 10px; */

}

.searchbox input {
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  padding-left: 8px;
  padding-right: 44px;
  border: none;
  font-size: 1em;
  color: inherit;
  background: none;
  outline: none;
}
.searchbox button {
  position: absolute;
  z-index: 1;
  right: 0px;
  top: 0px;
  height: 100%;
  width: 44px;
  border: none;
  background: none;
  font-size: 1.4em;
  color: inherit;
  cursor: pointer;
}

/* ========================================================= */


/* -------------------------------- */

#header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 80px;
  background-color: #E3E6F3;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
  z-index: 999;
  position: sticky;
  top: 0;
  left: 0;
}


#navbar {
  display: flex;
  align-items: center;
  justify-content: center;
}

#navbar li {
  list-style: none;
  padding: 0 20px;
  position: relative;
}

#navbar li a {
  text-decoration: none;
  font-size: 16px;
  font-weight: 600;
  color: #4F8A8B;
  transition: 0.3s ease;
}

#navbar li a:hover,
#navbar li a.active {
  color: yellowgreen;
}

#navbar li a.active::after,
#navbar li a:hover::after {
  content: "";
  width: 30%;
  height: 2px;
  background: yellowgreen;
  position: absolute;
  bottom: -4px;
  left: 20px;
}

#mobile {
  display: none;
  align-items: center;
}

#close {
  display: none;
}

/* #icon {
  position: absolute;
  left: 30px;
  top: 250px;
  width: 30px;
} */

#hero {
  background-image: url("img/hero5.jpg");
  height: 90vh;
  width: 100%;
  background-position: top 25% right 0;
  background-size: cover;
  padding: 0 80px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}

#hero h4 {
  padding-bottom: 15px;
}

#hero h2 {
  color: #4F8A8B;
}

#hero h1 {
  color: yellowgreen;
}

#hero button {
  background-image: url("img/button.png");
  background-color: transparent;
  color: yellowgreen;
  border: 0;
  padding: 14px 80px 14px 65px;
  background-repeat: no-repeat;
  cursor: pointer;
  font-weight: 700;
  font-size: 15px;
}


.section-p1 {
  padding: 40px 80px;
}

.section-m1 {
  margin: 40px 0;
}

button.normal {
  font-size: 14px;
  font-weight: 600;
  padding: 15px 30px;
  color: #000;
  background-color: #fff;
  border-radius: 4px;
  cursor: pointer;
  border: none;
  outline: none;
  transition: 0.2s;
}

button.white {
  font-size: 13px;
  font-weight: 600;
  padding: 11px 18px;
  color: #fff;
  background-color: transparent;
  border-radius: 4px;
  cursor: pointer;
  border: 1px solid #fff;
  outline: none;
  transition: 0.2s;
}

#feature {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}

#feature .fe-box {
  width: 180px;
  text-align: center;
  padding: 25px 15px;
  box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
  border: 1px solid #cce7d0;
  border-radius: 4px;
  margin: 15px 0;
}

#feature .fe-box:hover {
  box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);
}

#feature .fe-box img {
  width: 100%;
  margin-bottom: 10px;
}

#feature .fe-box h6 {
  padding: 9px 8px 6px 8px;
  line-height: 1;
  border-radius: 4px;
  display: inline-block;
  color: #1a1a1a;
  /* background-color: #fddde4; */
}

/* #feature .fe-box:nth-child(2) h6{
  background-color: #cdebbc;
}

#feature .fe-box:nth-child(3) h6{
  background-color: #d1e8f2;
}

#feature .fe-box:nth-child(4) h6{
  background-color: #cdd4f8;
}

#feature .fe-box:nth-child(5) h6{
  background-color: #f6dbf6;
}

#feature .fe-box:nth-child(6) h6{
  background-color: #fff2e6;
} */


#product1 {
  text-align: center;
}

.pro {
  width: 23%;
  max-width: 250px;
  padding: 0px;
  border: 1px solid #cce7d0;
  border-radius: 10px;
  cursor: pointer;
  box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
  margin: 15px 0;
  transition: 0.2s ease;
  position: relative;
}

#product1 .pro:hover {
  box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
}

#product1 .pro img {
  width: 100%;
  border-radius: 1px;
}

#product1 .pro .des {
  text-align: start;
  padding: 5px;
}

#product1 .pro .des span{
  color: #606063;
  font-size: 12px;
}

#product1 .pro .des h5 {
  padding-top: 7px;
  color: #1a1a1a;
  font-size: 14px;
}

#product1 .pro .des i {
  font-size: 12px;
  color: rgb(243, 181, 25);
}


#product1 .pro .des h4 {
  padding-top: 2px;
  font-size: 15px;
  font-weight: 700;
  color: yellowgreen;
}
/* 
#product1 .pro .cart {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50px;
  background-color: #e8f6ea;
  color: yellowgreen;
  border: 1px solid #cce7d0;
  position: absolute;
  bottom: 20px;
  right: 10px;
} */

#product1 .pro-container {
  display: flex;
  justify-content: space-between;
  padding-top: 20px;
  flex-wrap: wrap;
}


#banner {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-image: url("img/banner/b2.jpg");
  width: 100%;
  height: 40vh;
  background-position: center;
}

#banner h2 {
  color: #fff;
  font-size: 16px;
  padding: 10px 0;
}

#banner h2 span {
  color: #ef3636;
}

#banner button:hover {
  background: #4F8A8B;
  color: #fff;
}

#sm-banner {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

#sm-banner .banner-box {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  background-image: url("img/banner/b17.jpg");
  min-width: 550px;
  height: 50vh;
  background-position: center;
  padding: 30px;
}

#sm-banner h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 300;
}

#sm-banner h2 {
  color: #fff;
  font-size: 20px;
  font-weight: 800;
  margin-bottom: 15px;
}

#sm-banner span {
  color: #fff;
  font-size: 28px;
  font-weight: 800;
  margin-bottom: 15px;
}

#sm-banner .banner-box:hover button {
  background-color: #4F8A8B;
  border: 1px solid #4F8A8B;

}

#sm-banner .banner-box2 {
  background-image: url("img/banner/b10.jpg");
}

#newsletter {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  align-items: center;
  background-image: url("img/banner/b14.png");
  background-repeat: no-repeat;
  background-position: 20% 30%;
  background-color: #041e42;
}

#newsletter h4 {
  font-size: 22px;
  font-weight: 700;
  color: #fff;
}

#newsletter p {
  font-size: 14px;
  font-weight: 600;
  color: #818ea0;
}

#newsletter p span {
  color: yellowgreen;
}

#newsletter .form {
  display: flex;
  width: 40%;
}

#newsletter input {
  height: 3.125rem;
  padding: 0 1.25em;
  font-size: 14px;
  width: 100%;
  border: 1px solid transparent;
  border-radius: 4px;
  outline: none;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

#newsletter button {
  background-color: #088178;
  color: #fff;
  white-space: nowrap;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

footer {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

footer .col {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-bottom: 20px;
}

footer .logo {
  margin-bottom: 30px;
}

footer h4 {
  font-size: 14px;
  padding-bottom: 20px;
}

footer p {
  font-size: 13px;
  margin: 0 0 8px 0;
}

footer a {
  font-size: 13px;
  text-decoration: none;
  color: #222;
  margin: 10px;
}

footer .follow i {
  color: #465b52;
  padding-right: 4px;
  cursor: pointer;
}

footer .install .row img {
  border: 3px solid #088178;
  border-radius: 6px;
}

footer .install img{
  margin: 16px 0 15px 0;
}

footer .follow i:hover,
footer a:hover {
  color: #088178;
}

footer .copyright {
  text-align: center;
  width: 100%;
}

footer .pay {
  width: 80px;
  margin-top: -10px;
}


/* ==================products page still under construction================= */


#prodetails .single-pro-image {
  width: 40%;
  margin-right: 50px;
}

#prodetails{
  display: flex;
  margin-top: 20px;
}

.small-img-group {
  display: flex;
  justify-content: space-between;
}

.small-img-col {
  flex-basis: 24%;
  cursor: pointer;
}

#prodetails .single-pro-details {
  width: 50%;
  padding-top: 30px;
}

#prodetails .single-pro-details h4 {
  padding: 40px 0 20px 0;
}

#prodetails .single-pro-details h2 {
  font-size: 26px;
}

#prodetails .single-pro-details span {
  line-height: 25px;
}


/* =======================end of products page========================== */




/* ========================================================== */
/* ========================================================== */
/* ===================MEDIA QUERIES======================== */


@media (max-width:799px) {
  .section-p1 {
    padding: 40px 40px;
  }

  #navbar {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    position: fixed;
    top: 0;
    right: -300px;
    height: 100vh;
    width: 300px;
    background-color: #E3E6F3;
    box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
    padding: 80px 0 0 10px;
    transition: 0.3s;
  }

  #navbar li {
    margin-bottom: 25px;
  }

  #navbar.active {
    right: 0;
  }

  #mobile {
    display: flex;
    align-items: center;
  }

  #mobile i {
    color: #1a1a1a;
    font-size: 27px;
    padding-left: 70px;
  }

  /* =================changed icon position ====================== */
  #icon {
    position: absolute;
    left: 30px;
    top: 290px;
    width: 30px;
  }

  #close {
    display: initial;
    position: absolute;
    top: 25px;
    left: 30px;
    color: #222;
    font-size: 24px;
  }

  #hero {
    height: 70vh;
    background-position: top 30% right 30%;
    padding: 0 80px;
  }

  #feature {
    justify-content: center;
  }

  #feature .fe-box {
    margin: 15px 15px;
  }

  #product1 .pro-container {
    justify-content: center;
  }

  #product1 .pro {
    width: 150px;
    margin: 10px;
  }

  #banner {
    height: 30vh;
  }

  #sm-banner .banner-box {
    min-width: 100%;
    height: 30vh;
  }

  

  #newsletter .form {
    width: 70%;
  }
}


/* =================added these for all screen sizes============================ */

@media (max-width: 576px) {
  #header {
    padding: 5px 20px;
  }

  #hero {
    padding: 0 20px;
    background-position: 60%;
  }


  #feature .fe-box {
    width: 150px;
    margin: 5px;
  }

  #feature {
    justify-content: space-between;
  }

  #product1 .pro {
    margin: 5px;
    width: 230px;
  }
}

@media screen and (min-width: 577px) and (max-width: 767px) {
  #header {
    padding: 5px 20px;
  }

  #hero {
    padding: 0 20px;
    background-position: 60%;
  }


  #feature .fe-box {
    width: 150px;
    margin: 5px;
  }


  #product1 .pro {
    width: 220px;
    margin: 5px;
  }
}


@media screen and (min-width: 768px) and (max-width: 991px){
  #feature .fe-box{
    width: 190px;
    margin: 5px;
  }
}

@media screen and (min-width: 992px) and (max-width: 1199px) {
  #feature .fe-box {
    width: 130px;
  }

  #hero {
    background-position: 50%;
  }
}


@media screen and (min-width: 1200px) {
  #feature .fe-box {
    width: 160px;
  }
}




/* =====================end============================== */


@media (max-width: 912px) {
  #mobile {
    display: flex;
    align-items: center;
  }

  #mobile i {
    color: #1a1a1a;
    font-size: 27px;
    padding-left: 70px;
  }

  .section-p1 {
    padding: 40px 40px;
  }

  #navbar {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    position: fixed;
    top: 0;
    right: -300px;
    height: 100vh;
    width: 300px;
    background-color: #E3E6F3;
    box-shadow: 0 40px 60px rgba(0, 0, 0, 0.1);
    padding: 80px 0 0 10px;
    transition: 0.3s;
  }

  #navbar li {
    margin-bottom: 25px;
  }

  #navbar.active {
    right: 0;
  }

  #icon {
    position: absolute;
    left: 30px;
    top: 290px;
    width: 30px;
  }

  #close {
    display: initial;
    position: absolute;
    top: 25px;
    left: 30px;
    color: #222;
    font-size: 24px;
  }

  #hero {
    height: 70vh;
    background-position: top 30% right 30%;
    padding: 0 80px;
  }

  #feature {
    justify-content: center;
  }

  #feature .fe-box {
    margin: 15px 15px;
  }

  #product1 .pro-container {
    justify-content: center;
  }

  #product1 .pro {
    width: 150px;
    margin: 10px;
  }

  #banner {
    height: 30vh;
  }

  #sm-banner .banner-box {
    min-width: 100%;
    height: 30vh;
  }

  

  #newsletter .form {
    width: 70%;
  }
}



@media (max-width: 477px) {
  .section-p1 {
    padding: 20px;
  }

  #header {
    padding: 10px 30px;
  }

  #hero {
    padding: 0 20px;
    background-position: 60%;
  }

  h1 {
    font-size: 30px;
  }

  h2 {
    font-size: 42px;
  }

  p {
    font-size: 15px;
  }



  .logo {
    width: 70px;
  }


  #mobile i {
    font-size: 20px;
    padding-left: 80px;

  }

  .searchbox button {
    font-size: 1.1em;
  }

  #feature .fe-box {
    width: 140px;
    margin: 0 0 15px 0;
  }

  #feature {
    justify-content: space-between;
  }

  #product1 .pro {
    width: 200px;
    margin: 5px;
    max-width: 300px;

  }

  #product1 h2 {
    font-size: 15px;
  }

  #banner {
    height: 40vh;
  }

  #sm-banner .banner-box {
    height: 40vh;
  }

  #sm-banner .banner-box2 {
    margin-top: 20px;
  }

  
  #newsletter .form {
    width: 100%;
  }

  footer .copyright {
    text-align: start;
  }
  

}

/* Iphone XR */
@media (max-width: 414px) {
  #feature .fe-box {
    width: 120px;
    margin: 5px auto;;
  }

  #product1 .pro {
    margin: 5px;
    width: 170px;
  }

}

@media (max-width: 412px) {
  #feature .fe-box {
    width: 120px;
    margin: 5px auto;;
  }

  #product1 .pro {
    margin: 5px;
    width: 170px;
  }

}

/* Pixel 5 */
@media (max-width: 393px) {
  #feature .fe-box {
    width: 100px;
    margin: 5px auto;;
  }

  #product1 .pro {
    margin: 5px;
    width: 160px;

  }

}


/* Iphone 12 Pro */
@media (max-width: 390px) {
  #feature .fe-box {
    width: 100px;
    margin: 5px auto;;
  }

  #product1 .pro {
    margin: 5px;
    width: 160px;

  }

}


/* Iphone SE */
@media (max-width: 375px) {
  #feature .fe-box {
    width: 100px;
    margin: 5px auto;;
  }

  #product1 .pro {
    margin: 5px;
    width: 150px;

  }

}



@media (max-width: 320px) {
  #header {
    padding: 5px 20px;
  }

  #hero {
    padding: 0 20px;
    background-position: 50%;
  }


  #feature .fe-box {
    width: 130px;
    margin: 5px;
  }

  #feature {
    justify-content: space-between;
  }

  #product1 .pro {
    margin: 5px;
    width: 130px;

  }

}


/* Galaxy fold */
@media (max-width: 280px) {
  #feature .fe-box {
    width: 100px;
    margin: 5px auto;;
  }

  #product1 .pro {
    margin: 5px;
    width: 100px;

  }


}













/* Old Css */
    ul {
        list-style-type: none;
    }

    .toggle-btn{
        
    }

    .nav-details{
        display: flex;
        margin: 5px !important;
    }

    .nav-products{
        display: block;
    }

    nav ul li a:hover{
        color: yellow;
        background: transparent;
    }

    ul .privacy{
       display: none;     
    }

    .py{
        text-align: center;
    }

    .my{
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 20px;
        margin: 0 20px;
    }

    .fs{
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 1.3em;
        color: yellow;
    }

    .hfs{
        font-family: sans-serif;
        font-size: 50px;
        color: yellow;
    }
    

    /* Header */
    header{
        background-color: #454545 ;
        text-color: yellow;
    }

    body{
        background-color: white;
        color: white;
    }

    .btn-br{
        border: none;
        
        background-color: #454545;
        color: yellow;
    }

    .btn-br1{
        border: none;
        margin-top: 0px;
        background-color: #454545;
        color: yellow;
    }


     /* Search */
    .form-container {
        width: 80vh;
        margin: 0 auto;
        margin-bottom: 20px !important;
        display: flex;
        text-align: center;
        justify-content: center;
        display: none;
        color: black
            
    }

    

    .search-box {
        padding: 10px;
        border-radius: 10px;
        border: 1px solid #ccc;
        font-size: 16px;
        
    }

    .search{
        background-color:black;
    }

    .search-btn{ 
        background: lightgrey;
        color: white;
        border-radius: 10px!important;
    }

    

    .toggle-button {
        position: absolute;
        bottom: 0;
        right: 0;
        border: none;
        padding-top: 15px; padding-bottom: 15px;
    }



    /* Corousel */
    .carousel-item img {
        width: 95vw;
        height: 70vh !important;
        margin: 0 auto;
    }


    /* Products Page*/


    .trending-products{
        margin-left: 50px;
    }

    .trending-wrapper{
        display: block;    
        margin-left:20px;
        margin-top: 10px;

    }

    .products-list{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    } 

    .trending-item{
        width: 15%;
        margin: 10px;
        border: 1px solid white;
        border-radius: 4px;
    }

    .product-img{
        max-width: 100%;
        max-height: 200px;
        border-radius: 3px;
        box-shadow: 0px 0px 5px #aaa;
        object-fit: cover;
    }

    .product-desc{
        padding: 10px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap; 
        color: white;
    }

    .trending-item:hover{
        transform: scale(1.01) !important;
    }

    .products-none{
        font-style: italic;
        color: yellow;
        margin-bottom: 300px;
    }

    .social-links{
        justify-content: center;
        align-items: center;
    }


    /* Media query */
    @media screen and (min-width: 0px) {
        .trending-products{
            margin-left: 10px;
        }
        .trending-item{
            width: 50%;
            margin: 5px;
        }

        .product-img{
            width: 100%;
            height: 150px;
            border-radius: 3px;
        }

        .footer-col {
            width: 100%;
            text-align: center;
        }

        /* .details-img-wrapper{
            
            height: 100px !important;
        } */

        .detail-img{
            width: 100%;
            height: 100%
            object-fit: cover;
            object-position: center;
        }

        .carousel-item img {
            width: 95vw;
            height: 30vh !important;
            margin: 0 auto;
        }

        



    }
    

    @media screen and (min-width: 320px) {
        .trending-products{
            margin-left: 20px;
        }

        .hfs{
            font-size: 20px;
        }
        .trending-item{
            width: 30%; 
            margin: 2px;
            margin-bottom: 5px;
        }

        .product-img{
            width: 100%;
            height: 120px;
            border-radius: 3px;
        }

        .carousel-item img {
            width: 95vw;
            height: 40vh !important;
            margin: 0 auto;
        }

        .footer-col {
            width: 50%;
            text-align: center;
        }

        /* .details-img-wrapper{
            width: 200px !important;
            height: 150px !important;
        } */

        .detail-img{
            width: 100%;
            height: 100%
            object-fit: cover;
            object-position: center;
        }

    }

    @media screen and (min-width: 480px) {
        .trending-products{
            margin-left: 25px;
        }
        .trending-item{
            width: 100px;
            margin: 10px;
        }

        .product-img{
            width: 100%;
            height: 100px;
            border-radius: 3px;
        }

        /* .details-img-wrapper{
            width: 250px !important;
            height: 200px !important;
        } */


        .detail-img{
            width: 100%;
            height: 100%
            object-fit: cover;
            object-position: center;
        }
        

        .carousel-item img {
            width: 95vw;
            height: 50vh !important;
            margin: 0 auto;
        }


       
    }

    @media screen and (min-width: 767px) {

        .trending-products{
            margin-left: 35px;
        }
        

        .trending-item{
            width: 20%;
            margin: 10px;
        }

        .product-img{
            width: 100%;
            height: 150px;
            border-radius: 3px;
        }

        .nav-products{
            display: none !important;
        }

        .toggle-btn{
            display: none !important;
        }


        .nav-details{
            display: none;
        }

        .form-container{
            display: block;
            width: 80vw;
            text-align: center;
        }

        
        .search-show{
            display: none;
        }

        /* .details-img-wrapper{
            width: 300px !important;
            height: 250px !important;
        } */

        .detail-img{
            width: 100%;
            height: 100%
            object-fit: cover;
            object-position: center;
        }

       

        .carousel-item img {
            width: 95vw;
            height: 60vh !important;
            margin: 0 auto;
        }



        .footer-col {
            width: 25%;
            text-align: center;
        }

    }

    @media screen and (min-width: 1024px) {
        .trending-products{
            margin-left: 50px;
        }
        
        .trending-products{
            margin-left: 45px;
        }

        ul .privacy{
            display: block;
        }

        .trending-item{
            width: 16.66%;
            margin: 10px;
        }

        .product-img{
            width: 100%;
            height: 150px;
            border-radius: 3px;
        }

       /*  .details-img-wrapper{
            width: 400px !important;
            height: 350px !important;
        } */

        .detail-img{
            width: 100%;
            height: 100%
            object-fit: cover;
            object-position: center;
        }

        

        .carousel-item img {
            width: 95vw;
            height: 70vh !important;
            margin: 0 auto;
        }

    }

    @media screen and (min-width: 1200px) {
        .products-list{
            margin-left: 10px;
        }
        .trending-item{
          justify-content: space-between
            width: calc(25%-20px);
          
            padding: 5px;
        }

        .product-img{
            width: 100%;
            height: 170px;
            border-radius: 3px;
        }

        .carousel-item img {
            width: 95vw;
            height: 80vh !important;
            margin: 0 auto;
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

    .details-img-wrapper{
            
            height: 100px !important;
        }

    .detail-img{
        /* width: 400px !important;
        height: 350px !important; */
        border-radius: 4px;
    }

    .tips{
        margin-top: 100px;
        margin-left: px;
    }

    .tips ol h3{
        font-weight: 500;
        font-size: 30px;
    }

    .tips ol li{
        font-style: italic;
        font-size: 20px;
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
        color: white !important;
        background: none;
    }

    .nav-link{
        color: yellow;
    }

    .nav-link:hover{
        background: yellow;
        color:#fff;
    }

    .nav-item a:hover{
        color: white !important;
        background: none;
    }




    /* Footer  */
    footer{
        background-color: #333;
    }

    footer ul li{
        margin-bottom:30px;
    }

    .footer-container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
        color: #fff;
        margin-top: 100px;
        margin-bottom: px;
    }

    .fh{
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 25px !important;
        margin-bottom: 20px;
    }

    .fd{
        font-family: sans-serif;
        font-size: 17px;
    }

    

   
    
    .social-links{
        text-align: center;
        padding-bottom: 20px;
        margin-bottom: 80px;
    }

</style>

</html>
