{{-- <footer>

    <div class="footer-container">
        
        <div class="footer-col">
            <ul class="fl">
                <li ><h4 class="fh">Support</h4></li>
                <li><a href="#" class="fd">admin@blackm.co.ke</a></li>
                <li><a href="#" class="fd">cblackm167@gmail.com</a></li>
                <li><a href="{{ route('safety') }}" class="fd">Safety Tips</a></li>
            </ul>
        </div>


        <div class="footer-col">
            <ul class="fl">
                <li ><h4 class="fh">About Us</h4></li>
                <li><a href="{{ route('privacy') }}" class="fd">Privacy Policy</a></li>
                <li><a href=" {{ route('contact') }}" class="fd">Contact Us</a></li>
                <li><a href="{{ route('about') }}" class="fd">About blackM</a></li>
                <li></li>
            </ul>
        </div>

        <div class="footer-col">
            <ul class="fl">
                <li><h4 class="fh">Links</h4></li>
                <li><a href=" {{ route('/') }}" class="fd">Home</a></li>
                <li><a href=" {{ route('sell') }}" class="fd">Sell</a></li>
                <li><a href=" {{ url('item') }}" class="fd">Your Products</a></li>
                <li></li>
            </ul>
        </div>

        <div class="footer-col">
            <ul class="fl">
                <li><h4 class="fh">Categories</h4></li>
                <li><a href="{{ route('computer') }}" class="fd">Computer & Accessories</a></li>
                <li><a href="{{ route('phone') }}" class="fd">Phone & Accessories</a></li>
                <li><a href="{{ route('sport') }}" class="fd">Sports & Games</a></li>
                <li><a href="{{ route('electronic') }}" class="fd">Electronics</a></li>
                <li><a href="{{ route('furniture') }}" class="fd">Furniture</a></li>
                <li><a href="{{ route('fashion') }}" class="fd">Fashion</a></li>
            </ul>
        </div>

        
        
    </div>

    <div class="social-links">
        <a href="#"><i class="fab fa-facebook fa-2x" style="margin-right:20px;"></i></a>
        <a href="#"><i class="fab fa-twitter-square fa-2x" style="margin-right:20px;"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x" style="margin-right:20px;"></i></a>
        <a href="#"><i class="fab fa-linkedin fa-2x" style="margin-right:20px;"></i></a>
    </div>

</footer> --}}

<footer class="section-p1">
            <div class="col">
                <img class="logo" src="img/black.png" alt="">
                <h4>Contact</h4>
                <p><strong>Addresses:</strong> 00232 Chuka, Tharaka Nthi</p>
                <p><strong>Phone: </strong> </p>
                <p><strong>Hours: </strong> Available 24/7</p>
                <div class="follow">
                    <h4>follow us</h4>
                    <div class="icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-square-whatsapp"></i>
                        <i class="fa-brands fa-telegram"></i>
                        <i class="fa-brands fa-square-instagram"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>About</h4>
                <a href="#">About Us</a>
                <!-- <a href="#">Delivery Information</a> -->
                <a href="{{ route('privacy') }}">Privacy policy</a>
                <a href="#">Terms & conditions</a>
                <a href="{{ route('contact') }}">Contact US</a>
                <a href="{{ route('safety') }}">Safety Tips</a>
            </div>

            <div class="col">
                <h4>My Account</h4>
                <a href="{{ route('logout') }}">
                        <form action="{{ route('logout') }}" method="POST" >
                            @csrf
                            <button type="submit"  style="background:transparent; border:none;">Sign Out</button>
                        </form>
                </a>
                <a href="{{ route('/') }}">Shop with us</a>
                <a href="{{ route('sell') }}">Sell on blackM</a>
                <a href="{{ url('item') }}">My Products</a>
                <!-- <a href="#">Contact US</a> -->
            </div>

            <div class="col install">
                <h4>Payment Methods</h4>
                <p>Pay to seller after product delivery</p>
                <!-- <div class="row">
                    <img src="img/pay/app.jpg" alt="">
                    <img src="img/pay/play.jpg" alt="">
                </div> -->
                <!-- <img src="img/pay/pay.png" alt=""> -->
                <img class="pay" src="img/pay/pay4.webp" alt="">
                
            </div>

            <div class="copyright">
                <p>2023 copyright - Chuka BlackM  Comrades by Comrades</p>
            </div>
        </footer>