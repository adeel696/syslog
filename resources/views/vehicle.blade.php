@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
   <div class="ftco-cover-1 overlay" style="background-image: url('home/img/trucksbk.png')">
      <div class="container">
         <div class="row align-items-center justify-content-center">
            <div class="col-lg-9 text-center">
               <h1>We can make it together</h1>
               <br>      
               <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                  <div class="MultiCarousel-inner">
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="1" data-val="Camions citterne" data-img="camions-citterne.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck/camions-citterne.png') }}" style="width:100px"></span>
                              <p>Camions citterne</p>
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
                           <a href="javascript:void(0)" class="hedrSel" data-id="6" data-val="Demenagement" data-img="cargo-truck.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/truck/cargo-truck.png') }}" style="width:100px"></span>
                              <p>Demenagement</p>
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
                      <label>Origine</label>
                      <select name="country" class="form-control">
                     	<option><?php echo utf8_encode("Burkina FASO"); ?></option>
                      </select>
                  </div>
                  <div class="col-md-6">
                     <label>Ville</label>
                     <select name="to_city" class="form-control">
                     <option>Select City</option>
                     @foreach($City as $city)
                     	<option value = '{{$city->id}}'>{{$city->name}}</option>
                     @endforeach
                     </select>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-6">
                      <label>Destination</label>
                      <select name="country" class="form-control">
                     	<option><?php echo utf8_encode("Burkina FASO"); ?></option>
                      </select>
                  </div>
                  <div class="col-md-6">
                     <label>Ville</label>
                     <select name="from_city" class="form-control">
                     <option>Select City</option>
                     @foreach($City as $city)
                     	<option value = '{{$city->id}}'>{{$city->name}}</option>
                       @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="preferences" class="form-control" placeholder="Preferences"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-4">
                     <input name="insurances" type="checkbox" id="insurances"/> Assurances
                  </div>
                  <div class="col-md-4">
                     <input name="loading" type="checkbox" /> Chargement
                  </div>
                  <div class="col-md-4">
                     <input name="offloading" type="checkbox" /> Dechargement
                  </div>
               </div>
               <div class="form-group row">
               		<div class="col-md-6">
                    	<input style="display:none" name="value_product" class="form-control" id="insurances_value" placeholder="<?php echo utf8_encode("Valeur de la marchandise"); ?>">
                    </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                  <input type="button" id="reserver" class="btn btn-block btn-primary text-white py-3 px-5" value="Reserver" data-toggle="modal" data-target="#exampleModalCenter">
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                        <h3>Price:<p id="result" name="amount"></p></h3>
                        </div>
                        <div class="modal-footer">
                           <input type="submit" class="btn btn-primary text-white py-3 px-3" value="Reserver">
                           <input type="button" class="btn btn-secondary text-white py-3 px-3" data-dismiss="modal" value="Close">
                        </div>
                        </div>
                     </div>
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
   var citerneCapacity ='<label>Capacite</label>'+ 
                  '<select name="capacity" class="form-control">' +
                  '<option>en Liters</option>' +
                  '<option>5000 Litres</option>' +
                  '<option>10000 Litres</option>' +
                  '<option>15000 Litres</option>' +
                  '<option>20000 Litres</option>' +
                  '<option>25000 Litres</option>' +
                  '<option>30000 Litres</option>' +
                  '<option>35000 Litres</option>' +
                  '<option>40000 Litres</option>' +
                  '<option>45000 Litres</option>' +
                  '<option>50000 Litres</option>' +
                  '<option>55000 Litres</option>' +
                  '<option>60000 Litres</option>' +
                     '</select>'  
   var marchandisesCapacity = '<label>Capacite</label>'+ 
                  '<select name="capacity" class="form-control">' +
                  '<option>en Tonnes</option>' +
                  '<option>2 T</option>' +
                  '<option>4 T</option>' +
                  '<option>5 T</option>' +
                  '<option>10 T</option>' +
                  '<option>15 T</option>' +
                  '<option>20 T</option>' +
                  '<option>25 T</option>' +
                  '<option>30 T</option>' +
                  '<option>35 T</option>' +
                  '<option>40 T</option>' +
                  '<option>45 T</option>' +
                  '<option>50 T</option>' +
                  '<option>55 T</option>' +
                  '<option>60 T</option>' +
                     '</select>'  
   var plateauCapacity ='<label>Capacite</label>'+ 
                  '<select name="capacity" class="form-control">' +
                  '<option>en Tonnes</option>' +
                  '<option>2 T</option>' +
                  '<option>4 T</option>' +
                  '<option>5 T</option>' +
                  '<option>10 T</option>' +
                  '<option>15 T</option>' +
                  '<option>20 T</option>' +
                  '<option>25 T</option>' +
                  '<option>30 T</option>' +
                  '<option>35 T</option>' +
                  '<option>40 T</option>' +
                  '<option>45 T</option>' +
                  '<option>50 T</option>' +
                  '<option>55 T</option>' +
                  '<option>60 T</option>' +
                     '</select>' 
   var frigorifiqueCapacity = '<label>Capacite</label>'+ 
                  '<select name="capacity" class="form-control">' +
                  '<option>en Tonnes</option>' +
                  '<option>2 T</option>' +
                  '<option>4 T</option>' +
                  '<option>5 T</option>' +
                  '<option>10 T</option>' +
                  '<option>15 T</option>' +
                  '<option>20 T</option>' +
                  '<option>25 T</option>' +
                  '<option>30 T</option>' +
                  '<option>35 T</option>' +
                  '<option>40 T</option>' +
                  '<option>45 T</option>' +
                  '<option>50 T</option>' +
                  '<option>55 T</option>' +
                  '<option>60 T</option>' +
                     '</select>' 
   var bennesCapacity = '<label>Capacite</label>'+ 
                  '<select name="capacity" class="form-control">' +
                  '<option>en Tonnes ou M3</option>' +
                  '<option>2 T</option>' +
                  '<option>4 T</option>' +
                  '<option>5 T</option>' +
                  '<option>10 T</option>' +
                  '<option>15 T</option>' +
                  '<option>20 T</option>' +
                  '<option>25 T</option>' +
                  '<option>30 T</option>' +
                  '<option>35 T</option>' +
                  '<option>40 T</option>' +
                  '<option>45 T</option>' +
                  '<option>50 T</option>' +
                  '<option>55 T</option>' +
                  '<option>60 T</option>' +
                  '<option>8 M3</option>' +
                  '<option>10 M3</option>' +
                  '<option>15 M3</option>' +
                  '<option>20 M3</option>' +
                  '<option>25 M3</option>' +
                  '<option>30 M3</option>' +
                  '<option>35 M3</option>' +
                  '<option>40 M3</option>' +
                  '<option>45 M3</option>' +
                  '<option>50 M3</option>' +
                  '<option>55 M3</option>' +
                  '<option>60 M3</option>' +
                     '</select>'
   var demenagementCapacity ='<label>Capacite</label>'+ 
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
	var capcityDivDefault = '<select name="capacity" class="form-control">' +
                        '<option><?php echo utf8_encode("Citerne"); ?></option>' +
                        '<option><?php echo utf8_encode("Marchandises divers"); ?></option>' +
                        '<option><?php echo utf8_encode("Plateau"); ?></option>' +
                        '<option><?php echo utf8_encode("Bennes"); ?></option>' +
                        '<option><?php echo utf8_encode("Demenagement "); ?></option>' +
                        '<option><?php echo utf8_encode("Autres"); ?></option>' +
                      '</select>';
	var capcityDivBus = '<div class="row">' +
                        '<div class="col-md-6">' +
                        '<label>Total Seats</label>'+ 
                        '<input name="number_of_seats" class="form-control" placeholder="<?php echo utf8_encode("Total Seats"); ?>">' +
                      '</div>'+
                      '<div class="col-md-6">' +
                      '<label>Duration</label>'+ 
                     '<input name="duration" class="form-control" placeholder="<?php echo utf8_encode("Duration"); ?>">' +
                     '</div>'+
                        '</div>';				
	getData("1", "Camions citterne", "camions-citterne.png");
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


   $(document).ready(function() {
   $('#reserver').on('click', function(){
      var vehicleID = $("#vehicle_id").val();
      var toCityId = $('select[name="to_city"]').val();
      var fromCityId = $('select[name="from_city"]').val();
      //use above variable to get fare
      if(toCityId) {
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
                  $('#result').empty();
                     $.each(data, function(key, value){
                     $('#result').append('<p value="'+ key +'">' + value + '</p>');
                  });
               },
               error: function (jqXHR, textStatus, errorThrown)
               { alert(errorThrown) }
         ,  
               complete: function(){
               // alert('url');
                  $('#loader').css("visibility", "hidden");
               }
         });
      } else {
            //alert('else');
         $('#result').append('<p>not working</p>');
      }
   });
   });   
</script>
@endpush