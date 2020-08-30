@extends('layouts.auth')

@push('style')

<style>
	.ftco-cover-1, .ftco-cover-1 .container > .row
	{
		height:150px;
		min-height:0px; !important
	}
	.invalid-feedback
	{
		display:block; !important
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
    <div class="row justify-content-center">
      	<div class="col-md-4">
            <!-- begin login-brand -->
            <div style="padding:15px">
	            <center>{{ utf8_encode('Déja member? Veuillez vous connecter ici') }}</center>
            </div>
            <div class="login-brand bg-inverse text-white">
            <img src="../assets/img/logo-white.png" height="36" class="pull-right" alt="" /> {{ utf8_encode(__('static.Login')) }}
            </div>
            <!-- end login-brand -->
            <!-- begin login-content -->
            <div class="login-content">
             <form method="POST" action="{{ route('login') }}" class="form-input-flat">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ utf8_encode(__('static.Email')) }} {{ utf8_encode(__('static.Address')) }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ utf8_encode(__('static.Password')) }}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                     Souviens-toi de moi
                 </div>
                <div class="row m-b-20">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">{{ utf8_encode(__('static.Login')) }}</button>
                    </div>
                </div>
            </form>
      	</div>
      </div>
      <div class="col-md-1" style="padding:0px;">
      	<div class="login-brand bg-inverse text-white" style="padding:1px; height:100%; float:right">
        </div>
      </div>
      <div class="col-md-1" style="padding:0px;">
      	<div class="login-brand bg-inverse text-white" style="padding:1px; height:100%; float:left">
        </div>
      </div>
      <div class="col-md-4">
            <!-- begin login-brand -->
            <div style="padding:15px">
	            <center>{{ utf8_encode('Pas encore member ? Veuillez vous incrire ici') }}</center>
            </div>
            <div class="login-brand bg-inverse text-white">
            <img src="../assets/img/logo-white.png" height="36" class="pull-right" alt="" /> {{ utf8_encode(__('static.Register')) }}
            </div>
            <!-- end login-brand -->
            <!-- begin login-content -->
             <div class="login-content">
             <form method="POST" action="{{ route('register') }}">
                @csrf
                <input type="hidden" name="country_id" value="{{ $country_id }}" />
                <div class="form-group">
                    <select name="type" class="form-control select-lg typeS">
                        <option value="1" {{ old('type') == 1 ? 'Selected' : '' }}>{{ utf8_encode(__('static.Asset Owner')) }}</option>
                        <option value="2" {{ old('type') == 2 ? 'Selected' : '' }}>{{ utf8_encode(__('static.Enterprise')) }}</option>
                        <option value="3" {{ old('type') == 3 ? 'Selected' : '' }}>Particuliers</option>
                    </select>
                </div>
                <div class="row row-space-14">
                    <div class="col-lg-6 m-b-15">
                        <input name="surname" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Sur Name')) }}" value="{{ old('surname') }}"/>
                        @error('surname')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 m-b-15">
                        <input name="name" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Name')) }}" value="{{ old('name') }}"/>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <input name="entreprise" id="entreprise" type="text" class="form-control input-lg" placeholder="Entreprise" value="{{ old('entreprise') }}"/>
                    @error('entreprise')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('entreprise') }}</strong>
                        </span>
                    @enderror

                </div>
               	<div class="form-group">
                    <input name="email" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Email')) }} {{ utf8_encode(__('static.Address')) }}" value="{{ old('email') }}"/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input name="mot_de_passe" type="password" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Password')) }}" />
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ utf8_encode(__('Mot de passé (8 caractères)')) }}</strong>
                    </span>
                    @error('mot_de_passe')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('mot_de_passe') }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input name="mot_de_passe_confirmation" type="password" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Confirm')) }} {{ utf8_encode(__('static.Password')) }}" />
                </div>
                <div class="form-group">
                    <input name="phone_number" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Phone Number')) }}" value="{{ old('phone_number') }}"/>
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <textarea name="address" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Address')) }}">{{ old('address') }}</textarea>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input name="rccm_number" id="rccm_number" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Number')) }} RCCM " value="{{ old('rccm_number') }}"/>
                    @error('rccm_number')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('rccm_number') }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <input name="tax_number" id="tax_number" type="text" class="form-control input-lg" placeholder="{{ utf8_encode(__('static.Number')) }} {{ utf8_encode(__('static.Tax')) }}" value="{{ old('tax_number') }}"/>
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

@push('scripts') 
<script>
	$( ".typeS" ).change(function() {
		if($(this).val() == "3")
		{
			$("#entreprise").hide();
			$("#tax_number").hide();
			$("#rccm_number").hide();
		}
		else
		{
			$("#entreprise").show();
			$("#tax_number").show();
			$("#rccm_number").show();
		}
	});
</script>
@endpush
