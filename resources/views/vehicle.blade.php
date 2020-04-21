@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
   <div class="ftco-cover-1 overlay" style="background-image: url('home/img/trucksbk.png')">
      <div class="container">
         <div class="row align-items-center justify-content-center">
            <div class="col-lg-9 text-center">
               <h1>{{ utf8_encode(__("Partout avec Vous")) }}</h1><br>   
               <br>      
               <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                  <div class="MultiCarousel-inner">
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="1" data-val="Camions citerne" data-img="camions-citerne.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck/camions-citerne.png') }}" style="width:100px"></span>
                              <p>Camions citerne</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="2" data-val="Camion de marchandises divers" data-img="Camion-de-marchandises-divers.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck/Camion-de-marchandises-divers.png') }}" style="width:100px"></span>
                              <p>Camion de marchandises divers</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="3" data-val="Camion plateau"  data-img="flat-truck.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img//truck/flat-truck.png') }}" style="width:100px"></span>
                              <p>Camion plateau</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="4" data-val="Camion frigorifique" data-img="refrigerated-truck.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck/refrigerated-truck.png') }}" style="width:100px"></span>
                              <p>Camion frigorifique</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="5" data-val="Camion Benne" data-img="dump-truck.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck/dump-truck.png') }}" style="width:100px"></span>
                              <p>Camion Benne</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="6" data-val="{{ utf8_encode(__('static.Move Truck')) }}" data-img="cargo-truck.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck/cargo-truck.png') }}" style="width:100px"></span>
                              <p>{{ utf8_encode(__('static.Move Truck')) }}</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="7" data-val="Bus et Mini Bus" data-img="mini-bus.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck/mini-bus.png') }}" style="width:100px"></span>
                              <p>Bus et Mini Bus</p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="8" data-val="Autres" data-img="others2.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck/others2.png') }}" style="width:100px"></span>
                              <p>Autres</p>
                           </a>
                        </div>
                     </div>
                  </div>
                  <button class="leftLst">
                  <i class="fa fa-chevron-left fa-lg text-muted"></i>
                  <span class="sr-only">Previous</span>
                  </button>
                  <button class="rightLst">
                  <i class="fa fa-chevron-right fa-lg text-muted"></i>
                  <span class="sr-only">Next</span>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="bg-light" style="padding:50px">
   <div class="row justify-content-center text-center mb-5">
      <div class="col-md-6">
         <h2 class="mb-4" id="catName">Category</h2>
      </div>
   </div>
   <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <span class="alert">{!! session('flash_message') !!}</span>
        </div>
    </div>
   <div class="container" id="contentDetail">
      <div class="row" id="default-form">
         <div class="col-lg-6" >
         {!! Form::open([ 'url' => '/vehicle', 'files' => true, 'id' => 'main-form' ]) !!}
               <input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
               <input type="hidden" name="vehicle_id" id="vehicle_id" />
               <div id="othersExtraDiv">
                      
               </div>
               <div class="form-group row">
                  <!--<div class="col-md-6">
                  	  <label><?php echo utf8_encode("Capacité"); ?></label>
                      <div id="capacityDiv">
                      
                      </div>
                  </div>-->
                  <div class="col-md-12">
                     <div id="citerne">
                      </div>
                     <div id="marchandises">
                      </div>
                     <div id="plateau">
                      </div>
                      <div id="frigorifique">
                      </div>
                     <div id="bennes">
                      </div>
                      <div id="demenagement">
                      </div>
                      <div id="mini_bus">
                      </div>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-6">
                      <label>{{ utf8_encode(__('static.Origine')) }}</label>
                      <select name="country" class="form-control select2">
                     	<option><?php echo utf8_encode("Burkina FASO"); ?></option>
                      </select>
                  </div>
                  <div class="col-md-6">
                     <label>{{ utf8_encode(__('static.City')) }}</label>
                     <select name="from_city" class="form-control select2">
                     <option>{{ utf8_encode(__('static.Select')) }} {{ utf8_encode(__('static.City')) }}</option>
                     @foreach($City as $city)
                     	<option value = '{{$city->id}}'>{{$city->name}}</option>
                     @endforeach
                     </select>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-6">
                      <label>{{ utf8_encode(__('static.Destination')) }}</label>
                      <select name="country" class="form-control checkFare select2">
                     	<option><?php echo utf8_encode("Burkina FASO"); ?></option>
                      </select>
                  </div>
                  <div class="col-md-6">
                     <label>{{ utf8_encode(__('static.City')) }}</label>
                     <select name="to_city" class="form-control checkFare select2">
                     <option>{{ utf8_encode(__('static.Select')) }} {{ utf8_encode(__('static.City')) }}</option>
                     @foreach($City as $city)
                     	<option value = '{{$city->id}}'>{{$city->name}}</option>
                       @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="preferences" class="form-control" placeholder="{{ utf8_encode(__('static.Preferences')) }}"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-4">
                     <input class="checkFare" name="insurances" id="insurances" type="checkbox" id="insurances"/> Assurances
                  </div>
                  <div class="col-md-4">
                     <input class="checkFare" name="loading" id="loading" type="checkbox" /> Chargement
                  </div>
                  <div class="col-md-4">
                     <input class="checkFare" name="offloading" id="offloading" type="checkbox" /> {{ utf8_encode(__('static.OffLoading')) }}
                  </div>
               </div>
               <div class="form-group row">
               		<div class="col-md-6">
                    	<input style="display:none" name="value_product" class="form-control" id="insurances_value" placeholder="<?php echo utf8_encode("Valeur de la marchandise"); ?>">
                    </div>
               </div>
               <div class="form-group row">
                  
                  <div class="col-md-6 mr-auto">
                  <input type="button" id="validate" class="btn btn-block btn-primary text-white py-3 px-5" value="{{ utf8_encode(__('static.Validate')) }}">
                  </div>
                  
                  <div class="col-md-6 mr-auto">
                  <input disabled="disabled" type="submit" id="reserver" class="btn btn-block btn-primary text-white py-3 px-5" value="{{ utf8_encode(__('static.Reserve')) }}" data-toggle="modal" data-target="#reserverModal">
                  </div>
                  
               </div>
               <div class="form-group row">
                <div class="col-md-12 mr-auto">
                    <p><span id="result"></span></p>
                    <input type="hidden" id="amount" name="amount" value="0"/>
                </div>
               </div>
            </form>
         </div>
         <div class="col-lg-6" >
            <img id="catImage" src="{{ url('/home/img/truck/camions-citterne.png') }}" width="100%" />
         </div>
      </div>
   </div>
