<div class="dashboard-nav-inner">

    <ul data-submenu-title="Main">
        <li class="active"><a href="{{url('/dashboard')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
        <li><a href="{{url('/message')}}"><i class="sl sl-icon-envelope-open"></i> Messages </a></li>
        <li><a href="{{url('/bookings')}}"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
    </ul>

    <ul data-submenu-title="Listings">
        @if (Route::has('login'))
            @auth
        <li><a href="{{url('/my-list/'.Auth::User()->name)}}"><i class="sl sl-icon-layers"></i> My Listings</a>
            @else
                <script>window.location.href = "{{url('/')}}";</script>
                @endauth
            @endif
          
        </li>
        <li><a href="{{url('/reviews')}}"><i class="sl sl-icon-star"></i> Reviews</a></li>
        <li><a href="{{url('/bookmarks')}}"><i class="sl sl-icon-heart"></i> Bookmarks</a></li>
        <li><a href="{{url('/add-listing')}}"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
    </ul>

    <ul data-submenu-title="Account">
        <li><a href="{{url('/profile')}}"><i class="sl sl-icon-user"></i> My Profile</a></li>

        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="sl sl-icon-power"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>

</div>