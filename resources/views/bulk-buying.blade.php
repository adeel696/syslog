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
            <h2 class="mb-0 site-color" id="catName">{{ utf8_encode('Assurance') }}</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::Where('country_id',$country_id)->Where('type',1)->Get() as $offer)
              <div class="col-md-4" >
                <div class="item-box-blog">
                  <div class="item-box-blog-image">
                    <!--Image-->
                    <figure> <img alt="" src="{{ url('media/offers/').'/'.$offer->image }}"> </figure>
                  </div>
                  <div class="item-box-blog-body">
                    <!--Heading-->
                    <div class="item-box-blog-heading">
                        <h2 style="color:#01ABC4 !important">{{ utf8_encode($offer->title) }}</h2>
                    </div>
                    <!--Data-->
                    <div class="item-box-blog-data" style="padding: px 15px;">
                      	<ul>
                            <li> <b>{{ utf8_encode('Type assurance') }}:</b>  {{ utf8_encode($offer->insurance_type) }}</li>
                            <li><b>{{ utf8_encode('Age de vehicule') }}: </b>{{ utf8_encode($offer->range_of_age_of_vehicule) }}</li>
                            <li><b>{{ utf8_encode('Value of vehicule') }}: </b>{{ utf8_encode($offer->value_of_vehicle) }}</li>
                            <li><b>{{ utf8_encode('Puissance moteur') }}: </b>{{ utf8_encode($offer->power) }}</li>
                            <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                        </ul>
                    </div>
                    <!--Text-->
                    <div class="item-box-blog-text">
                      <h5 style="color:#01ABC4 !important">{{ utf8_encode(__('static.Description')) }}</h5>
                      <p>{{ utf8_encode(__('static.Description')) }}</p>
                    </div>
                     <div class="mt"> 
                     @if(Auth::User()!=null && Auth::User()->User_offer()->Where('offer_id',$offer->id)->Get()->Count() > 0)
                        <p class="pull-right"><a class="btn defautl-btn" data-id="{{ $offer->id }}"><b>{{ utf8_encode(__('static.Subscribed')) }}</b></a></p>
                    @else
                        <p class="pull-right"><a id="subscribe{{ $offer->id }}" href="javascript:void(0)" class="btn bg-blue-ui white read btn-primary read subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                    @endif
                     </div>
                    <!--Read More Button-->
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
            <h2 class="mb-0 site-color" id="catName">{{ utf8_encode('Pièces détachées') }}</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::Where('country_id',$country_id)->Where('type',2)->Get() as $offer)
            <div class="col-md-4" >
                <div class="item-box-blog">
                  <div class="item-box-blog-image">
                    <!--Image-->
                    <figure> <img alt="" src="{{ url('media/offers/').'/'.$offer->image }}"> </figure>
                  </div>
                  <div class="item-box-blog-body">
                    <!--Heading-->
                    <div class="item-box-blog-heading">
                        <h2 style="color:#01ABC4 !important">{{ utf8_encode($offer->title) }}</h2>
                    </div>
                    <!--Data-->
                    <div class="item-box-blog-data" style="padding: px 15px;">
                      	<ul>
                            <li> <b>{{ utf8_encode('Désignation') }}:</b>  {{ utf8_encode($offer->designation) }}</li>
                            <li><b>{{ utf8_encode('Référence') }}: </b>{{ utf8_encode($offer->reference) }}</li>
                            <li><b>{{ utf8_encode('Caractéristique') }}: </b>{{ utf8_encode($offer->caracteristics) }}</li>
                            <li><b>{{ utf8_encode('Marque') }}: </b>{{ utf8_encode($offer->brand) }}</li>
                            <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                        </ul>
                    </div>
                    <!--Text-->
                    <div class="item-box-blog-text">
                      <h5 style="color:#01ABC4 !important">{{ utf8_encode(__('static.Description')) }}</h5>
                      <p>{{ utf8_encode(__('static.Description')) }}</p>
                    </div>
                     <div class="mt"> 
                     @if(Auth::User()!=null && Auth::User()->User_offer()->Where('offer_id',$offer->id)->Get()->Count() > 0)
                        <p class="pull-right"><a class="btn defautl-btn" data-id="{{ $offer->id }}"><b>{{ utf8_encode(__('static.Subscribed')) }}</b></a></p>
                    @else
                        <p class="pull-right"><a id="subscribe{{ $offer->id }}" href="javascript:void(0)" class="btn bg-blue-ui white read btn-primary read subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                    @endif
                     </div>
                    <!--Read More Button-->
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
            <h2 class="mb-0 site-color" id="catName">Lubrifiants</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::Where('country_id',$country_id)->Where('type',3)->Get() as $offer)
            <div class="col-md-4" >
                <div class="item-box-blog">
                  <div class="item-box-blog-image">
                    <!--Image-->
                    <figure> <img alt="" src="{{ url('media/offers/').'/'.$offer->image }}"> </figure>
                  </div>
                  <div class="item-box-blog-body">
                    <!--Heading-->
                    <div class="item-box-blog-heading">
                        <h2 style="color:#01ABC4 !important">{{ utf8_encode($offer->title) }}</h2>
                    </div>
                    <!--Data-->
                    <div class="item-box-blog-data" style="padding: px 15px;">
                      	<ul>
                            <li> <b>{{ utf8_encode('Désignation') }}:</b>  {{ utf8_encode($offer->designation) }}</li>
                            <li><b>{{ utf8_encode('Emballage') }}: </b>{{ utf8_encode($offer->packaging) }}</li>
                            <li><b>{{ utf8_encode('Caractéristique') }}: </b>{{ utf8_encode($offer->caracteristics) }}</li>
                            <li><b>{{ utf8_encode('Marque') }}: </b>{{ utf8_encode($offer->brand) }}</li>
                            <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                        </ul>
                    </div>
                    <!--Text-->
                    <div class="item-box-blog-text">
                      <h5 style="color:#01ABC4 !important">{{ utf8_encode(__('static.Description')) }}</h5>
                      <p>{{ utf8_encode(__('static.Description')) }}</p>
                    </div>
                     <div class="mt"> 
                     @if(Auth::User()!=null && Auth::User()->User_offer()->Where('offer_id',$offer->id)->Get()->Count() > 0)
                        <p class="pull-right"><a class="btn defautl-btn" data-id="{{ $offer->id }}"><b>{{ utf8_encode(__('static.Subscribed')) }}</b></a></p>
                    @else
                        <p class="pull-right"><a id="subscribe{{ $offer->id }}" href="javascript:void(0)" class="btn bg-blue-ui white read btn-primary read subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                    @endif
                     </div>
                    <!--Read More Button-->
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
            <h2 class="mb-0 site-color" id="catName">Autres</h2>
        </div>
    </div>
    <div class="container" id="contentDetail">
    	<input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
        <div class="mt-5">
          <div class="container">
            <div class="row">
            @foreach(App\Models\Offer::Where('country_id',$country_id)->Where('type',4)->Get() as $offer)
            <div class="col-md-4" >
                <div class="item-box-blog">
                  <div class="item-box-blog-image">
                    <!--Image-->
                    <figure> <img alt="" src="{{ url('media/offers/').'/'.$offer->image }}"> </figure>
                  </div>
                  <div class="item-box-blog-body">
                    <!--Heading-->
                    <div class="item-box-blog-heading">
                        <h2 style="color:#01ABC4 !important">{{ utf8_encode($offer->title) }}</h2>
                    </div>
                    <!--Data-->
                    <div class="item-box-blog-data" style="padding: px 15px;">
                      	<ul>
                            <li><b>{{ utf8_encode(__('static.Amount')) }}: </b>{{ utf8_encode($offer->amount) }}</li>
                        </ul>
                    </div>
                    <!--Text-->
                    <div class="item-box-blog-text">
                      <h5 style="color:#01ABC4 !important">{{ utf8_encode(__('static.Description')) }}</h5>
                      <p>{{ utf8_encode(__('static.Description')) }}</p>
                    </div>
                     <div class="mt"> 
                     @if(Auth::User()!=null && Auth::User()->User_offer()->Where('offer_id',$offer->id)->Get()->Count() > 0)
                        <p class="pull-right"><a class="btn defautl-btn" data-id="{{ $offer->id }}"><b>{{ utf8_encode(__('static.Subscribed')) }}</b></a></p>
                    @else
                        <p class="pull-right"><a id="subscribe{{ $offer->id }}" href="javascript:void(0)" class="btn bg-blue-ui white read btn-primary read subscribe" data-id="{{ $offer->id }}">{{ utf8_encode(__('static.Subscribe')) }}</a></p>
                    @endif
                     </div>
                    <!--Read More Button-->
                  </div>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
    </div>
