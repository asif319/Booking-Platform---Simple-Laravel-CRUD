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
                                <li><a href="#">Dashboard</a></li>
                                <li>My Profile</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Profile -->
                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-list-box margin-top-0">
                        <h4 class="gray">Profile Details</h4>
                        <div class="dashboard-list-box-static">

                            <!-- Avatar -->
                            <div class="edit-profile-photo">
                                <img src="/uploads/{{$user->avater}}" alt="">
                                {!! Form::open (['url' => '/profile', 'method' => 'post', 'files'=>'true', 'enctype' => 'multipart/form-data']) !!}
                                <div class="change-photo-btn">
                                    <div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload" />
                                    </div>
                                </div>


                            </div>
                            <button class="button margin-top-15">Save Photo</button>
                        {!! Form::close () !!}
                            <!-- Details -->
                            <div class="my-profile">

                                <label>Your Name</label>
                                <input value="Tom Perrin" type="text">

                                <label>Phone</label>
                                <input value="(123) 123-456" type="text">



                                <label>Notes</label>
                                <textarea name="notes" id="notes" cols="30" rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>

                                <label><i class="fa fa-twitter"></i> Twitter</label>
                                <input placeholder="https://www.twitter.com/" type="text">

                                <label><i class="fa fa-facebook-square"></i> Facebook</label>
                                <input placeholder="https://www.facebook.com/" type="text">

                                <label><i class="fa fa-google-plus"></i> Google+</label>
                                <input placeholder="https://www.google.com/" type="text">
                            </div>

                            <button class="button margin-top-15">Save Changes</button>

                        </div>
                    </div>
                </div>

                <!-- Change Password -->
                {{--<div class="col-lg-6 col-md-12">--}}
                    {{--<div class="dashboard-list-box margin-top-0">--}}
                        {{--<h4 class="gray">Change Password</h4>--}}
                        {{--<div class="dashboard-list-box-static">--}}
                            {{--<!-- Change Email -->--}}
                            {{--<label>Email</label>--}}
                            {{--<input value="tom@example.com" type="text">--}}
                            {{--<!-- Change Password -->--}}
                            {{--<div class="my-profile">--}}
                                {{--<label class="margin-top-0">Current Password</label>--}}
                                {{--<input type="password">--}}

                                {{--<label>New Password</label>--}}
                                {{--<input type="password">--}}

                                {{--<label>Confirm New Password</label>--}}
                                {{--<input type="password">--}}

                                {{--<button class="button margin-top-15">Change Password</button>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


                <!-- Copyrights -->
                <div class="col-md-12">
                    <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
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