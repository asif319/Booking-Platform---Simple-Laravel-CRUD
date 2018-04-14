
{{--<div class="sign-in-form style-1">--}}

    {{--<ul class="tabs-nav">--}}

        {{--<li class=""><a href="#tab1">Log In</a></li>--}}
        {{--<li><a href="#tab2">Register</a></li>--}}

    {{--</ul>--}}

    {{--<div class="tabs-container alt">--}}

        {{--<!-- Login -->--}}
        {{--<div class="tab-content" id="tab1" style="display: none;">--}}
            {{--<form method="POST" class="login" action="{{ route('login') }}">--}}
                {{--{{ csrf_field() }}--}}

                {{--<p class="form-row form-row-wide">--}}
                    {{--<label for="username">E-Mail Address:--}}
                        {{--<i class="im im-icon-Male"></i>--}}
                        {{--<input id="email" type="email" class="input-text" name="email"  value="{{ old('email') }}" required autofocus />--}}
                    {{--</label>--}}
                {{--</p>--}}

                {{--<p class="form-row form-row-wide">--}}
                    {{--<label for="password">Password:--}}
                        {{--<i class="im im-icon-Lock-2"></i>--}}
                        {{--<input id="password" class="input-text" type="password" name="password" required />--}}
                    {{--</label>--}}
                    {{--<span class="lost_password">--}}
										{{--<a href="{{ route('password.request') }}" >Lost Your Password?</a>--}}
									{{--</span>--}}
                {{--</p>--}}

                {{--<div class="form-row">--}}
                    {{--<input type="submit" class="button border margin-top-5" name="login" value="Login" />--}}
                    {{--<div class="checkboxes margin-top-10">--}}
                        {{--<input type="checkbox" id="remember-me"  name="remember" {{ old('remember') ? 'checked' : '' }}>--}}
                        {{--<label for="remember-me">Remember Me</label>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</form>--}}
        {{--</div>--}}

        {{--<!-- Register -->--}}
        {{--<div class="tab-content" id="tab2" style="display: none;">--}}

            {{--<form method="post" class="register" action="{{ route('register') }}">--}}
                {{--{{ csrf_field() }}--}}

                {{--<p class="form-row form-row-wide">--}}
                    {{--<label for="username2">Username:--}}
                        {{--<i class="im im-icon-Male"></i>--}}
                        {{--<input id="name" type="text" class="input-text" name="name"  value="{{ old('name') }}" required autofocus />--}}
                    {{--</label>--}}
                {{--</p>--}}

                {{--<p class="form-row form-row-wide">--}}
                    {{--<label for="email2">Email Address:--}}
                        {{--<i class="im im-icon-Mail"></i>--}}
                        {{--<input id="email" type="email" class="input-text" name="email"  value="{{ old('email') }}" required />--}}
                    {{--</label>--}}
                {{--</p>--}}

                {{--<p class="form-row form-row-wide">--}}
                    {{--<label for="password1">Password:--}}
                        {{--<i class="im im-icon-Lock-2"></i>--}}
                        {{--<input id="password" type="password" class="input-text"  name="password" required />--}}
                    {{--</label>--}}
                {{--</p>--}}

                {{--<p class="form-row form-row-wide">--}}
                    {{--<label for="password2">Repeat Password:--}}
                        {{--<i class="im im-icon-Lock-2"></i>--}}
                        {{--<input id="password-confirm" type="password" class="input-text"  name="password_confirmation"  required />--}}
                    {{--</label>--}}
                {{--</p>--}}

                {{--<input type="submit" class="button border fw margin-top-10"  value="Register" />--}}

            {{--</form>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}

