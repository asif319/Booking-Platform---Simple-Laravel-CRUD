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
                        <a href="{{url('/')}}"><img src="/images/meeters.png" alt=""></a>
                        <a href="{{url('/')}}" class="dashboard-logo"><img src="/images/meeters.png" alt=""></a>
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
                        <h2>Add Listing</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Add Listing</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="add-listing">
                        {{--<h1 style="text-align: center;color: red"><a href="/my-list">{{Session::get('message')}}</a></h1>--}}
                    {!! Form::open (['url' => '/list-update/'.$listing->id, 'method' => 'post', 'files'=>'true', 'enctype' => 'multipart/form-data']) !!}
                    <!-- Section -->
                        <div class="add-listing-section">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
                            </div>

                            <!-- Title -->

                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <h5>Listing Title <i class="tip" data-tip-content="Name of your business"></i></h5>
                                    <input class="search-field" type="text" value="{{$listing->title}}" name="title" placeholder="Title" required/>
                                    <input class="search-field" type="hidden" value="{{$listing->id}}" name="idd" />
                                </div>
                            </div>


                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- Status -->
                                <div class="col-md-6">
                                    <h5>Category</h5>
                                    <select class="chosen-select-no-single" name="category" value="{{$listing->category}}" >
                                        <option label="blank">Select Category</option>
                                        <option>Eat & Drink</option>
                                        <option>Shops</option>
                                        <option>Hotels</option>
                                        <option>Restaurants</option>
                                        <option>Fitness</option>
                                        <option>Events</option>
                                    </select>
                                </div>

                                <!-- Type -->
                                <div class="col-md-6">
                                    <h5>Keywords <i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></h5>
                                    <input type="text" name="keywords" value="{{$listing->keywords}}" placeholder="Keywords should be separated by commas" required>
                                </div>

                            </div>
                            <!-- Row / End -->

                        </div>
                        <!-- Section / End -->

                        <!-- Section -->
                        <div class="add-listing-section margin-top-45">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-location"></i> Location</h3>
                            </div>

                            <div class="submit-section">

                                <!-- Row -->
                                <div class="row with-forms">

                                    <!-- City -->
                                    <div class="col-md-6">
                                        <h5>City</h5>
                                        <select class="chosen-select-no-single" name="city" value="{{$listing->city}}" >
                                            <option label="blank">Select City</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Houston</option>
                                            <option>Phoenix</option>
                                            <option>San Diego</option>
                                            <option>Austin</option>
                                        </select>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-md-6">
                                        <h5>Address</h5>
                                        <input type="text" name="address" value="{{$listing->address}}" placeholder="e.g. 964 School Street" required>
                                    </div>

                                    <!-- City -->
                                    <div class="col-md-6">
                                        <h5>State</h5>
                                        <input type="text" name="state" value="{{$listing->state}}" required>
                                    </div>

                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <h5>Zip-Code</h5>
                                        <input type="text" name="zip_code" value="{{$listing->zip_code}}" required>
                                    </div>

                                </div>
                                <!-- Row / End -->

                            </div>
                        </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <div class="add-listing-section margin-top-45">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-picture"></i> Gallery</h3>
                            </div>

                            <!-- Dropzone -->
                            <div class="submit-section">
                                <input class="dropzone" type="file" name="upload_file" value="{{$listing->upload_file}}" required>
                                <img src="{{asset($listing->upload_file)}} " alt="" height="150" width="150">
                            </div>

                        </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <div class="add-listing-section margin-top-45">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-docs"></i> Details</h3>
                            </div>

                            <!-- Description -->
                            <div class="form">
                                <h5>Description</h5>
                                <textarea class="WYSIWYG" name="description" cols="40" rows="3" id="description" spellcheck="true" required>{{$listing->description}}</textarea>
                                {{--<input type="text" class="WYSIWYG" name="description" cols="40" rows="3" id="description" spellcheck="true">--}}
                            </div>

                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- Phone -->
                                <div class="col-md-4">
                                    <h5>Phone</h5>
                                    <input type="text" name="phone" value="{{$listing->phone}}" required>
                                </div>

                                <!-- Email Address -->
                                <div class="col-md-4">
                                    <h5>E-mail</h5>
                                    <input type="text" name="email" value="{{$listing->email}}" required>
                                </div>

                                <!-- Website -->
                                <div class="col-md-4">
                                    <h5>Website <span>(optional)</span></h5>
                                    <input type="text" name="website" value="{{$listing->website}}">
                                </div>



                            </div>
                            <!-- Row / End -->


                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- Phone -->
                                <div class="col-md-4">
                                    <h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></h5>
                                    <input type="text" placeholder="https://www.facebook.com/" name="fb" value="{{$listing->fb}}">
                                </div>

                                <!-- Website -->
                                <div class="col-md-4">
                                    <h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(optional)</span></h5>
                                    <input type="text" placeholder="https://www.twitter.com/" name="twitr" value="{{$listing->twitr}}">
                                </div>

                                <!-- Email Address -->
                                <div class="col-md-4">
                                    <h5 class="gplus-input"><i class="fa fa-google-plus"></i> Google Plus <span>(optional)</span></h5>
                                    <input type="text" placeholder="https://plus.google.com" name="google" value="{{$listing->google}}">
                                </div>

                            </div>
                            <!-- Row / End -->


                            <!-- Checkboxes -->
                            <h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
                            <div class="checkboxes in-row margin-bottom-20">

                                <input id="check-a" type="checkbox" name="elevator" value="Elevator in building" >
                                <label for="check-a">Elevator in building</label>

                                <input id="check-b" type="checkbox" name="workspace" value="Friendly workspace" >
                                <label for="check-b">Friendly workspace</label>

                                <input id="check-c" type="checkbox" name="booking" value="Instant Book" >
                                <label for="check-c">Instant Book</label>

                                <input id="check-d" type="checkbox" name="internet" value="Wireless Internet" >
                                <label for="check-d">Wireless Internet</label>

                                <input id="check-e" type="checkbox" name="parking" value="Free parking on premises" >
                                <label for="check-e">Free parking on premises</label >

                                <input id="check-f" type="checkbox" name="street" value="Free parking on street" >
                                <label for="check-f">Free parking on street</label>

                                <input id="check-g" type="checkbox" name="smoking" value="Smoking allowed" >
                                <label for="check-g">Smoking allowed</label>

                                <input id="check-h" type="checkbox" name="events" value="Events" >
                                <label for="check-h">Events</label>

                            </div>
                            <!-- Checkboxes / End -->

                        </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <div class="add-listing-section margin-top-45">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
                                <!-- Switcher -->
                                <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                            </div>

                            <!-- Switcher ON-OFF Content -->
                            <div class="switcher-content">

                                <!-- Day -->
                                <div class="row opening-day">
                                    <div class="col-md-2"><h5>Monday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time" name="monday_op">
                                            <option label="Opening Time"></option>
                                            <option>Closed</option>
                                            <option>1 AM</option>
                                            <option>2 AM</option>
                                            <option>3 AM</option>
                                            <option>4 AM</option>
                                            <option>5 AM</option>
                                            <option>6 AM</option>
                                            <option>7 AM</option>
                                            <option>8 AM</option>
                                            <option>9 AM</option>
                                            <option>10 AM</option>
                                            <option>11 AM</option>
                                            <option>12 AM</option>
                                            <option>1 PM</option>
                                            <option>2 PM</option>
                                            <option>3 PM</option>
                                            <option>4 PM</option>
                                            <option>5 PM</option>
                                            <option>6 PM</option>
                                            <option>7 PM</option>
                                            <option>8 PM</option>
                                            <option>9 PM</option>
                                            <option>10 PM</option>
                                            <option>11 PM</option>
                                            <option>12 PM</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time" name="monday_cl">
                                            <option label="Closing Time"></option>
                                            <option>Closed</option>
                                            <option>1 AM</option>
                                            <option>2 AM</option>
                                            <option>3 AM</option>
                                            <option>4 AM</option>
                                            <option>5 AM</option>
                                            <option>6 AM</option>
                                            <option>7 AM</option>
                                            <option>8 AM</option>
                                            <option>9 AM</option>
                                            <option>10 AM</option>
                                            <option>11 AM</option>
                                            <option>12 AM</option>
                                            <option>1 PM</option>
                                            <option>2 PM</option>
                                            <option>3 PM</option>
                                            <option>4 PM</option>
                                            <option>5 PM</option>
                                            <option>6 PM</option>
                                            <option>7 PM</option>
                                            <option>8 PM</option>
                                            <option>9 PM</option>
                                            <option>10 PM</option>
                                            <option>11 PM</option>
                                            <option>12 PM</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->

                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Tuesday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time" name="tuesday_op">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time" name="tuesday_cl">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->

                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Wednesday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time" name="wednesday_op">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time" name="wednesday_cl">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->

                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Thursday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time" name="thursday_op">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time" name="thursday_cl">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->

                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Friday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time" name="friday_op">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time" name="friday_cl">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->

                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Saturday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time" name="saturday_op">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time" name="saturday_cl">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->

                                <!-- Day -->
                                <div class="row opening-day js-demo-hours">
                                    <div class="col-md-2"><h5>Sunday</h5></div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Opening Time" name="sunday_op">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select class="chosen-select" data-placeholder="Closing Time" name="sunday_cl">
                                            <!-- Hours added via JS (this is only for demo purpose) -->
                                        </select>
                                    </div>
                                </div>
                                <!-- Day / End -->

                            </div>
                            <!-- Switcher ON-OFF Content / End -->

                        </div>
                        <!-- Section / End -->


                        <!-- Section -->
                        <div class="add-listing-section margin-top-45">

                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3><i class="sl sl-icon-book-open"></i> Pricing</h3>
                                <!-- Switcher -->
                                <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                            </div>

                            <!-- Switcher ON-OFF Content -->
                            <div class="switcher-content">

                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="pricing-list-container">
                                            <tr class="pricing-list-item pattern">
                                                <td>
                                                    <form >
                                                        <div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
                                                        <div class="fm-input pricing-name"><input type="text" placeholder="Title" name="pricing_product" value="{{$listing->pricing_product}}" /></div>

                                                        <div class="fm-input pricing-ingredients"><input type="text" placeholder="Description" name="pricing_des" value="{{$listing->pricing_des}}" /></div>

                                                        <div class="fm-input pricing-price"><input type="text" placeholder="Price" data-unit="USD"  name="price" value="{{$listing->price}}" /></div>


                                                        <div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
                                                    </form>
                                                </td>
                                            </tr>
                                        </table>
                                        {{--<a href="#" class="button add-pricing-list-item">Add Item</a>--}}
                                        {{--<a href="#" class="button add-pricing-submenu">Add Category</a>--}}
                                    </div>
                                </div>

                            </div>
                        <!-- Switcher ON-OFF Content / End -->

                        </div>
                        <!-- Section / End -->

                        <input class="button preview" type="submit">
                        {{--<a href="#" class="button preview">Submit <i class="fa fa-arrow-circle-right"></i></a>--}}
                        {!! Form::close () !!}
                    </div>
                </div>

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


<!-- Opening hours added via JS (this is only for demo purpose) -->
<script>
    $(".opening-day.js-demo-hours .chosen-select").each(function() {
        $(this).append(''+
            '<option></option>'+
            '<option>Closed</option>'+
            '<option>1 AM</option>'+
            '<option>2 AM</option>'+
            '<option>3 AM</option>'+
            '<option>4 AM</option>'+
            '<option>5 AM</option>'+
            '<option>6 AM</option>'+
            '<option>7 AM</option>'+
            '<option>8 AM</option>'+
            '<option>9 AM</option>'+
            '<option>10 AM</option>'+
            '<option>11 AM</option>'+
            '<option>12 AM</option>'+
            '<option>1 PM</option>'+
            '<option>2 PM</option>'+
            '<option>3 PM</option>'+
            '<option>4 PM</option>'+
            '<option>5 PM</option>'+
            '<option>6 PM</option>'+
            '<option>7 PM</option>'+
            '<option>8 PM</option>'+
            '<option>9 PM</option>'+
            '<option>10 PM</option>'+
            '<option>11 PM</option>'+
            '<option>12 PM</option>');
    });
</script>

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="/scripts/dropzone.js"></script>


</body>
</html>
