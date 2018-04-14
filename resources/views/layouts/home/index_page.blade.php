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


    <!-- Banner
    ================================================== -->
    <div class="main-search-container" data-background-image="images/background.jpg">
        <div class="main-search-inner">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Find Nearby Attractions</h2>
                        <h4>Expolore top-rated attractions, activities and more</h4>

                        <div class="main-search-input">

                            <div class="main-search-input-item">
                                <input type="text" placeholder="What are you looking for?" value=""/>
                            </div>

                            <div class="main-search-input-item location">
                                <input type="text" placeholder="Location" value=""/>
                                <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                            </div>

                            <div class="main-search-input-item">
                                <select data-placeholder="All Categories" class="chosen-select" >
                                    <option>All Categories</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Fitness</option>
                                    <option>Events</option>
                                </select>
                            </div>

                            <button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">Search</button>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline centered margin-top-75">
                    Popular Categories
                    <span>Browse <i>the most desirable</i> categories</span>
                </h3>
            </div>

        </div>
    </div>
    <div class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="simple-slick-carousel dots-nav">
                    @foreach($allListing as $listing)
                        <!-- Listing Item -->
                            <div class="carousel-item">
                                <a href="{{url('/show-listing/'.$listing->id)}}" class="listing-item-container">
                                    <div class="listing-item">
                                        <img src="{{$listing->upload_file}}" alt="">


                                        <div class="category-box-content">
                                            <h3>{{$listing->category}}</h3>
                                            <span>67 listings</span>

                                        </div>
                                        <span class="category-box-btn">Browse</span>
                                    </div>
                                    <div class="star-rating" data-rating="3.5">
                                        <div class="rating-counter">(12 reviews)</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Listing Item / End -->

                            <!-- Listing Item -->

                        @endforeach
                    </div>

                </div>


            </div>

        </div>

    </div>
    <!-- Categories Carousel / End -->



    <!-- Fullwidth Section -->

    <section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h3 class="headline centered margin-bottom-45">
                        Most Visited Places
                        <span>Discover top-rated local businesses</span>
                    </h3>
                </div>

                <div class="col-md-12">

                    <div class="simple-slick-carousel dots-nav">
                    @foreach($allListing as $listing)
                        <!-- Listing Item -->
                        <div class="carousel-item">
                            <a href="{{url('/show-listing/'.$listing->id)}}" class="listing-item-container">
                                <div class="listing-item">
                                    <img src="{{$listing->upload_file}}" alt="">

                                    <div class="listing-badge now-open">Now Open</div>

                                    <div class="listing-item-content">
                                        <span class="tag">{{$listing->category}}</span>
                                        <h3>{{$listing->title}} <i class="verified-icon"></i></h3>
                                        <span>{{$listing->address}} {{$listing->city}}, {{$listing->state}} {{$listing->zip_code}}</span>
                                    </div>
                                    <span class="like-icon"></span>
                                </div>
                                <div class="star-rating" data-rating="3.5">
                                    <div class="rating-counter">(12 reviews)</div>
                                </div>
                            </a>
                        </div>
                        <!-- Listing Item / End -->

                        <!-- Listing Item -->

                        @endforeach
                    </div>

                </div>


            </div>

        </div>

    </section>

    <!-- Fullwidth Section / End -->


    <!-- Info Section -->
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="headline centered margin-top-80">
                    Plan The Vacation of Your Dreams
                    <span class="margin-top-25">Explore some of the best tips from around the world from our partners and friends.  Discover some of the most popular listings in Sydney.</span>
                </h2>
            </div>
        </div>

        <div class="row icons-container">
            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2 with-line">
                    <i class="im im-icon-Map2"></i>
                    <h3>Find Interesting Place</h3>
                    <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2 with-line">
                    <i class="im im-icon-Mail-withAtSign"></i>
                    <h3>Contact a Few Owners</h3>
                    <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum metus nullam viverra porta purus.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2">
                    <i class="im im-icon-Checked-User"></i>
                    <h3>Make a Reservation</h3>
                    <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin feugiat pharetra consectetur.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- Info Section / End -->


    <!-- Recent Blog Posts -->
    <section class="fullwidth border-top margin-top-70 padding-top-75 padding-bottom-75" data-background-color="#fff">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h3 class="headline centered margin-bottom-45">
                        From The Blog
                    </h3>
                </div>
            </div>

            <div class="row">
                <!-- Blog Post Item -->
                <div class="col-md-4">
                    <a href="pages-blog-post.html" class="blog-compact-item-container">
                        <div class="blog-compact-item">
                            <img src="" alt="">
                            <span class="blog-item-tag">Tips</span>
                            <div class="blog-compact-item-content">
                                <ul class="blog-post-tags">
                                    <li>22 August 2017</li>
                                </ul>
                                <h3>Hotels for All Budgets</h3>
                                <p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Blog post Item / End -->

                <!-- Blog Post Item -->
                <div class="col-md-4">
                    <a href="pages-blog-post.html" class="blog-compact-item-container">
                        <div class="blog-compact-item">
                            <img src="" alt="">
                            <span class="blog-item-tag">Tips</span>
                            <div class="blog-compact-item-content">
                                <ul class="blog-post-tags">
                                    <li>18 August 2017</li>
                                </ul>
                                <h3>The 50 Greatest Street Arts In London</h3>
                                <p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Blog post Item / End -->

                <!-- Blog Post Item -->
                <div class="col-md-4">
                    <a href="pages-blog-post.html" class="blog-compact-item-container">
                        <div class="blog-compact-item">
                            <img src="" alt="">
                            <span class="blog-item-tag">Tips</span>
                            <div class="blog-compact-item-content">
                                <ul class="blog-post-tags">
                                    <li>10 August 2017</li>
                                </ul>
                                <h3>The Best Cofee Shops In Sydney Neighborhoods</h3>
                                <p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Blog post Item / End -->

                <div class="col-md-12 centered-content">
                    <a href="pages-blog.html" class="button border margin-top-10">View Blog</a>
                </div>

            </div>

        </div>
    </section>
    <!-- Recent Blog Posts / End -->


    <!-- Footer
    ================================================== -->
    <div id="footer" class="sticky-footer">
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