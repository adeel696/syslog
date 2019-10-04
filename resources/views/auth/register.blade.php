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
            <img src="../assets/img/logo-white.png" height="36" class="pull-right" alt="" /> Register
            </div>
            <!-- end login-brand -->
            <!-- begin login-content -->
            <div class="login-content">
             <form method="POST" action="{{ route('register') }}">
                        @csrf
                
                <div class="row row-space-14">
                    <div class="col-lg-6 m-b-15">
                        <input name="surname" type="text" class="form-control input-lg" placeholder="Sur Name" />
                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 m-b-15">
                        <input name="name" type="text" class="form-control input-lg" placeholder="Name" />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
               	<div class="form-group">
                    <input name="email" type="text" class="form-control input-lg" placeholder="Email Address" />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input name="password" type="text" class="form-control input-lg" placeholder="Password" />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="confirm-password" type="text" class="form-control input-lg" placeholder="Re-enter Password" />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea name="address" type="text" class="form-control input-lg" placeholder="Address"></textarea>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input name="email" type="text" class="form-control input-lg" placeholder="Tax Number" />
                    @error('tax_number')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="row m-b-20">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                    </div>
                </div>
            </form>
      	</div>
      </div>
    </div>
</div>
@endsection
