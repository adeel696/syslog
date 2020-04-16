@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
   <div class="ftco-cover-1 overlay" style="background-image: url('home/img/constructionbk.jpg')">
      <div class="container">
         <div class="row align-items-center justify-content-center">
            <div class="col-lg-9 text-center">
               <h1>{{ utf8_encode(__("Construisons demain Aujourd'hui")) }}</h1><br>   
               <br>      
               <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                  <div class="MultiCarousel-inner">
                     <div class="item">
                        <div class="pad15">
                           <a href="javascript:void(0)" class="hedrSel" data-id="1" data-val="<?php echo utf8_encode("B�tonneuse"); ?>" data-img="cement-mixer.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/cement-mixer.png') }}" style="width:100px"></span>
                              <p><?php echo utf8_encode("Betonneuse"); ?></p>
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
                           <a href="javascript:void(0)" class="hedrSel" data-id="9" data-val="{{ utf8_encode(__('static.Aerial Lift')) }}" data-img="aerial-lift.png">
                              <span class="lead"><img class="zoomImg" src="{{ url('/home/img/construction/aerial-lift.png') }}" style="width:100px"></span>
                              <p>{{ utf8_encode(__('static.Aerial Lift')) }}</p>
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
                      <select name="country" class="form-control select2">
                     	<option><?php echo utf8_encode("Burkina FASO"); ?></option>
                      </select>
                  </div>
                  <div class="col-md-6">
                     <label>{{ utf8_encode(__('static.City')) }}</label>
                     <select name="origin" class="form-control select2">
                     	@foreach($City as $city)
                            <option value = '{{$city->id}}'>{{$city->name}}</option>
                         @endforeach
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="delivery_deadline" class="form-control" placeholder="{{ utf8_encode(__('static.Delivery Deadline')) }}">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="specifications " class="form-control" placeholder="{{ utf8_encode(__('static.Specifications')) }}"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="duration_of_user" class="form-control" placeholder="{{ utf8_encode(__('static.Duration of User')) }}">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="preferences" class="form-control" placeholder="{{ utf8_encode(__('static.Preferences')) }}"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                  <input id="reserver" type="submit" id="reserver" class="btn btn-block btn-primary text-white py-3 px-5" value="{{ utf8_encode(__('static.Reserve')) }}" data-toggle="modal" data-target="#reserverModal">
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
                      <select name="country" class="form-control select2">
                     	<option><?php echo utf8_encode("Burkina FASO"); ?></option>
                      </select>
                  </div>
                  <div class="col-md-6">
                     <label>{{ utf8_encode(__('static.City')) }}</label>
                     <select name="origin" class="form-control select2">' +
                        @foreach(App\Models\City::All() as $city)
                            <option value="{{ $city->id }}">{{ utf8_encode($city->name) }}</option>
                        @endforeach
				 	</select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="delivery_deadline" class="form-control" placeholder="{{ utf8_encode(__('static.Delivery Deadline')) }}">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="specifications " class="form-control" placeholder="{{ utf8_encode(__('static.Specifications')) }}"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="durartion" class="form-control" placeholder="{{ utf8_encode(__('static.Duration of User')) }}">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="preferences" class="form-control" placeholder="{{ utf8_encode(__('static.Preferences')) }}"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                     	<input id="reserver-other" type="submit" id="reserver" class="btn btn-block btn-primary text-white py-3 px-5" value="{{ utf8_encode(__('static.Reserve')) }}" data-toggle="modal" data-target="#reserverModal-other">
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
	
	getData("1", "<?php echo utf8_encode("Betonneuse"); ?>", "cement-mixer.png");
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
	
	
</script>
@endpush