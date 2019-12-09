@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('home/img/bulkbuying.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-9 text-center">
            <h1>{{ utf8_encode(__("Améliorons vos finances")) }}</h1><br>   
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
            <div class="col-md-3 col-sm-3 col-xs-3 col-xs-3 form-group" style="background-color:#fff;">
                <a data-toggle="collapse" href="#collapse1{{ $offer->id }}" role="button" aria-expanded="false" aria-controls="collapse1{{ $offer->id }}">
                    <img src="{{ url('media/offers/').'/'.$offer->image }}" alt="Image" class="img-fluid" height="100%">
                </a>
                <div class="zcollapse" id="zcollapse1{{ $offer->id }}" style="width:100%">
                  <div class="card card-body">
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
                    @if(Auth::User()!=null && Auth::User()->User_offer()->Where('offer_id',$offer->id)->Get()->Count() > 0)
                        <p class="pull-right"><a href="javascript:void(0)" class="btn btn-default" data-id="{{ $offer->id }}"><b>{{ utf8_encode(__('static.Subscribed')) }}</b></a></p>
                    @else
                        <p class="pull-right"><a href="javascript:void(0)" class="btn btn-primary subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                    @endif
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
            <h2 class="mb-4" id="catName">{{ utf8_encode('Pièces détachées') }}</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::Where('type',2)->Get() as $offer)
            <div class="col-md-3 col-sm-3 col-xs-3 col-xs-3 form-group" style="background-color:#fff;">
                <a data-toggle="collapse" href="#collapse2{{ $offer->id }}" role="button" aria-expanded="false" aria-controls="collapse21{{ $offer->id }}">
                    <img src="{{ url('media/offers/').'/'.$offer->image }}" alt="Image" class="img-fluid" height="100%">
                </a>
                <div class="zcollapse" id="zcollapse2{{ $offer->id }}" style="width:100%">
                  <div class="card card-body">
                    <h5>
                        {{ utf8_encode($offer->title) }}
                    </h5>
                    <ul>
                        <li> <b>{{ utf8_encode('Désignation') }}:</b>  {{ utf8_encode($offer->designation) }}</li>
                        <li><b>{{ utf8_encode('Référence') }}: </b>{{ utf8_encode($offer->reference) }}</li>
                        <li><b>{{ utf8_encode('Caractéristique') }}: </b>{{ utf8_encode($offer->caracteristics) }}</li>
                        <li><b>{{ utf8_encode('Marque') }}: </b>{{ utf8_encode($offer->brand) }}</li>
                        <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                    </ul>
                    <h5>
                        {{ utf8_encode(__('static.Desription')) }}
                    </h5>
                    <p>{{ utf8_encode($offer->description) }}</p>
                    @if(Auth::User()!=null && Auth::User()->User_offer()->Where('offer_id',$offer->id)->Get()->Count() > 0)
                    	<p class="pull-right"><a href="javascript:void(0)" class="btn btn-default" data-id="{{ $offer->id }}"><b>{{ utf8_encode(__('static.Subscribed')) }}</b></a></p>
                    @else
                    	<p class="pull-right"><a href="javascript:void(0)" class="btn btn-primary subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                    @endif
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
            <div class="col-md-3 col-sm-3 col-xs-3 col-xs-3 form-group" style="background-color:#fff;">
                <a data-toggle="collapse" href="#collapse3{{ $offer->id }}" role="button" aria-expanded="false" aria-controls="collapse3{{ $offer->id }}">
                    <img src="{{ url('media/offers/').'/'.$offer->image }}" alt="Image" class="img-fluid" height="100%">
                </a>
                <div class="zcollapse" id="zcollapse3{{ $offer->id }}" style="width:100%">
                  <div class="card card-body">
                    <h5>
                        {{ utf8_encode($offer->title) }}
                    </h5>
                    <ul>
                        <li> <b>{{ utf8_encode('Désignation') }}:</b>  {{ utf8_encode($offer->designation) }}</li>
                        <li><b>{{ utf8_encode('Emballage') }}: </b>{{ utf8_encode($offer->packaging) }}</li>
                        <li><b>{{ utf8_encode('Caractéristique') }}: </b>{{ utf8_encode($offer->caracteristics) }}</li>
                        <li><b>{{ utf8_encode('Marque') }}: </b>{{ utf8_encode($offer->brand) }}</li>
                        <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                    </ul>
                    <h5>
                        {{ utf8_encode(__('static.Desription')) }}
                    </h5>
                    <p>{{ utf8_encode($offer->description) }}</p>
                    @if(Auth::User()!=null && Auth::User()->User_offer()->Where('offer_id',$offer->id)->Get()->Count() > 0)
                    	<p class="pull-right"><a href="javascript:void(0)" class="btn btn-default" data-id="{{ $offer->id }}"><b>{{ utf8_encode(__('static.Subscribed')) }}</b></a></p>
                    @else
                    	<p class="pull-right"><a href="javascript:void(0)" class="btn btn-primary subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                    @endif
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
            <div class="col-md-3 col-sm-3 col-xs-3 col-xs-3 form-group" style="background-color:#fff;">
                <a data-toggle="collapse" href="#collapse4{{ $offer->id }}" role="button" aria-expanded="false" aria-controls="collapse4{{ $offer->id }}">
                    <img src="{{ url('media/offers/').'/'.$offer->image }}" alt="Image" class="img-fluid" height="100%">
                </a>
                <div class="zcollapse" id="zcollapse4{{ $offer->id }}" style="width:100%">
                  <div class="card card-body">
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
                    @if(Auth::User()!=null && Auth::User()->User_offer()->Where('offer_id',$offer->id)->Get()->Count() > 0)
                    	<p class="pull-right"><a href="javascript:void(0)" class="btn btn-default" data-id="{{ $offer->id }}"><b>{{ utf8_encode(__('static.Subscribed')) }}</b></a></p>
                    @else
                    	<p class="pull-right"><a href="javascript:void(0)" class="btn btn-primary subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                    @endif
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
		var url = "{{url('/subscribe')}}";
		// alert(url);
		$(this).removeClass("subscribe");
		$(this).removeClass("btn-primary");
		$(this).addClass("btn-default");
		$.ajax({
			url: url,
			type:"POST",
			dataType:"json",
			data: {method: '_POST', "user_id": $("#user_id").val(), "offer_id": $(this).data("id"), "_token": "{{ csrf_token() }}" ,    submit: true},
			beforeSend: function(){
			  $('#loader').css("visibility", "visible");
			},
			success:function(data) {
				$("#subscribe"+data.id).after('<span class="error" style="color:#6699ff">'+data.message+'</span>');
			},
			error: function (jqXHR, textStatus, errorThrown)
			{ 
				console.log(jqXHR) 
			}
		}); 
	});
</script>
@endpush
