@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
   <div class="ftco-cover-1 overlay" style="background-image: url('home/img/constructionbk.jpg')">
      <div class="container">
         <div class="row align-items-center justify-content-center">
            <div class="col-lg-9 text-center">
               <h1>We can make it together</h1>
               <br>      
               <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                  <div class="MultiCarousel-inner">
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="1" data-val="<?php echo utf8_encode("B�tonneuse"); ?>" data-img="cement-mixer.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/cement-mixer.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("B�tonneuse"); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="2" data-val="<?php echo utf8_encode("Niveleuses"); ?>" data-img="grader.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/grader.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Niveleuses"); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="3" data-val="<?php echo utf8_encode("Pelleteuses"); ?>" data-img="shovel.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/shovel.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Pelleteuses"); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="4" data-val="<?php echo utf8_encode("Forage"); ?>" data-img="drilling-machine.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/drilling-machine.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Forage"); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="5" data-val="<?php echo utf8_encode("BULL "); ?>" data-img="for-bulldozer.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/for-bulldozer.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("BULL "); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="6" data-val="<?php echo utf8_encode("Chargeurs"); ?>" data-img="loader.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/loader.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Chargeurs"); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="7" data-val="<?php echo utf8_encode("Grues"); ?>" data-img="crane.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/crane.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Grues"); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="8" data-val="<?php echo utf8_encode("Porte char"); ?>" data-img="tank-transporter.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/tank-transporter.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Porte char"); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="9" data-val="<?php echo utf8_encode("Nacelles �l�vateur"); ?>" data-img="aerial-lift.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/aerial-lift.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Nacelles �l�vateur"); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="10" data-val="<?php echo utf8_encode("Compacteurs"); ?>" data-img="compactors.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/compactors.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Compacteurs"); ?></p>
                           </a>
                        </div>
                     </div>
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="11" data-val="<?php echo utf8_encode("Autres"); ?>" data-img="othersm.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/othersm.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Autres"); ?></p>
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
         <h2 class="mb-4" id="catName" name="type_of_machinery">Category</h2>
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
            {!! Form::open([ 'url' => '/construction-machinery', 'files' => true, 'id' => 'main-form' ]) !!}
               <input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
               <input type="hidden" name="contruction_machinary_id" id="contruction_machinary_id" value = '1' />
               <input type="hidden" name="type_of_machinery">
               <div class="form-group row">
                  <div class="col-md-6">
                      <label><?php echo utf8_encode("Lieu de livraison"); ?></label>
                      <select name="country" class="form-control">
                     	<option><?php echo utf8_encode("Burkina FASO"); ?></option>
                      </select>
                  </div>
                  <div class="col-md-6">
                     <label>Ville</label>
                     <select name="origin" class="form-control">
                     	@foreach($City as $city)
                            <option value = '{{$city->id}}'>{{$city->name}}</option>
                         @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="delivery_deadline" class="form-control" placeholder="<?php echo utf8_encode("D�lai maximum de livraiuson"); ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="specifications " class="form-control" placeholder="Specifications"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="duration_of_user" class="form-control" placeholder="<?php echo utf8_encode("Dur�e d'utilisation"); ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="preferences" class="form-control" placeholder="Preferences"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                  <input id="reserver" type="button" id="reserver" class="btn btn-block btn-primary text-white py-3 px-5" value="Reserver" data-toggle="modal" data-target="#reserverModal">
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="reserverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body">
                        <h4>Booking Amount: <span id="result"></span></h4>
                        <input type="hidden" name="amount" id="amount" />
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
            <img id="catImage" src="{{ url('/home/img/construction/camions-citterne.png') }}" width="100%" />
         </div>
      </div>
      
      <!--Other Form-->
      <div class="row" id="others-form">
         <div class="col-lg-6" >
            {!! Form::open([ 'url' => '/construction-machinery', 'files' => true, 'id' => 'main-form' ]) !!}
               <input type="hidden" name="user_id" id="user_id" value="<?php echo (Auth::User() != NULL) ? Auth::User()->id : "" ?>" />
               <input type="hidden" name="contruction_machinary_id" id="contruction_machinary_id-other" value = '1' />
               <div class="form-group row">
                  <div class="col-md-12">
                     <select name="type_of_machinery" class="form-control">
                     	<option>Balayeuse</option>
                        <option>Chenille</option>
                        <option>Tracteur</option>
                        <option>Autres a precis</option>
                      </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-6">
                      <label><?php echo utf8_encode("Lieu de livraison"); ?></label>
                      <select name="country" class="form-control">
                     	<option><?php echo utf8_encode("Burkina FASO"); ?></option>
                      </select>
                  </div>
                  <div class="col-md-6">
                     <label>City</label>
                     <select name="origin" class="form-control">' +
                        @foreach(App\Models\City::All() as $city)
                            <option value="{{ $city->id }}">{{ utf8_encode($city->name) }}</option>
                        @endforeach
				 	</select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="delivery_deadline" class="form-control" placeholder="<?php echo utf8_encode("D�lai maximum de livraiuson"); ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="specifications " class="form-control" placeholder="Specifications"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="durartion" class="form-control" placeholder="<?php echo utf8_encode("Dur�e d'utilisation"); ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="preferences" class="form-control" placeholder="Preferences"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                     	<input id="reserver-other" type="button" id="reserver" class="btn btn-block btn-primary text-white py-3 px-5" value="Reserver" data-toggle="modal" data-target="#reserverModal-other">
                     	<!-- Modal -->
                      <div class="modal fade" id="reserverModal-other" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-body">
                            <h4>Booking Amount: <span id="result-other"></span></h4>
                            <input type="hidden" name="amount" id="amount-other" />
                            </div>
                            <div class="modal-footer">
                               <input type="submit" class="btn btn-primary text-white py-3 px-3" value="Reserver">
                               <input type="button" class="btn btn-secondary text-white py-3 px-3" data-dismiss="modal" value="Close">
                            </div>
                            </div>
                         </div>
                      </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-lg-6" >
            <img src="{{ url('/home/img/construction/othersm.png') }}" width="100%" />
         </div>
      </div>
   </div>
