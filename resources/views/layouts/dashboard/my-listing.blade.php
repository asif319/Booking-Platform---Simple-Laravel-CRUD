<!DOCTYPE html>
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
                        <a href="{{url ('/')}}"><img src="/images/meeters.png" alt=""></a>
                        <a href="{{url ('/')}}" class="dashboard-logo"><img src="/images/meeters.png" alt=""></a>
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

                        <h2>My Listings</h2>

                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>My Listings</li>
                            </ul>
                        </nav>

                        <h4>Active Listings</h4>
                        <h2 style="text-align: center;color: darkgreen">{{Session::get('message')}}</h2>

                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Listings -->

               @foreach($alllisting as $listing)
                    @if(Auth::User()->id == 6)

                <div class="col-lg-12 col-md-12">

                    <div class="dashboard-list-box margin-top-0">
                        <ul>

                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="{{url('/show-listing/')}}/{{$listing->id}}"><img src="{{asset($listing->upload_file)}}" alt="{{$listing->upload_file}}"></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            {{--<h3><a href="{{url('/show-listing/')}}/{{$listing->id}}">{{$listing->title}}</a></h3>--}}
                                            <h3><a href="{{url('/show-listing/'.$listing->id)}}">{{$listing->title}}</a></h3>
                                            <span>{{$listing->address}} {{$listing->city}}, {{$listing->state}} {{$listing->zip_code}}</span>
                                            <div class="star-rating" data-rating="3.5">
                                                <div class="rating-counter">(12 reviews)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="{{url('/list-edit/'.$listing->id)}}" class="button gray"><i class="sl sl-icon-note"></i> Edit</a>
                                    <a href="{{url('/list-delete/'.$listing->id)}}" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>




                    @elseif(Auth::User()->id == $listing->user_id)

                <div class="col-lg-12 col-md-12">

                    <div class="dashboard-list-box margin-top-0">
                        <ul>

                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="{{url('/show-listing/')}}/{{$listing->id}}"><img src="{{asset($listing->upload_file)}}" alt=""></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            {{--<h3><a href="{{url('/show-listing/')}}/{{$listing->id}}">{{$listing->title}}</a></h3>--}}
                                            <h3><a href="{{url('/show-listing/'.$listing->id)}}">{{$listing->title}}</a></h3>
                                            <span>{{$listing->address}} {{$listing->city}}, {{$listing->state}} {{$listing->zip_code}}</span>
                                            <div class="star-rating" data-rating="3.5">
                                                <div class="rating-counter">(12 reviews)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="{{url('/list-edit/'.$listing->id)}}" class="button gray"><i class="sl sl-icon-note"></i> Edit</a>
                                    <a href="{{url('/list-delete/'.$listing->id)}}" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
@endif

            @endforeach


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
<script type="text/javascript" src="/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="/scripts/mmenu.min.js"></script>
<script type="text/javascript" src="/scripts/chosen.min.js"></script>
<script type="text/javascript" src="/scripts/slick.min.js"></script>
<script type="text/javascript" src="/scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="/scripts/waypoints.min.js"></script>
<script type="text/javascript" src="/scripts/counterup.min.js"></script>
<script type="text/javascript" src="/scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="/scripts/custom.js"></script>


</body>
</html>