</div>
<div id="subModel" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	       <div class="form-group row">
            <div class="col-md-12">
              <input type="number" id="quantity" class="form-control" placeholder="{{ utf8_encode('Quantity') }}">
              <input type="hidden" id="offerID" />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12">
              <input type="text"  id="others" class="form-control" placeholder="{{ utf8_encode('Others') }}">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button id="subModelBtn" type="button" class="btn btn-primary" data-dismiss="modal">{{ utf8_encode(__('static.Subscribe')) }}</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">X</button>
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
		
		$("#quantity").val("");
		$("#others").val("");
		$("#offerID").val($(this).data("id"));
		$('#subModel').modal();
	});
	
	$('#subModelBtn').on('click', function(){
		if($("#quantity").val() == "")
		{
			$("#quantity").focus();
			return false;
		}
		var url = "{{url('/subscribe')}}";
		$("#subscribe"+$("#offerID").val()).removeAttr('class');
		$("#subscribe"+$("#offerID").val()).attr('class', 'btn defautl-btn');
		$("#subscribe"+$("#offerID").val()).unbind( "click" );
		$.ajax({
			url: url,
			type:"POST",
			dataType:"json",
			data: {method: '_POST', "user_id": $("#user_id").val(), "quantity":$("#quantity").val(), "others":$("#others").val(), "offer_id": $("#offerID").val(), "_token": "{{ csrf_token() }}" ,    submit: true},
			beforeSend: function(){
			  $('#loader').css("visibility", "visible");
			},
			success:function(data) {
				//$("#subscribe"+data.id).after('<span class="error" style="color:#6699ff">'+data.message+'</span>');
				swal({
					title: data.message,
					icon: 'success'
				  });
			},
			error: function (jqXHR, textStatus, errorThrown)
			{ 
				console.log(jqXHR) 
			}
		}); 
	});
</script>
@endpush
