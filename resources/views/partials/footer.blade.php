<!-- partials/footer.blade.php -->
<footer>

    <!-- Footer Section -->
    <div class="footer_section layout_padding">
        <div class="container">

            <!-- Newsletter -->
            <div class="newsletter_section">
                <div class="newsletter_left">
                    <div class="footer_logo">
                        <img src="{{ asset('images/footer-logo.png') }}" alt="Footer Logo">
                    </div>
                </div>
                <div class="newsletter_right">
                    <h5 class="newsletter_taital">Subscribe Newsletter</h5>
                    <div class="subscribe_main">
                        <input type="text" class="mail_text" placeholder="Enter your email" name="text">
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                    </div>
                </div>
            </div>

            <!-- Footer Links -->
            <div class="footer_taital_main">
                <div class="row">

                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">About</h2>
                        <p class="ipsum_text">
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u
                        </p>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Menus</h2>
                        <div class="footer_links">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about-us') }}">About</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/pricing') }}">Pricing</a></li>
                                <li><a href="{{ url('/contact') }}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Useful Link</h2>
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">Adipiscing</a></li>
                                <li><a href="#">Elit, sed do</a></li>
                                <li><a href="#">Eiusmod</a></li>
                                <li><a href="#">Tempor</a></li>
                                <li><a href="#">Incididunt</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <h2 class="useful_text">Contact us</h2>
                        <div class="addres_link">
                            <ul>
                                <li><a href="#"><img src="{{ asset('images/map-icon.png') }}" alt="Map Icon"><span class="padding_left_10">No.123 Chalingt Gates</span></a></li>
                                <li><a href="#"><img src="{{ asset('images/call-icon.png') }}" alt="Call Icon"><span class="padding_left_10">+01 1234567890</span></a></li>
                                <li><a href="#"><img src="{{ asset('images/mail-icon.png') }}" alt="Mail Icon"><span class="padding_left_10">demo@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <h1 class="follow_text">Follow Us</h1>
                <div class="social_icon">
                    <ul>
                        <li><a href="#"><img src="{{ asset('images/fb-icon.png') }}" alt="Facebook"></a></li>
                        <li><a href="#"><img src="{{ asset('images/twitter-icon.png') }}" alt="Twitter"></a></li>
                        <li><a href="#"><img src="{{ asset('images/linkedin-icon.png') }}" alt="LinkedIn"></a></li>
                        <li><a href="#"><img src="{{ asset('images/instagram-icon.png') }}" alt="Instagram"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">
                © {{ date('Y') }} All Rights Reserved By <a href="https://html.design">Free HTML Templates</a>
            </p>
        </div>
    </div>

</footer>
