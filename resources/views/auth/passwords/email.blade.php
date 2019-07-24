@extends('layouts.app')
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
@section('content')
<div class="w3layouts-main">
	<div class="bg-layer">
		<h1>Reset Password</h1>
		<div class="header-main" style="max-width: 450px;">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>
			<div class="header-left-bottom">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf





														<div class="icon1">
																	<input id="email" placeholder="Enter Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

																	@error('email')
																			<span class="invalid-feedback" role="alert">
																					<strong>{{ $message }}</strong>
																			</span>
																	@enderror
															</div>



                            <div class="bottom">
                                <button type="submit" class="btn">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
														<div class="card-body">
														@error('email')
																	<span class="invalid-feedback" role="alert">
																			<strong>{{ $message }}</strong>
																	</span>
															@enderror
															</div>

                    </form>



                  </div>

                </div>
              </div>
            </div>





                </div>

@endsection
