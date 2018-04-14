@include('layouts.home.head')

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
                        <a href="{{url ('/')}}"><img src="images/meeters.png" alt=""></a>
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
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Listings</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Listings</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row">

            <div class="col-lg-9 col-md-8 padding-right-30">

                <!-- Sorting / Layout Switcher -->
                <div class="row margin-bottom-25">

                    <div class="col-md-6 col-xs-6">
                        <!-- Layout Switcher -->
                        <div class="layout-switcher">

                        </div>
                    </div>

                    <div class="col-md-6 col-xs-6">
                        <!-- Sort by -->
                        <div class="sort-by">
                            <div class="sort-by-select">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sorting / Layout Switcher / End -->


                <div class="row">

                    <!-- Listing Item -->

                        <div class="col-lg-12 col-md-12">
                            @foreach($allListing as $listing)
                            <div class="listing-item-container list-layout">
                                <a href="{{url('/show-listing/'.$listing->id)}}" class="listing-item">

                                    <!-- Image -->
                                    <div class="listing-item-image">
                                        <img src="{{$listing->upload_file}}" alt="">
                                        <span class="tag">{{$listing->category}}</span>
                                    </div>

                                    <!-- Content -->
                                    <div class="listing-item-content">
                                        <div class="listing-badge now-open">Now Open</div>

                                        <div class="listing-item-inner">
                                            <h3>{{$listing->title}} <i class="verified-icon"></i></h3>
                                            <span>{{$listing->address}} {{$listing->city}}, {{$listing->state}} {{$listing->zip_code}}</span>
                                            <div class="star-rating" data-rating="3.5">
                                                <div class="rating-counter">(12 reviews)</div>
                                            </div>
                                        </div>

                                        <span class="like-icon"></span>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    <!-- Listing Item / End -->

                    <!-- Listing Item -->


                    {{--<!-- Listing Item / End -->--}}

                    {{--<!-- Listing Item -->--}}

                    <!-- Listing Item / End -->

                </div>
                

            </div>


            <!-- Sidebar
            ================================================== -->
            <div class="col-lg-3 col-md-4">
                <div class="sidebar">

                    <!-- Widget -->
                    <div class="widget margin-bottom-40">
                        <h3 class="margin-top-0 margin-bottom-30">Filters</h3>

                        <!-- Row -->
                        <div class="row with-forms">
                            <!-- Cities -->
                            <div class="col-md-12">
                                <input type="text" placeholder="What are you looking for?" value=""/>
                            </div>
                        </div>
                        <!-- Row / End -->


                        <!-- Row -->
                        <div class="row with-forms">
                            <!-- Type -->
                            <div class="col-md-12">
                                <select data-placeholder="All Categories" class="chosen-select" >
                                    <option>All Categories</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
                                </select>
                            </div>
                        </div>
                        <!-- Row / End -->


                        <!-- Row -->
                        <div class="row with-forms">
                            <!-- Cities -->
                            <div class="col-md-12">

                                <div class="input-with-icon location">
                                    <input type="text" placeholder="Destination, city, address" value=""/>
                                    <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                </div>

                            </div>
                        </div>
                        <!-- Row / End -->
                        <br>

                        <!-- Area Range -->
                        <div class="range-slider">
                            <input class="distance-radius" type="range" min="1" max="100" step="1" value="50" data-title="Radius around selected destination">
                        </div>


                        <!-- More Search Options -->
                        <a href="#" class="more-search-options-trigger margin-bottom-5 margin-top-20" data-open-title="More Filters" data-close-title="More Filters"></a>

                        <div class="more-search-options relative">

                            <!-- Checkboxes -->
                            <div class="checkboxes one-in-row margin-bottom-15">

                                <input id="check-a" type="checkbox" name="check">
                                <label for="check-a">Elevator in building</label>

                                <input id="check-b" type="checkbox" name="check">
                                <label for="check-b">Friendly workspace</label>

                                <input id="check-c" type="checkbox" name="check">
                                <label for="check-c">Instant Book</label>

                                <input id="check-d" type="checkbox" name="check">
                                <label for="check-d">Wireless Internet</label>

                                <input id="check-e" type="checkbox" name="check" >
                                <label for="check-e">Free parking on premises</label>

                                <input id="check-f" type="checkbox" name="check" >
                                <label for="check-f">Free parking on street</label>

                                <input id="check-g" type="checkbox" name="check">
                                <label for="check-g">Smoking allowed</label>

                                <input id="check-h" type="checkbox" name="check">
                                <label for="check-h">Events</label>

                            </div>
                            <!-- Checkboxes / End -->

                        </div>
                        <!-- More Search Options / End -->

                        <button class="button fullwidth margin-top-25">Update</button>

                    </div>
                    <!-- Widget / End -->

                </div>
            </div>
            <!-- Sidebar / End -->
        </div>
    </div>


    <!-- Footer
    ================================================== -->
    <div id="footer" class="margin-top-15">
        <!-- Main -->
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img class="footer-logo" src="images/meeters.png" alt="">
                    <br><br>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>

               <div class="col-md-4 col-sm-6 ">
                    <h4>Helpful Links</h4>
                    @if (Route::has('login'))

            @auth
                    <ul class="footer-links">
                         <li><a href="{{url('/profile')}}">My Account</a></li>
                        <li><a href="{{url('/add-listing')}}">Add Listing</a></li>
                      </ul>
@else
        @endauth
        @endif

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