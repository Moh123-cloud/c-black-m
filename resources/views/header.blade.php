<?php

use App\Http\Controllers\productController;
$total = productController::index();

?>




        <section id="header">
            <a href="#"><img src="img/black.png" class="logo" alt=""></a>
            <form class="" action="{{ route('search') }}" method="post">
                <div class="searchbox" onclick="onClick(event)">

                    @csrf
                    <!-- added placeholder text -->
                    <input type="search" name="search" onfocus="onfocus()" onBlur="onBlur()" placeholder="Search product..">
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        
                </div>
            </form>
                <ul id="navbar">
                    <li><a class="active" href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('all') }}">Shop</a></li>
                   
                    <li><a href="{{ route('sell') }}">Sell</a></li>
                    <li><a href="{{ url('item') }}">Your products</a></li>
                    <li><a href="{{ route('logout') }}"></a></li>
                    <img src="img/header/moon1.png" alt="png" id="icon">
                    <a href="#"><i id="close" class="fa-solid fa-xmark"></i></a>
                </ul>
                
          
            <div id="mobile">
                <i id="bar" class="fa-solid fa-bars"></i>

            </div>
        </section>

<script>
           // Script for navigation bar
    const bar = document.getElementById('bar');
    const close = document.getElementById('close');
    const nav = document.getElementById('navbar');

    if (bar) {
        bar.addEventListener('click', () => {
            nav.classList.add('active');
        })
    }

    if (close) {
        close.addEventListener('click', () => {
            nav.classList.remove('active');
        })
    }

    // js for searchbox

 </script>