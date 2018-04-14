<div class="right-side">
    <div class="header-widget">
        @if (Route::has('login'))

            @auth
            <div class="user-menu">
                <div class="user-name"><span><img src="/public/imageeee/{{Auth::User()->avater}}" alt=""></span>{{Auth::user()->name}}</div>
                <ul>
                    <li><a href="{{url ('/dashboard')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                    <li><a href="{{url ('/message')}}"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                    <li><a href="{{url ('/bookings')}}"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><i class="sl sl-icon-power"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>

            <a href="{{url ('/add-listing') }}" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
        @else
            <script>window.location.href = "{{url('/')}}";</script>
            
            @endauth
        @endif
    </div>
</div>