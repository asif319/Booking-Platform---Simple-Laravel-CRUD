@include('layouts.home.head')

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{url ('/')}}"><img src="/images/meeters.png" alt=""></a>
                    </div>

                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                        </button>
                    </div>

                    <!-- Main Navigation -->
                    @include('layouts.home.nav')
                    <div class="clearfix"></div>
                    <!-- Main Navigation / End -->

                </div>
                <!-- Left Side Content / End -->

                <!-- Right Side Content / End -->
            @include('layouts.home.right_side_nav')
                <!-- Right Side Content / End -->

                <!-- Sign In Popup -->
                
                <!-- Sign In Popup / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Titlebar
    ================================================== -->
    <div id="titlebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Booking</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Booking</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->

    <!-- Container -->
    <div class="container">
        <div class="row">

            <!-- Content
            ================================================== -->
            <div class="col-lg-8 col-md-8 padding-right-30">

                <h3 class="margin-top-0 margin-bottom-30">Personal Details</h3>

                <div class="row">

                    <div class="col-md-6">
                        <label>First Name</label>
                        <input type="text" value="">
                    </div>

                    <div class="col-md-6">
                        <label>Last Name</label>
                        <input type="text" value="">
                    </div>

                    <div class="col-md-6">
                        <div class="input-with-icon medium-icons">
                            <label>E-Mail Address</label>
                            <input type="text" value="">
                            <i class="im im-icon-Mail"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-with-icon medium-icons">
                            <label>Phone</label>
                            <input type="text" value="">
                            <i class="im im-icon-Phone-2"></i>
                        </div>
                    </div>

                </div>


                <h3 class="margin-top-55 margin-bottom-30">Payment Method</h3>

                <!-- Payment Methods Accordion -->
                <div class="payment">

                    <div class="payment-tab payment-tab-active">
                        <div class="payment-tab-trigger">
                            <input checked id="paypal" name="cardType" type="radio" value="paypal">
                            <label for="paypal">PayPal</label>
                            <img class="payment-logo paypal" src="https://i.imgur.com/ApBxkXU.png" alt="">
                        </div>

                        <div class="payment-tab-content">
                            <p>You will be redirected to PayPal to complete payment.</p>
                        </div>
                    </div>


                    <div class="payment-tab">
                        <div class="payment-tab-trigger">
                            <input type="radio" name="cardType" id="creditCart" value="creditCard">
                            <label for="creditCart">Credit / Debit Card</label>
                            <img class="payment-logo" src="https://i.imgur.com/IHEKLgm.png" alt="">
                        </div>

                        <div class="payment-tab-content">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="card-label">
                                        <label for="nameOnCard">Name on Card</label>
                                        <input id="nameOnCard" name="nameOnCard" required type="text">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card-label">
                                        <label for="cardNumber">Card Number</label>
                                        <input id="cardNumber" name="cardNumber" placeholder="1234  5678  9876  5432" required type="text">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card-label">
                                        <label for="expirynDate">Expiry Month</label>
                                        <input id="expiryDate" placeholder="MM" required type="text">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card-label">
                                        <label for="expiryDate">Expiry Year</label>
                                        <input id="expirynDate" placeholder="YY" required type="text">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card-label">
                                        <label for="cvv">CVV</label>
                                        <input id="cvv" required type="text">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Payment Methods Accordion / End -->

                <a href="pages-booking-confirmation.html" class="button booking-confirmation-btn margin-top-40 margin-bottom-65">Confirm and Pay</a>
            </div>


            <!-- Sidebar
            ================================================== -->
            <div class="col-lg-4 col-md-4 margin-top-0 margin-bottom-60">

                <!-- Booking Summary -->
                <div class="listing-item-container compact order-summary-widget">
                    <div class="listing-item">
                        <img src="images/happy-client-03.jpg" alt="">

                        <div class="listing-item-content">
                            <div class="numerical-rating" data-rating="5.0"></div>
                            <h3>Burger House</h3>
                            <span>2726 Shinn Street, New York</span>
                        </div>
                    </div>
                </div>
                <div class="boxed-widget opening-hours summary margin-top-0">
                    <h3><i class="fa fa-calendar-check-o"></i> Booking Summary</h3>
                    <ul>
                        <li>Date <span>10/20/2017</span></li>
                        <li>Hour <span>5:30 PM</span></li>
                        <li>Guests <span>2 Adults</span></li>
                        <li class="total-costs">Total Cost <span>$9.00</span></li>
                    </ul>

                </div>
                <!-- Booking Summary / End -->

            </div>

        </div>
    </div>
    <!-- Container / End -->



    <!-- Footer
    ================================================== -->
    <div id="footer">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="images/meeters.png" alt="">
                    <br><br>
                    <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
                </div>

               <div class="col-md-4 col-sm-6 ">
                    <h4>Helpful Links</h4>
                    <ul class="footer-links">
                         <li><a href="{{url('/profile')}}">My Account</a></li>
                        <li><a href="{{url('/add-listing')}}">Add Listing</a></li>
                      </ul>

                    <ul class="footer-links">
                        <li><a href="{{url('/blog')}}">Blog</a></li>
                       <li><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="col-md-3  col-sm-12">
                    <h4>Contact Us</h4>
                    <div class="text-widget">
                        <span>12345 Little Lonsdale St, Melbourne</span> <br>
                        Phone: <span>(123) 123-456 </span><br>
                        E-Mail:<span> <a href="#">office@example.com</a> </span><br>
                    </div>

                    <ul class="social-icons margin-top-20">
                        <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                        <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                        <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                    </ul>

                </div>

            </div>

            <!-- Copyright -->
            <div class="row">
                <div class="col-md-12">
                    <div class="copyrights">© 2018 Company. All Rights Reserved.</div>
                </div>
            </div>

        </div>

    </div>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->



<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>


<!-- Style Switcher
================================================== -->
<script src="scripts/switcher.js"></script>

<div id="style-switcher">
    <h2>Color Switcher <a href="#"><i class="sl sl-icon-settings"></i></a></h2>

    <div>
        <ul class="colors" id="color1">
            <li><a href="#" class="main" title="Main"></a></li>
            <li><a href="#" class="blue" title="Blue"></a></li>
            <li><a href="#" class="green" title="Green"></a></li>
            <li><a href="#" class="orange" title="Orange"></a></li>
            <li><a href="#" class="navy" title="Navy"></a></li>
            <li><a href="#" class="yellow" title="Yellow"></a></li>
            <li><a href="#" class="peach" title="Peach"></a></li>
            <li><a href="#" class="beige" title="Beige"></a></li>
            <li><a href="#" class="purple" title="Purple"></a></li>
            <li><a href="#" class="celadon" title="Celadon"></a></li>
            <li><a href="#" class="red" title="Red"></a></li>
            <li><a href="#" class="brown" title="Brown"></a></li>
            <li><a href="#" class="cherry" title="Cherry"></a></li>
            <li><a href="#" class="cyan" title="Cyan"></a></li>
            <li><a href="#" class="gray" title="Gray"></a></li>
            <li><a href="#" class="olive" title="Olive"></a></li>
        </ul>
    </div>

</div>
<!-- Style Switcher / End -->


</body>
</html>