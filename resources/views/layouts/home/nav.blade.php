<nav id="navigation" class="style-1">
    <ul id="responsive">

        <li><a class="current" href="{{url('/')}}">Home</a>
           
        </li>

        <li><a href="{{url('/list-layout')}}">Listings</a>
           
        </li>
        @if (Route::has('login'))

            @auth
        <li><a href="#">User Panel</a>
            <ul>
                <li><a href="{{url ('/dashboard')}}">Dashboard</a></li>
                <li><a href="{{url ('/message')}}">Messages</a></li>
                <li><a href="{{url ('/bookings')}}">Bookings</a></li>
                <li><a href="{{url('/my-list/{name}')}}">My Listings</a></li>
                <li><a href="{{url ('/reviews')}}">Reviews</a></li>
                <li><a href="{{url ('/bookmarks')}}">Bookmarks</a></li>
                <li><a href="{{url('/add-listing')}}">Add Listing</a></li>
                <li><a href="{{url('/profile')}}">My Profile</a></li>
                <li><a href="{{url('/invoice')}}">Invoice</a></li>
            </ul>
        </li>
            <li><a href="#">Pages</a>
                <div class="mega-menu mobile-styles three-columns">

                    <div class="mega-menu-section">
                        <ul>
                            <li class="mega-menu-headline">Pages #1</li>
                            <li><a href="{{url('/profile')}}"><i class="sl sl-icon-user"></i> User Profile</a></li>
                            <li><a href="{{url('/user-booking')}}"><i class="sl sl-icon-check"></i> Booking Page</a></li>
                            <li><a href="{{url('/add-listing')}}"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
                            <li><a href="{{url('/blog')}}"><i class="sl sl-icon-docs"></i> Blog</a></li>
                        </ul>
                    </div>

                    <div class="mega-menu-section">
                        <ul>
                            <li class="mega-menu-headline">Pages #2</li>
                            <li><a href="{{url('/contact')}}"><i class="sl sl-icon-envelope-open"></i> Contact</a></li>
                            <li><a href="{{url('/coming-soon')}}"><i class="sl sl-icon-hourglass"></i> Coming Soon</a></li>
                           
                        </ul>
                    </div>

                  

                </div>
            </li>
        @else
        @endauth
        @endif


    </ul>

</nav>