</div>

@endsection
@push('scripts') 
<script>
$('#myModal').modal('show').css("padding-right: 0px !important;");
	$( ".hedrSel" ).click(function() {
		getData($(this).data("id"), $(this).data("val"), $(this).data("img"))
		$("html, body").animate({ scrollTop: $('#contentDetail').offset().top-200 }, 600);
		
	});
   var citerneCapacity ='<label><?php echo utf8_encode(__('static.Capacity')); ?></label>'+ 
                  '<select id="capacity" name="capacity" class="form-control" required>' +
                  '<option value="">En litres</option>' +
                  '<option value="5000">5000 Litres</option>' +
                  '<option value="10000">10000 Litres</option>' +
                  '<option value="15000">15000 Litres</option>' +
                  '<option value="20000">20000 Litres</option>' +
                  '<option value="25000">25000 Litres</option>' +
                  '<option value="30000">30000 Litres</option>' +
                  '<option value="35000">35000 Litres</option>' +
                  '<option value="40000">40000 Litres</option>' +
                  '<option value="45000">45000 Litres</option>' +
                  '<option value="50000">50000 Litres</option>' +
                  '<option value="55000">55000 Litres</option>' +
                  '<option value="60000">60000 Litres</option>' +
                     '</select>'  
   var marchandisesCapacity = '<label><?php echo utf8_encode(__('static.Capacity')); ?></label>'+ 
                  '<select id="capacity" name="capacity" class="form-control" required>' +
                  '<option value="">En Tonnes</option>' +
                  '<option value="2">2 T</option>' +
                  '<option value="4">4 T</option>' +
                  '<option value="5">5 T</option>' +
                  '<option value="10">10 T</option>' +
                  '<option value="15">15 T</option>' +
                  '<option value="20">20 T</option>' +
                  '<option value="25">25 T</option>' +
                  '<option value="30">30 T</option>' +
                  '<option value="35">35 T</option>' +
                  '<option value="40">40 T</option>' +
                  '<option value="45">45 T</option>' +
                  '<option value="50">50 T</option>' +
                  '<option value="55">55 T</option>' +
                  '<option value="60">60 T</option>' +
                     '</select>'  
   var plateauCapacity ='<label><?php echo utf8_encode(__('static.Capacity')); ?></label>'+ 
                  '<select id="capacity" name="capacity" class="form-control" required>' +
                  '<option value="">En Tonnes</option>' +
                  '<option value="2">2 T</option>' +
                  '<option value="4">4 T</option>' +
                  '<option value="5">5 T</option>' +
                  '<option value="10">10 T</option>' +
                  '<option value="15">15 T</option>' +
                  '<option value="20">20 T</option>' +
                  '<option value="25">25 T</option>' +
                  '<option value="30">30 T</option>' +
                  '<option value="35">35 T</option>' +
                  '<option value="40">40 T</option>' +
                  '<option value="45">45 T</option>' +
                  '<option value="50">50 T</option>' +
                  '<option value="55">55 T</option>' +
                  '<option value="60">60 T</option>' +
                     '</select>' 
   var frigorifiqueCapacity = '<label><?php echo utf8_encode(__('static.Capacity')); ?></label>'+ 
                  '<select id="capacity" name="capacity" class="form-control" required>' +
                  '<option value="">En Tonnes</option>' +
                  '<option value="2">2 T</option>' +
                  '<option value="4">4 T</option>' +
                  '<option value="5">5 T</option>' +
                  '<option value="10">10 T</option>' +
                  '<option value="15">15 T</option>' +
                  '<option value="20">20 T</option>' +
                  '<option value="25">25 T</option>' +
                  '<option value="30">30 T</option>' +
                  '<option value="35">35 T</option>' +
                  '<option value="40">40 T</option>' +
                  '<option value="45">45 T</option>' +
                  '<option value="50">50 T</option>' +
                  '<option value="55">55 T</option>' +
                  '<option value="60">60 T</option>' +
                     '</select>' 
   var bennesCapacity = '<label><?php echo utf8_encode(__('static.Capacity')); ?></label>'+ 
                  '<select id="capacity" name="capacity" class="form-control" required>' +
                  '<option value="">En Tonnes ou M3</option>' +
                  '<option value="2">2 T</option>' +
                  '<option value="4">4 T</option>' +
                  '<option value="5">5 T</option>' +
                  '<option value="10">10 T</option>' +
                  '<option value="15">15 T</option>' +
                  '<option value="20">20 T</option>' +
                  '<option value="25">25 T</option>' +
                  '<option value="30">30 T</option>' +
                  '<option value="35">35 T</option>' +
                  '<option value="40">40 T</option>' +
                  '<option value="45">45 T</option>' +
                  '<option value="50">50 T</option>' +
                  '<option value="55">55 T</option>' +
                  '<option value="60">60 T</option>' +
                  '<option value="8">8 M3</option>' +
                  '<option value="10">10 M3</option>' +
                  '<option value="15">15 M3</option>' +
                  '<option value="20">20 M3</option>' +
                  '<option value="25">25 M3</option>' +
                  '<option value="30">30 M3</option>' +
                  '<option value="35">35 M3</option>' +
                  '<option value="40">40 M3</option>' +
                  '<option value="45">45 M3</option>' +
                  '<option value="50">50 M3</option>' +
                  '<option value="55">55 M3</option>' +
                  '<option value="60">60 M3</option>' +
                     '</select>'
   var demenagementCapacity ='<label><?php echo utf8_encode(__('static.Capacity')); ?></label>'+ 
                        '<input name="capacite" class="form-control" placeholder="<?php echo utf8_encode("Capacite"); ?>">';
   var otherExtra = '<div class="form-group row">' +
                  '<div class="col-md-12">' +
                     '<input name="type_of_truck" class="form-control" placeholder="<?php echo utf8_encode("Type de vehicule"); ?>">' +
                  '</div>' +
               '</div>' +
               
               '<div class="form-group row">' +
                  '<div class="col-md-12">' +
                     '<textarea name="specifications " class="form-control" placeholder="Specifications"></textarea>' +
                  '</div>' +
              ' </div>';
	var capcityDivDefault = '<select name="capacity" class="form-control" required>' +
                        '<option><?php echo utf8_encode("Citerne"); ?></option>' +
                        '<option><?php echo utf8_encode("Marchandises divers"); ?></option>' +
                        '<option><?php echo utf8_encode("Plateau"); ?></option>' +
                        '<option><?php echo utf8_encode("Bennes"); ?></option>' +
                        '<option><?php echo utf8_encode("Demenagement "); ?></option>' +
                        '<option><?php echo utf8_encode("Autres"); ?></option>' +
                      '</select>';
	var totalSeat = '{{ utf8_encode(__("static.Total Seats")) }}';
	var capcityDivBus = '<div class="row">' +
                        '<div class="col-md-6">' +
                        '<label>'+totalSeat+'</label>'+ 
                        //'<input name="number_of_seats" class="form-control" placeholder="'+totalSeat+'">' +
						'<input name="capacity" class="form-control" placeholder="'+totalSeat+'" required>' +
                      '</div>'+
                      '<div class="col-md-6">' +
                      '<label>{{ utf8_encode(__("static.Duration")) }}</label>'+ 
                     '<input name="duration" class="form-control" placeholder="{{ utf8_encode(__("static.Duration")) }}" required>' +
                     '</div>'+
                        '</div>';				
	getData("1", "Camions citerne", "camions-citerne.png");
	function getData(id, type, image)
	{	
      //alert(id);
	  	$("#vehicle_id").val(id);
		$("#othersExtraDiv").html("");
		$("#citerne").html("");
		$("#marchandises").html("");
		$("#plateau").html("");
		$("#frigorifique").html("");
		$("#bennes").html("");
		$("#demenagement").html("");
		$("#mini_bus").html("");
		$("#capacityDiv").html("");
		$("#catName").html(type);
		$("#catImage").attr("src","{{ url('/home/img/truck/') }}" + '/' + image);
		switch(id)
		{
			case 8:
				$("#othersExtraDiv").html(otherExtra);
				$("#capacityDiv").html(capcityDivDefault);
			break;
			case 1:
				$("#citerne").html(citerneCapacity);
			break;
			case 2:
				$("#marchandises").html(marchandisesCapacity);
			break;
			case 3:
				$("#plateau").html(plateauCapacity);
			break;
			case 4:
				$("#frigorifique").html(frigorifiqueCapacity);
			break;
			case 5:
				$("#bennes").html(bennesCapacity);
			break;
			case 6:
				$("#demenagement").html(demenagementCapacity);
			break;
			case 7:
				$("#mini_bus").html(capcityDivBus);
			break;
			default:
				$("#citerne").html(citerneCapacity);
				
			break;
			}
	}
	
	$( ".insurances" ).click(function() {
		getData($(this).data("id"), $(this).data("val"), $(this).data("img"))
		$("html, body").animate({ scrollTop: $('#contentDetail').offset().top-200 }, 600);
		
	});
	
	$('#insurances').change(function(){
        
		if(this.checked)
        {   
			$('#insurances_value').fadeIn();
			$('#insurances_value').focus();
		}
        else
		{
            $('#insurances_value').fadeOut();
		}

    });

	$('#validate').on('click', function(){
	  /*if($("#user_id").val() == "")
	  {
		window.location.href = "{{ url('login') }}";
		return false;
	  }*/
	  $("#reserver").prop('disabled', false);
	  var vehicleID = $("#vehicle_id").val();
      var toCityId = $('select[name="to_city"]').val();
      var fromCityId = $('select[name="from_city"]').val();
	  var capacity = $("#capacity").val();
		//alert(vehicleID +" "+ toCityId +" "+ fromCityId )
         var url = "{{url('vehicle/getFare')}}"+'/';
         // alert(url);
         $.ajax({
               url: url,
               type:"GET",
               dataType:"json",
               data: {method: '_GET',"vehicle_id":vehicleID, "capacity": capacity, "to_city":toCityId,"from_city":fromCityId, "_token": "{{ csrf_token() }}" ,    submit: true},
               beforeSend: function(){
                  $('#loader').css("visibility", "visible");
               },
               success:function(data) {
					console.log(data);
					//$('#result').empty();
					//
					if(data != null)
					{
						var amount = parseInt(data.fare);
						if($('#insurances').is(':checked'))
						{
							if($('#insurances_value').val() != "")
							{
								amount = amount + (parseInt($('#insurances_value').val())/100)*1.2;
							}
						}
						if($('#loading').is(':checked'))
						{
						  amount = amount + parseInt(data.loading_price);
						}
						if($('#offloading').is(':checked'))
						{
						  amount = amount + parseInt(data.offloading_price);
						}
						
						$('#result').html('{{ utf8_encode(__('static.Fare')) }}: '+ amount);
						$('#amount').val(amount);
					}
					else
					{
						$('#result').html('{{ utf8_encode(__("static.No Price Message")) }}');
					}
               },
               error: function (jqXHR, textStatus, errorThrown)
               { alert(errorThrown) }
         ,  
               complete: function(){
               // alert('url');
                  $('#loader').css("visibility", "hidden");
               }
         }); 
   }); 
   /*$('.checkFare').on('change', function(){
      if($("#user_id").val() == "")
		{
			window.location.href = "{{ url('login') }}";
			return false;
		}
	  var vehicleID = $("#vehicle_id").val();
      var toCityId = $('select[name="to_city"]').val();
      var fromCityId = $('select[name="from_city"]').val();

         var url = "{{url('vehicle/getFare')}}"+'/';
         // alert(url);
         $.ajax({
               url: url,
               type:"GET",
               dataType:"json",
               data: {method: '_GET',"vehicle_id":vehicleID, "to_city":toCityId,"from_city":fromCityId, "_token": "{{ csrf_token() }}" ,    submit: true},
               beforeSend: function(){
                  $('#loader').css("visibility", "visible");
               },
               success:function(data) {
					console.log(data);
					//$('#result').empty();
					var amount = parseInt(data.fare);
					if($('#insurances').is(':checked'))
					{
					  amount = amount + parseInt(data.insurances_amount);
					}
					if($('#loading').is(':checked'))
					{
					  amount = amount + parseInt(data.loading_price);
					}
					if($('#offloading').is(':checked'))
					{
					  amount = amount + parseInt(data.offloading_price);
					}
					
					$('#result').html(amount);
					$('#amount').val(amount);
               },
               error: function (jqXHR, textStatus, errorThrown)
               { alert(errorThrown) }
         ,  
               complete: function(){
               // alert('url');
                  $('#loader').css("visibility", "hidden");
               }
         }); 
   }); */  
</script>
@endpush