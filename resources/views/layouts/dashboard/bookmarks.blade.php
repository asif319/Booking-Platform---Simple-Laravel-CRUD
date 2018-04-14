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

                    <!-- Header Widget -->
            @include('layouts.dashboard.dash-nav')
                    <!-- Header Widget / End -->

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
                        <h2>Bookmarks</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Bookmarks</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Listings -->
                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-list-box margin-top-0">
                        <h4>Bookmarked Listings</h4>
                        <ul>

                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="#"><img src="images/listing-item-02.jpg" alt=""></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3>Sticky Band</h3>
                                            <span>Bishop Avenue, New York</span>
                                            <div class="star-rating" data-rating="5.0">
                                                <div class="rating-counter">(23 reviews)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
                                </div>
                            </li>

                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="#"><img src="images/listing-item-04.jpg" alt=""></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3>Burger House</h3>
                                            <span>2726 Shinn Street, New York</span>
                                            <div class="star-rating" data-rating="5.0">
                                                <div class="rating-counter">(31 reviews)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
                                </div>
                            </li>

                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="#"><img src="images/listing-item-06.jpg" alt=""></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3>Think Coffee</h3>
                                            <span>215 Terry Lane, New York</span>
                                            <div class="star-rating" data-rating="5.0">
                                                <div class="rating-counter">(31 reviews)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
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