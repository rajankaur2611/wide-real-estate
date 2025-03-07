<footer class="footer">
    <div class="footer-content container">

        <div class="footer-wrappers">
            <div class="footer-wrapper">
                <div class="footer-info">
                    <div class="footer-logo">
                        <img src="{{ url('images/wide_logo_header.svg') }}" alt="image">
                    </div>
                    <div class="footer-contact-info">
                        <p>
                            <a href="mailto:email@mygmail.com">
                                <img src="{{ url('images/email.png') }}" alt="email">widerealestate@gmail.com
                            </a>
                        </p>
                        <p>
                            <a href="tel:+919876543210">
                                <img src="{{ url('images/phone.png') }}" alt="phone">+91 987 654 3210
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-wrapper">
                <ul class="navMenus">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">our projects</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="/contact">contact</a></li>
                </ul>
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com" target="_blank">
                            <img src="{{ url('images/facebook.png') }}" alt="footer social link"></a>
                    </li>
                    <li><a href="https://www.instagram.com" target="_blank">
                            <img src="{{ url('images/instagram.png') }}" alt="footer social link"></a>
                    </li>
                    <li><a href="https://www.twitter.com" target="_blank">
                            <img src="{{ url('images/twitter.png') }}" alt="footer social link"></a>
                    </li>
                    <li><a href="https://www.linkedin.com" target="_blank">
                            <img src="{{ url('images/you-tube.png') }}" alt="footer social link"></a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="footer-below">
            <p>&copy; <span id="year"><?php echo date("Y"); ?></span> <a href="#">widerealestate.com</a>. All right reserved</p>
            <ul class="footer-below-links">
                <li><a href="#">terms & conditions</a></li>
                <li><a href="#">privacy policy</a></li>
            </ul>
        </div>
    </div>
</footer>
