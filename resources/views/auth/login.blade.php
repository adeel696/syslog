@extends('layouts.auth')

@push('style')

<style>
	.ftco-cover-1, .ftco-cover-1 .container > .row
	{
		height:150px;
		min-height:0px; !important
	}
</style>
@endpush
@section('content')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('home/img/trucksbk.png')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
      </div>
    </div>
  </div> 
</div>


<div class="site-section bg-light">
    <div class="row align-items-center justify-content-center">
      	<div class="col-md-4">
            <!-- begin login-brand -->
            <div class="login-brand bg-inverse text-white">
            <img src="../assets/img/logo-white.png" height="36" class="pull-right" alt="" /> Login
            </div>
            <!-- end login-brand -->
            <!-- begin login-content -->
            <div class="login-content">
             <form method="POST" action="{{ route('login') }}" class="form-input-flat">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                     {{ __('Remember Me') }}
                 </div>
                <div class="row m-b-20">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                    </div>
                </div>
            </form>
      	</div>
      </div>
    </div>
</div>
@endsection
