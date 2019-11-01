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
                     <label>City</label>
                     <select name="origin" class="form-control">
                     	<option><?php echo utf8_encode("Aribinda"); ?></option>
                        <option><?php echo utf8_encode("Bagr�"); ?></option>
                        <option><?php echo utf8_encode("Banfora"); ?></option>
                        <option><?php echo utf8_encode("Bati�"); ?></option>
                        <option><?php echo utf8_encode("Bobo Dioulasso"); ?></option>
                        <option><?php echo utf8_encode("Bogand�"); ?></option>
                        <option><?php echo utf8_encode("Boromo"); ?></option>
                        <option><?php echo utf8_encode("Boulsa"); ?></option>
                        <option><?php echo utf8_encode("Bouss�"); ?></option>
                        <option><?php echo utf8_encode("Dano"); ?></option>
                        <option><?php echo utf8_encode("D�dougou"); ?></option>
                        <option><?php echo utf8_encode("Diapaga"); ?></option>
                        <option><?php echo utf8_encode("Di�bougou"); ?></option>
                        <option><?php echo utf8_encode("Djibo"); ?></option>
                        <option><?php echo utf8_encode("Dori"); ?></option>
                        <option><?php echo utf8_encode("Fada N'gourma"); ?></option>
                        <option><?php echo utf8_encode("Gaoua"); ?></option>
                        <option><?php echo utf8_encode("Garango"); ?></option>
                        <option><?php echo utf8_encode("Gay�ri"); ?></option>
                        <option><?php echo utf8_encode("Gorom-Gorom"); ?></option>
                        <option><?php echo utf8_encode("Gourcy"); ?></option>
                        <option><?php echo utf8_encode("Hound�"); ?></option>
                        <option><?php echo utf8_encode("Kantchari"); ?></option>
                        <option><?php echo utf8_encode("Kaya"); ?></option>
                        <option><?php echo utf8_encode("Kindi"); ?></option>
                        <option><?php echo utf8_encode("Kokologo"); ?></option>
                        <option><?php echo utf8_encode("Kombissiri"); ?></option>
                        <option><?php echo utf8_encode("Kongoussi"); ?></option>
                        <option><?php echo utf8_encode("Kordi�"); ?></option>
                        <option><?php echo utf8_encode("Koudougou"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Bam"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Banwa"); ?></option>
                        <option><?php echo utf8_encode("Koup�la"); ?></option>
                        <option><?php echo utf8_encode("L�o"); ?></option>
                        <option><?php echo utf8_encode("Loropeni"); ?></option>
                        <option><?php echo utf8_encode("Manga"); ?></option>
                        <option><?php echo utf8_encode("M�guet"); ?></option>
                        <option><?php echo utf8_encode("Mogtedo"); ?></option>
                        <option><?php echo utf8_encode("Niangoloko"); ?></option>
                        <option><?php echo utf8_encode("Nouna"); ?></option>
                        <option><?php echo utf8_encode("Orodara"); ?></option>
                        <option><?php echo utf8_encode("Ouagadougou (Capital)"); ?></option>
                        <option><?php echo utf8_encode("Ouahigouya"); ?></option>
                        <option><?php echo utf8_encode("Ouargaye"); ?></option>
                        <option><?php echo utf8_encode("Pama"); ?></option>
                        <option><?php echo utf8_encode("Pissila"); ?></option>
                        <option><?php echo utf8_encode("P�"); ?></option>
                        <option><?php echo utf8_encode("Pouytenga"); ?></option>
                        <option><?php echo utf8_encode("R�o"); ?></option>
                        <option><?php echo utf8_encode("Sapon�"); ?></option>
                        <option><?php echo utf8_encode("Sapouy"); ?></option>
                        <option><?php echo utf8_encode("Sebba"); ?></option>
                        <option><?php echo utf8_encode("S�gu�n�ga"); ?></option>
                        <option><?php echo utf8_encode("Sindou"); ?></option>
                        <option><?php echo utf8_encode("Solenzo"); ?></option>
                        <option><?php echo utf8_encode("Tangin Dassouri"); ?></option>
                        <option><?php echo utf8_encode("Tenkodogo"); ?></option>
                        <option><?php echo utf8_encode("Tikar�"); ?></option>
                        <option><?php echo utf8_encode("Titao"); ?></option>
                        <option><?php echo utf8_encode("Toma"); ?></option>
                        <option><?php echo utf8_encode("Tougan"); ?></option>
                        <option><?php echo utf8_encode("Villy"); ?></option>
                        <option><?php echo utf8_encode("Yako"); ?></option>
                        <option><?php echo utf8_encode("Ziniar�"); ?></option>
                        <option><?php echo utf8_encode("Zorgo"); ?></option>
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
                  <input type="button" class="btn btn-block btn-primary text-white py-3 px-5" value="Reserver" data-toggle="modal" data-target="#exampleModalCenter">
                  </div>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLongTitle">Fare</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                        @foreach ($Fare as $fare)
                           {{$fare->fare}}
                        @endforeach
                        </div>
                        <div class="modal-footer">
                           <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Reserver">
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
                     <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Reserver">
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
		$("#contruction_machinary_id").val(id);
		$("#catName").html(type);
		$("#catImage").attr("src","{{ url('/home/img/construction/') }}" + '/' + image);
		switch(id)
		{
			case 11:
				$("#others-form").fadeIn();
				$("#default-form").fadeOut();
			break;
			default:
				$("#others-form").fadeOut();
				$("#default-form").fadeIn();
			break;
		}
	}
</script>
@endpush