</div>
@endsection
@push('scripts') 
<script>
	$( ".hedrSel" ).click(function() {
		getData($(this).data("id"), $(this).data("val"), $(this).data("img"))
		$("html, body").animate({ scrollTop: $('#contentDetail').offset().top-200 }, 600);
		
	});
	
	getData("1", "<?php echo utf8_encode("B�tonneuse"); ?>", "cement-mixer.png");
	function getData(id, type, image)
	{	
		$("#catName").html(type);
		$("#catImage").attr("src","{{ url('/home/img/construction/') }}" + '/' + image);
		switch(id)
		{
			case 11:
				$("#contruction_machinary_id-other").val(id);
				$("#others-form").fadeIn();
				$("#default-form").fadeOut();
			break;
			default:
				$("#contruction_machinary_id").val(id);
				$("#others-form").fadeOut();
				$("#default-form").fadeIn();
			break;
		}
	}
	
	$('#reserver').on('click', function(){
      	if($("#user_id").val() == "")
		{
			window.location.href = "{{ url('login') }}";
			return false;
		}
	  var machineID = $("#contruction_machinary_id").val();
      //use above variable to get fare
      var url = "{{url('construction-machinery/getFare')}}"+'/';
      // alert(url);
	  $.ajax({
		   url: url,
		   type:"GET",
		   dataType:"json",
		   data: {method: '_GET',"contruction_machinary_id":machineID, "_token": "{{ csrf_token() }}" ,    submit: true},
		   beforeSend: function(){
			  $('#loader').css("visibility", "visible");
		   },
		   success:function(data) {
				console.log(data);
				//$('#result').empty();
				var amount = parseInt(data.fare);
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
   });
	
   $('#reserver-other').on('click', function(){
		if($("#user_id").val() == "")
		{
			window.location.href = "{{ url('login') }}";
			return false;
		}
	  var machineID = $("#contruction_machinary_id-other").val();
      //use above variable to get fare
      var url = "{{url('construction-machinery/getFare')}}"+'/';
      // alert(url);
	  $.ajax({
		   url: url,
		   type:"GET",
		   dataType:"json",
		   data: {method: '_GET',"contruction_machinary_id":machineID, "_token": "{{ csrf_token() }}" ,    submit: true},
		   beforeSend: function(){
			  $('#loader').css("visibility", "visible");
		   },
		   success:function(data) {
				console.log(data);
				//$('#result').empty();
				var amount = parseInt(data.fare);
				$('#result-other').html(amount);
				$('#amount-other').val(amount);
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
</script>
@endpush