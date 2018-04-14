@include('layouts.home.head')

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container" class="fixed fullwidth dashboard">

        <!-- Header -->
        <div id="header" class="not-sticky">
            <div class="container">

                <!-- Left Side Content -->
                <div class="left-side">

                    <!-- Logo -->
                    <div id="logo">
                        <a href="{{url ('/')}}"><img src="images/meeters.png" alt=""></a>
                        <a href="{{url ('/')}}" class="dashboard-logo"><img src="images/meeters.png" alt=""></a>
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
            @include('layouts.dashboard.dash-nav')
                <!-- Right Side Content / End -->

            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Dashboard -->
    <div id="dashboard">

        <!-- Navigation
        ================================================== -->

        <!-- Responsive Navigation Trigger -->
        <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

        <div class="dashboard-nav">
            @include('layouts.dashboard.side-bar')
        </div>
        <!-- Navigation / End -->


        <!-- Content
        ================================================== -->
        <div class="dashboard-content">

            <!-- Titlebar -->
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Bookings</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Bookings</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Listings -->
                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-list-box margin-top-0">

                        <!-- Sort by -->
                        <div class="sort-by">
                            <div class="sort-by-select">
                                <select data-placeholder="Default order" class="chosen-select-no-single">
                                    <option>Any Status</option>
                                    <option>Approved</option>
                                    <option>Pending</option>
                                    <option>Canceled</option>
                                </select>
                            </div>
                        </div>


                        <!-- Reply to review popup -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <div class="small-dialog-header">
                                <h3>Send Message</h3>
                            </div>
                            <div class="message-reply margin-top-0">
                                <textarea cols="40" rows="3" placeholder="Your Message to Kathy"></textarea>
                                <button class="button">Send</button>
                            </div>
                        </div>

                        <h4>Bookings List</h4>
                        <ul>

                            <li class="pending-booking">
                                <div class="list-box-listing bookings">
                                    <div class="list-box-listing-img"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s=120" alt=""></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3>Tom's Restaurant <span class="booking-status pending">Pending</span></h3>

                                            <div class="inner-booking-list">
                                                <h5>Booking Date:</h5>
                                                <ul class="booking-list">
                                                    <li class="highlighted">12.12.2017 at 15:30 P.M</li>
                                                </ul>
                                            </div>

                                            <div class="inner-booking-list">
                                                <h5>Booking Details:</h5>
                                                <ul class="booking-list">
                                                    <li class="highlighted">3-4 People</li>
                                                </ul>
                                            </div>

                                            <div class="inner-booking-list">
                                                <h5>Client:</h5>
                                                <ul class="booking-list">
                                                    <li>John Smith</li>
                                                    <li>john@example.com</li>
                                                    <li>123-456-789</li>
                                                </ul>
                                            </div>

                                            <a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray reject"><i class="sl sl-icon-close"></i> Cancel</a>
                                    <a href="#" class="button gray approve"><i class="sl sl-icon-check"></i> Approve</a>
                                </div>
                            </li>

                            <li class="approved-booking">
                                <div class="list-box-listing bookings">
                                    <div class="list-box-listing-img"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s=120" alt=""></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3>Burger House <span class="booking-status">Approved</span></h3>

                                            <div class="inner-booking-list">
                                                <h5>Booking Date:</h5>
                                                <ul class="booking-list">
                                                    <li class="highlighted">10.12.2017 at 12:30 P.M</li>
                                                </ul>
                                            </div>

                                            <div class="inner-booking-list">
                                                <h5>Booking Details:</h5>
                                                <ul class="booking-list">
                                                    <li class="highlighted">1-2 People</li>
                                                </ul>
                                            </div>

                                            <div class="inner-booking-list">
                                                <h5>Client:</h5>
                                                <ul class="booking-list">
                                                    <li>Kathy Brown</li>
                                                    <li>kathy@example.com</li>
                                                    <li>123-456-789</li>
                                                </ul>
                                            </div>

                                            <a href="#small-dialog" class="rate-review popup-with-zoom-anim"><i class="sl sl-icon-envelope-open"></i> Send Message</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray reject"><i class="sl sl-icon-close"></i> Cancel</a>
                                </div>
                            </li>

                            <li class="canceled-booking">
                                <div class="list-box-listing bookings">
                                    <div class="list-box-listing-img"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&s=120" alt=""></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3>Tom's Restaurant <span class="booking-status">Canceled</span></h3>

                                            <div class="inner-booking-list">
                                                <h5>Booking Date:</h5>
                                                <ul class="booking-list">
                                                    <li class="highlighted">21.10.2017 at 9:30 A.M</li>
                                                </ul>
                                            </div>

                                            <div class="inner-booking-list">
                                                <h5>Booking Details:</h5>
                                                <ul class="booking-list">
                                                    <li class="highlighted">1-2 People</li>
                                                </ul>
                                            </div>

                                            <div class="inner-booking-list">
                                                <h5>Client:</h5>
                                                <ul class="booking-list">
                                                    <li>Kathy Brown</li>
                                                    <li>kathy@example.com</li>
                                                    <li>123-456-789</li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray reject"><i class="sl sl-icon-close"></i> Delete</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>


                <!-- Copyrights -->
                <div class="col-md-12">
                    <div class="copyrights">© 2018 Company. All Rights Reserved.</div>
                </div>
            </div>

        </div>
        <!-- Content / End -->


    </div>
    <!-- Dashboard / End -->


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


</body>
</html>