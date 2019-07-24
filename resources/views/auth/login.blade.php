@extends('layouts.app')

@section('content')

<!-- main -->
<div class="w3layouts-main">
	<div class="bg-layer">
		<h1>Login</h1>
		<div class="header-main" style="max-width: 450px;">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">
			<form method="POST" action="{{ route('login') }}">
        @csrf
					<div class="icon1">
						<span class="fa fa-user"></span>
              <input id="email" type="email" placeholder="Email Address" required="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
            <input id="password" type="password" placeholder="Password" required="" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
					<div class="login-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>{{ __('Keep me logged in') }}</label>
					</div>
					<div class="bottom">
						<button class="btn">{{ __('Log in') }}</button>
					</div>
					<div class="links">
						<p>  @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif</p>
						<p class="right"><a class="btn btn-link" href="{{ route('register') }}">{{ __('New User? Register') }}</a>
						<div class="clear"></div>
					</div>
				</form>
			</div>
			<div class="social">
				<ul>
					<li>{{ __('or login using :') }} </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

@endsection
