@extends('layouts.app')

@section('content')
<div class="w3layouts-main">
  <div class="bg-layer">
    <h1>Register</h1>
    <div class="header-main" style="max-width: 450px;">
      <div class="main-icon">
        <span class="fa fa-eercast"></span>
      </div>
      <div class="header-left-bottom">
        <form method="POST" action="{{ route('register') }}">
            @csrf
          <div class="icon1">
            <span class="fa fa-user-circle"></span>
            <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name" required=""/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
                    <div class="icon1">
            <span class="fa fa-graduation-cap"></span>
            <input id="roll" type="text" class=" @error('name') is-invalid @enderror" name="roll" value="{{ old('roll') }}" required autocomplete="roll" autofocus placeholder="ASTU Roll Number" required=""/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
                    <div class="icon1">
            <span class="fa fa-university"></span>
            <input id="branch" type="text" name="branch" value="{{ old('branch') }}" required autocomplete="branch" autofocus placeholder="Branch" required=""/>


          </div>
                    <div class="icon1">
            <span class="fa fa-calendar"></span>
            <input style="outline: none;font-size: 15px;color: #222;border:none;width: 90%;display: inline-block;background: transparent;letter-spacing: 1px;" id="year" type="number" min="1900" max="2099" step="1" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus placeholder="Admission Year" required=""/>
          </div>
                    <div class="icon1">
            <span class="fa fa-envelope"></span>
            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address" required=""/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
                    <div class="icon1">
            <span class="fa fa-lock"></span>
            <input id="password" type="password" placeholder="Password" required="" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="icon1">
            <span class="fa fa-lock"></span>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
          </div>
          <div class="bottom">
            <button class="btn">Register</button>
          </div>
                    <div class="links">
            <p><a href="{{ route('login') }}">Sign in instead?</a></p>
            <div class="clear"></div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>













@endsection
