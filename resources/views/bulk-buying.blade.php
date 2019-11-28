@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('home/img/bulkbuying.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-9 text-center">
            <h1>{{ utf8_encode(__("Am�liorons vos finances")) }}</h1><br>   
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section bg-light">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4" id="catName">{{ utf8_encode('Assurance') }}</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::Where('type',1)->Get() as $offer)
            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group" style="background-color:#fff; padding:20px">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4 col-xs-4 form-group">
                    <img src="{{ url('media/offers/').'/'.$offer->image }}" alt="Image" class="img-fluid" height="100%">
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 form-group">
                    <h5>
                        {{ utf8_encode($offer->title) }}
                    </h5>
                    <ul>
                        <li> <b>{{ utf8_encode('Type assurance') }}:</b>  {{ utf8_encode($offer->insurance_type) }}</li>
                        <li><b>{{ utf8_encode('Age de vehicule') }}: </b>{{ utf8_encode($offer->range_of_age_of_vehicule) }}</li>
                        <li><b>{{ utf8_encode('Value of vehicule') }}: </b>{{ utf8_encode($offer->value_of_vehicle) }}</li>
                        <li><b>{{ utf8_encode('Puissance moteur') }}: </b>{{ utf8_encode($offer->power) }}</li>
                        <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                    </ul>
                    <h5>
                        {{ utf8_encode(__('static.Desription')) }}
                    </h5>
                    <p>{{ utf8_encode($offer->description) }}</p>
                    <p class="pull-right"><a href="javascript:void(0)" class="btn btn-primary subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                  </div>
               </div>
            </div>
            @endforeach
            </div>
          </div>
        </div>
    </div>
    <br />
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4" id="catName">{{ utf8_encode('Pi�ces d�tach�es') }}</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::Where('type',2)->Get() as $offer)
            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group" style="background-color:#fff; padding:20px">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4 col-xs-4 form-group">
                    <img src="{{ url('media/offers/').'/'.$offer->image }}" alt="Image" class="img-fluid" height="100%">
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 form-group">
                    <h5>
                        {{ utf8_encode($offer->title) }}
                    </h5>
                    <ul>
                        <li> <b>{{ utf8_encode('D�signation') }}:</b>  {{ utf8_encode($offer->designation) }}</li>
                        <li><b>{{ utf8_encode('R�f�rence') }}: </b>{{ utf8_encode($offer->reference) }}</li>
                        <li><b>{{ utf8_encode('Caract�ristique') }}: </b>{{ utf8_encode($offer->caracteristics) }}</li>
                        <li><b>{{ utf8_encode('Marque') }}: </b>{{ utf8_encode($offer->brand) }}</li>
                        <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                    </ul>
                    <h5>
                        {{ utf8_encode(__('static.Desription')) }}
                    </h5>
                    <p>{{ utf8_encode($offer->description) }}</p>
                    <p class="pull-right"><a href="javascript:void(0)" class="btn btn-primary subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                  </div>
               </div>
            </div>
            @endforeach
            </div>
          </div>
        </div>
    </div>
    <br />
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4" id="catName">Lubrifiants</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::Where('type',3)->Get() as $offer)
            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group" style="background-color:#fff; padding:20px">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4 col-xs-4 form-group">
                    <img src="{{ url('media/offers/').'/'.$offer->image }}" alt="Image" class="img-fluid" height="100%">
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 form-group">
                    <h5>
                        {{ utf8_encode($offer->title) }}
                    </h5>
                    <ul>
                        <li> <b>{{ utf8_encode('D�signation') }}:</b>  {{ utf8_encode($offer->designation) }}</li>
                        <li><b>{{ utf8_encode('Emballage') }}: </b>{{ utf8_encode($offer->packaging) }}</li>
                        <li><b>{{ utf8_encode('Caract�ristique') }}: </b>{{ utf8_encode($offer->caracteristics) }}</li>
                        <li><b>{{ utf8_encode('Marque') }}: </b>{{ utf8_encode($offer->brand) }}</li>
                        <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                    </ul>
                    <h5>
                        {{ utf8_encode(__('static.Desription')) }}
                    </h5>
                    <p>{{ utf8_encode($offer->description) }}</p>
                    <p class="pull-right"><a href="javascript:void(0)" class="btn btn-primary subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                  </div>
               </div>
            </div>
            @endforeach
            </div>
          </div>
        </div>
    </div>
    <br />
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4" id="catName">Autres</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::Where('type',4)->Get() as $offer)
            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group" style="background-color:#fff; padding:20px">
               <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4 col-xs-4 form-group">
                    <img src="{{ url('media/offers/').'/'.$offer->image }}" alt="Image" class="img-fluid" height="100%">
                  </div>
                  <div class="col-md-8 col-sm-8 col-xs-8 col-xs-8 form-group">
                    <h5>
                        {{ utf8_encode($offer->title) }}
                    </h5>
                    <ul>
                        <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                    </ul>
                    <h5>
                        {{ utf8_encode(__('static.Desription')) }}
                    </h5>
                    <p>{{ utf8_encode($offer->description) }}</p>
                    <p class="pull-right"><a href="javascript:void(0)" class="btn btn-primary subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                  </div>
               </div>
            </div>
            @endforeach
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
@push('scripts') 
<script>
	$('.subscribe').on('click', function(){
		if($("#user_id").val() == "")
		{
			window.location.href = "{{ url('login') }}";
			return false;
		}
	});
</script>
@endpush
