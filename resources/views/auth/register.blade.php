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
                <input type="hidden" name="country_id" value="{{ $country_id }}" />
                <div class="form-group">
                    <select name="type" class="form-control select-lg">
                        <option value="1">{{ utf8_encode(__('static.Asset Owner')) }}</option>
                        <option value="2">{{ utf8_encode(__('static.Enterprise')) }}</option>
                    </select>
                </div>
                <div class="row row-space-14">
                    <div class="col-lg-6 m-b-15">
                        <input name="surname" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Sur Name')) }}" />
                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 m-b-15">
                        <input name="name" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Name')) }}" />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
               	<div class="form-group">
                    <input name="email" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Email')) }} {{ utf8_encode(__('static.Address')) }}" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Password')) }}" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="password_confirmation" type="password" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Confirm')) }} {{ utf8_encode(__('static.Password')) }}" />
                </div>
                <div class="form-group">
                    <input name="phone_number" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Phone')) }} {{ utf8_encode(__('static.Number')) }}" />
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <textarea name="address" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Address')) }}"></textarea>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input name="tax_number" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Tax')) }} {{ utf8_encode(__('static.Number')) }}" />
                    @error('tax_number')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('tax_number') }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="row m-b-20">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">{{ utf8_encode(__('static.Register')) }}</button>
                    </div>
                </div>
            </form>
      	</div>
      </div>
    </div>
</div>
@endsection
