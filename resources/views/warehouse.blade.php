@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('home/img/warehousebk.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-9 text-center">
            <h1>{{ utf8_encode(__("Votre solution sur mesure !")) }}</h1><br>      
        </div>
      </div>
    </div>
  </div>
</div>


<div class="bg-light" style="padding:50px">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4" id="catName">{{ utf8_encode(__('static.Warehouse')) }}</h2>
        </div>
    </div>
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <span class="alert">{!! session('flash_message') !!}</span>
        </div>
    </div>
    <div class="container">
    	<div class="row" id="default">
         <div class="col-lg-6" >
            {!! Form::open([ 'url' => '/warehouse', 'files' => true, 'id' => 'main-form' ]) !!}
               <input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
               <div class="form-group row">
                  <div class="col-md-12">
                     <label>Type de produits:</label>
                     <select name="product_type" class="form-control">
                     	<option><?php echo utf8_encode("denrée alimentaire"); ?></option>
                        <option><?php echo utf8_encode("Textile et vêtements"); ?></option>
                        <option><?php echo utf8_encode("Produits chimiques"); ?></option>
                        <option><?php echo utf8_encode("Informatique électronique"); ?></option>
                        <option><?php echo utf8_encode("électroménager"); ?></option>
                        <option><?php echo utf8_encode("fournitures de bureau"); ?></option>
                        <option><?php echo utf8_encode("Matières premières"); ?></option>
                        <option><?php echo utf8_encode("Matériaux de construction"); ?></option>
                        <option><?php echo utf8_encode("Autres"); ?></option>
                     </select>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="designation " class="form-control" placeholder="{{ utf8_encode(__('static.Designation')) }} "></textarea>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <label><?php echo utf8_encode("Type de Conditionnement"); ?>:</label>
                     <select name="packaging" class="form-control">
                        <option><?php echo utf8_encode("Carton"); ?></option>
                        <option><?php echo utf8_encode("Palette"); ?></option>
                        <option><?php echo utf8_encode("Caisse en bois"); ?></option>
                        <option><?php echo utf8_encode("Caisse metallique"); ?></option>
                        <option><?php echo utf8_encode("Fût plastique"); ?></option>
                        <option><?php echo utf8_encode("Fût metallique"); ?></option>
                        <option><?php echo utf8_encode("Pack Filmé en plastique"); ?></option>
                        <option><?php echo utf8_encode("Conteneur"); ?></option>
                        <option><?php echo utf8_encode("Sac( jute, plastique...)"); ?></option>
                        <option><?php echo utf8_encode("Bidon"); ?></option>
                        <option><?php echo utf8_encode("Autres"); ?></option>
                     </select>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="weight" class="form-control" placeholder="<?php echo utf8_encode("Poids"); ?>">
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="volume" class="form-control" placeholder="<?php echo utf8_encode("Volume total"); ?>">
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="approx_storage_time" class="form-control" placeholder="{{ utf8_encode(__('static.Approx Storage Time')) }}">
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <label>{{ utf8_encode(__('static.Needed Space')) }} (m2):</label>
                     <select name="needed_space" class="form-control">
                     	<option><?php echo utf8_encode("10 - 50m2 "); ?></option>
                        <option><?php echo utf8_encode("50 - 100m2"); ?></option>
                        <option><?php echo utf8_encode("100 - 200m2"); ?></option>
                        <option><?php echo utf8_encode("200 - 300m2 "); ?></option>
                        <option><?php echo utf8_encode("300-400m2 "); ?></option>
                        <option><?php echo utf8_encode("400-500m2"); ?></option>
                        <option><?php echo utf8_encode("more than 500m2"); ?></option>
                     </select>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-6">
						<label><?php echo utf8_encode("Préférences:"); ?></label>
                        <input type="text" name="preference_text" class="form-control" placeholder="<?php echo utf8_encode("Préférences"); ?>" />
                        <input type="hidden" name="preferences" value="1" />
                  </div>
                  <div class="col-md-6">
						<label>{{ utf8_encode(__('static.City')) }}</label>
                        <select name="city_id" class="form-control select2">
                            @foreach(App\Models\City::All() as $city)
                                <?php echo '<option value='."'".''.$city->id."'".'>'. ($city->name).'</option>' ?>
                            @endforeach
                         </select>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                     <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="{{ utf8_encode(__('static.Reserve')) }}">
                  </div>
               </div>
            </form>
         </div>
         <div class="col-lg-6" >
            <img id="catImage" src="{{ url('/home/img/hero-warehouse.png') }}" width="100%" />
         </div>
      </div>
    </div>
</div>
@endsection
@push('scripts') 
<script>
	$("html, body").animate({ scrollTop: $('#default').offset().top-200 }, 600);
	
	var City = '';
	var Others = '';
	$("#preferencesDiv").html(City);
	$("#preferencesDiv").append(Others);
	$('input[name=preferences]').change(function() {
		switch ($(this).val()) {
			case '1':
				$("#preferencesDiv").html(City);
			break;
			case '2':
				$("#preferencesDiv").html(Others);
			break;
		}
	});
	
	$( "#main-form" ).submit(function( event ) {
		if($("#user_id").val() == "")
		{
			window.location.href = "{{ url('login') }}";
			return false;
		}
	});
</script>
@endpush
