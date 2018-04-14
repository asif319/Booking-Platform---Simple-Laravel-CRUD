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
            @if (Route::has('login'))
                    @auth
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{Auth::User()->name}}!</h2>
                        @else
                            <script>window.location.href = "{{url('/')}}";</script>
                        @endauth
                    @endif
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Dashboard</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Notice -->
            <div class="row">
                <div class="col-md-12">
                    {{--<div class="notification success closeable margin-bottom-30">--}}
                        {{--<p>Your listing <strong>Hotel Govendor</strong> has been approved!</p>--}}
                        {{--<a class="close" href="#"></a>--}}
                    {{--</div>--}}
                </div>
            </div>

            <!-- Content -->
            <div class="row">

                <!-- Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-stat color-1">
                        <div class="dashboard-stat-content"><h4>6</h4> <span>Active Listings</span></div>
                        <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-stat color-2">
                        <div class="dashboard-stat-content"><h4>726</h4> <span>Total Views</span></div>
                        <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
                    </div>
                </div>


                <!-- Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-stat color-3">
                        <div class="dashboard-stat-content"><h4>95</h4> <span>Total Reviews</span></div>
                        <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="dashboard-stat color-4">
                        <div class="dashboard-stat-content"><h4>126</h4> <span>Times Bookmarked</span></div>
                        <div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
                    </div>
                </div>
            </div>


            <div class="row">

                <!-- Recent Activity -->
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-list-box with-icons margin-top-20">
                        {{--<h4>{{$allListing->title}}</h4>--}}
                        <ul>
                            <li>
                                <i class="list-box-icon sl sl-icon-layers"></i> Your listing <strong><a href="#">Hotel Govendor</a></strong> has been approved!
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating" data-rating="5.0"></div> on <strong><a href="#">Burger House</a></strong>
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review <div class="numerical-rating" data-rating="3.0"></div> on <strong><a href="#">Airport</a></strong>
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger House</a></strong> listing!
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-star"></i> John Doe left a review <div class="numerical-rating" data-rating="4.0"></div> on <strong><a href="#">Burger House</a></strong>
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>

                            <li>
                                <i class="list-box-icon sl sl-icon-star"></i> Jack Perry left a review <div class="numerical-rating" data-rating="2.5"></div> on <strong><a href="#">Tom's Restaurant</a></strong>
                                <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Invoices -->
                <div class="col-lg-6 col-md-12">
                    <div class="dashboard-list-box invoices with-icons margin-top-20">
                        <h4>Invoices</h4>
                        <ul>

                            <li><i class="list-box-icon sl sl-icon-doc"></i>
                                <strong>Professional Plan</strong>
                                <ul>
                                    <li class="unpaid">Unpaid</li>
                                    <li>Order: #00124</li>
                                    <li>Date: 20/07/2017</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="dashboard-invoice.html" class="button gray">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="list-box-icon sl sl-icon-doc"></i>
                                <strong>Extended Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #00108</li>
                                    <li>Date: 14/07/2017</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="dashboard-invoice.html" class="button gray">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="list-box-icon sl sl-icon-doc"></i>
                                <strong>Extended Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #00097</li>
                                    <li>Date: 10/07/2017</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="dashboard-invoice.html" class="button gray">View Invoice</a>
                                </div>
                            </li>

                            <li><i class="list-box-icon sl sl-icon-doc"></i>
                                <strong>Basic Plan</strong>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #00091</li>
                                    <li>Date: 30/06/2017</li>
                                </ul>
                                <div class="buttons-to-right">
                                    <a href="dashboard-invoice.html" class="button gray">View Invoice</a>
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