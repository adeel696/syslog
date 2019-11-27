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
            <h2 class="mb-4" id="catName">{{ utf8_encode(__('static.Offer')) }}</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::All() as $offer)
            <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                    <img src="{{ url('home/images/hero_1.jpg') }}" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                    <h2>
                        {{ utf8_encode($offer->title) }}
                    </h2>
                    <p>{{ utf8_encode($offer->description) }}</p>
                    <p><a href="javascript:void(0)" class="btn btn-primary subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
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
