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
                           <a href="javascript:void(0)" class="hedrSel" data-id="99" data-val="Autres" data-img="others2.png">
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
            <form action="#" method="post">
               <div class="form-group row">
                  <div class="col-md-6">
                     <input name="capacity" class="form-control" placeholder="<?php echo utf8_encode("Capacité"); ?>">
                  </div>
                  <div class="col-md-6">
                      <select name="unit" class="form-control">
                        <option><?php echo utf8_encode("Citerne"); ?></option>
                        <option><?php echo utf8_encode("Marchandises divers"); ?></option>
                        <option><?php echo utf8_encode("Plateau"); ?></option>
                        <option><?php echo utf8_encode("Bennes"); ?></option>
                        <option><?php echo utf8_encode("Demenagement "); ?></option>
                        <option><?php echo utf8_encode("Autres"); ?></option>
                      </select>
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
                     <label>City</label>
                     <select name="origin" class="form-control">
                     	<option><?php echo utf8_encode("Aribinda"); ?></option>
                        <option><?php echo utf8_encode("Bagré"); ?></option>
                        <option><?php echo utf8_encode("Banfora"); ?></option>
                        <option><?php echo utf8_encode("Batié"); ?></option>
                        <option><?php echo utf8_encode("Bobo Dioulasso"); ?></option>
                        <option><?php echo utf8_encode("Bogandé"); ?></option>
                        <option><?php echo utf8_encode("Boromo"); ?></option>
                        <option><?php echo utf8_encode("Boulsa"); ?></option>
                        <option><?php echo utf8_encode("Boussé"); ?></option>
                        <option><?php echo utf8_encode("Dano"); ?></option>
                        <option><?php echo utf8_encode("Dédougou"); ?></option>
                        <option><?php echo utf8_encode("Diapaga"); ?></option>
                        <option><?php echo utf8_encode("Diébougou"); ?></option>
                        <option><?php echo utf8_encode("Djibo"); ?></option>
                        <option><?php echo utf8_encode("Dori"); ?></option>
                        <option><?php echo utf8_encode("Fada N'gourma"); ?></option>
                        <option><?php echo utf8_encode("Gaoua"); ?></option>
                        <option><?php echo utf8_encode("Garango"); ?></option>
                        <option><?php echo utf8_encode("Gayéri"); ?></option>
                        <option><?php echo utf8_encode("Gorom-Gorom"); ?></option>
                        <option><?php echo utf8_encode("Gourcy"); ?></option>
                        <option><?php echo utf8_encode("Houndé"); ?></option>
                        <option><?php echo utf8_encode("Kantchari"); ?></option>
                        <option><?php echo utf8_encode("Kaya"); ?></option>
                        <option><?php echo utf8_encode("Kindi"); ?></option>
                        <option><?php echo utf8_encode("Kokologo"); ?></option>
                        <option><?php echo utf8_encode("Kombissiri"); ?></option>
                        <option><?php echo utf8_encode("Kongoussi"); ?></option>
                        <option><?php echo utf8_encode("Kordié"); ?></option>
                        <option><?php echo utf8_encode("Koudougou"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Bam"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Banwa"); ?></option>
                        <option><?php echo utf8_encode("Koupéla"); ?></option>
                        <option><?php echo utf8_encode("Léo"); ?></option>
                        <option><?php echo utf8_encode("Loropeni"); ?></option>
                        <option><?php echo utf8_encode("Manga"); ?></option>
                        <option><?php echo utf8_encode("Méguet"); ?></option>
                        <option><?php echo utf8_encode("Mogtedo"); ?></option>
                        <option><?php echo utf8_encode("Niangoloko"); ?></option>
                        <option><?php echo utf8_encode("Nouna"); ?></option>
                        <option><?php echo utf8_encode("Orodara"); ?></option>
                        <option><?php echo utf8_encode("Ouagadougou (Capital)"); ?></option>
                        <option><?php echo utf8_encode("Ouahigouya"); ?></option>
                        <option><?php echo utf8_encode("Ouargaye"); ?></option>
                        <option><?php echo utf8_encode("Pama"); ?></option>
                        <option><?php echo utf8_encode("Pissila"); ?></option>
                        <option><?php echo utf8_encode("Pô"); ?></option>
                        <option><?php echo utf8_encode("Pouytenga"); ?></option>
                        <option><?php echo utf8_encode("Réo"); ?></option>
                        <option><?php echo utf8_encode("Saponé"); ?></option>
                        <option><?php echo utf8_encode("Sapouy"); ?></option>
                        <option><?php echo utf8_encode("Sebba"); ?></option>
                        <option><?php echo utf8_encode("Séguénéga"); ?></option>
                        <option><?php echo utf8_encode("Sindou"); ?></option>
                        <option><?php echo utf8_encode("Solenzo"); ?></option>
                        <option><?php echo utf8_encode("Tangin Dassouri"); ?></option>
                        <option><?php echo utf8_encode("Tenkodogo"); ?></option>
                        <option><?php echo utf8_encode("Tikaré"); ?></option>
                        <option><?php echo utf8_encode("Titao"); ?></option>
                        <option><?php echo utf8_encode("Toma"); ?></option>
                        <option><?php echo utf8_encode("Tougan"); ?></option>
                        <option><?php echo utf8_encode("Villy"); ?></option>
                        <option><?php echo utf8_encode("Yako"); ?></option>
                        <option><?php echo utf8_encode("Ziniaré"); ?></option>
                        <option><?php echo utf8_encode("Zorgo"); ?></option>
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
                     <label>City</label>
                     <select name="destination" class="form-control">
                     	<option><?php echo utf8_encode("Aribinda"); ?></option>
                        <option><?php echo utf8_encode("Bagré"); ?></option>
                        <option><?php echo utf8_encode("Banfora"); ?></option>
                        <option><?php echo utf8_encode("Batié"); ?></option>
                        <option><?php echo utf8_encode("Bobo Dioulasso"); ?></option>
                        <option><?php echo utf8_encode("Bogandé"); ?></option>
                        <option><?php echo utf8_encode("Boromo"); ?></option>
                        <option><?php echo utf8_encode("Boulsa"); ?></option>
                        <option><?php echo utf8_encode("Boussé"); ?></option>
                        <option><?php echo utf8_encode("Dano"); ?></option>
                        <option><?php echo utf8_encode("Dédougou"); ?></option>
                        <option><?php echo utf8_encode("Diapaga"); ?></option>
                        <option><?php echo utf8_encode("Diébougou"); ?></option>
                        <option><?php echo utf8_encode("Djibo"); ?></option>
                        <option><?php echo utf8_encode("Dori"); ?></option>
                        <option><?php echo utf8_encode("Fada N'gourma"); ?></option>
                        <option><?php echo utf8_encode("Gaoua"); ?></option>
                        <option><?php echo utf8_encode("Garango"); ?></option>
                        <option><?php echo utf8_encode("Gayéri"); ?></option>
                        <option><?php echo utf8_encode("Gorom-Gorom"); ?></option>
                        <option><?php echo utf8_encode("Gourcy"); ?></option>
                        <option><?php echo utf8_encode("Houndé"); ?></option>
                        <option><?php echo utf8_encode("Kantchari"); ?></option>
                        <option><?php echo utf8_encode("Kaya"); ?></option>
                        <option><?php echo utf8_encode("Kindi"); ?></option>
                        <option><?php echo utf8_encode("Kokologo"); ?></option>
                        <option><?php echo utf8_encode("Kombissiri"); ?></option>
                        <option><?php echo utf8_encode("Kongoussi"); ?></option>
                        <option><?php echo utf8_encode("Kordié"); ?></option>
                        <option><?php echo utf8_encode("Koudougou"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Bam"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Banwa"); ?></option>
                        <option><?php echo utf8_encode("Koupéla"); ?></option>
                        <option><?php echo utf8_encode("Léo"); ?></option>
                        <option><?php echo utf8_encode("Loropeni"); ?></option>
                        <option><?php echo utf8_encode("Manga"); ?></option>
                        <option><?php echo utf8_encode("Méguet"); ?></option>
                        <option><?php echo utf8_encode("Mogtedo"); ?></option>
                        <option><?php echo utf8_encode("Niangoloko"); ?></option>
                        <option><?php echo utf8_encode("Nouna"); ?></option>
                        <option><?php echo utf8_encode("Orodara"); ?></option>
                        <option><?php echo utf8_encode("Ouagadougou (Capital)"); ?></option>
                        <option><?php echo utf8_encode("Ouahigouya"); ?></option>
                        <option><?php echo utf8_encode("Ouargaye"); ?></option>
                        <option><?php echo utf8_encode("Pama"); ?></option>
                        <option><?php echo utf8_encode("Pissila"); ?></option>
                        <option><?php echo utf8_encode("Pô"); ?></option>
                        <option><?php echo utf8_encode("Pouytenga"); ?></option>
                        <option><?php echo utf8_encode("Réo"); ?></option>
                        <option><?php echo utf8_encode("Saponé"); ?></option>
                        <option><?php echo utf8_encode("Sapouy"); ?></option>
                        <option><?php echo utf8_encode("Sebba"); ?></option>
                        <option><?php echo utf8_encode("Séguénéga"); ?></option>
                        <option><?php echo utf8_encode("Sindou"); ?></option>
                        <option><?php echo utf8_encode("Solenzo"); ?></option>
                        <option><?php echo utf8_encode("Tangin Dassouri"); ?></option>
                        <option><?php echo utf8_encode("Tenkodogo"); ?></option>
                        <option><?php echo utf8_encode("Tikaré"); ?></option>
                        <option><?php echo utf8_encode("Titao"); ?></option>
                        <option><?php echo utf8_encode("Toma"); ?></option>
                        <option><?php echo utf8_encode("Tougan"); ?></option>
                        <option><?php echo utf8_encode("Villy"); ?></option>
                        <option><?php echo utf8_encode("Yako"); ?></option>
                        <option><?php echo utf8_encode("Ziniaré"); ?></option>
                        <option><?php echo utf8_encode("Zorgo"); ?></option>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="information_product" class="form-control" placeholder="<?php echo utf8_encode("Information sur les produit"); ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="preferences" class="form-control" placeholder="Preferences"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-4">
                     <input name="insurances" type="checkbox" id="insurances1"/> Assurances
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
                    	<input style="display:none" name="value_product" class="form-control" id="insurances_value1" placeholder="<?php echo utf8_encode("Valeur de la marchandise"); ?>">
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
            <img id="catImage" src="{{ url('/home/img/truck/camions-citterne.png') }}" width="100%" />
         </div>
      </div>
      
      <!--Other Form-->
      <div class="row" id="others-form">
         <div class="col-lg-6" >
            <form action="#" method="post">
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="type_of_truck" class="form-control" placeholder="<?php echo utf8_encode("Type de vehicule"); ?>">
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="specifications " class="form-control" placeholder="Specifications"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="capacity" class="form-control" placeholder="<?php echo utf8_encode("Capacité"); ?>">
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
                     <label>City</label>
                     <select name="origin" class="form-control">
                     	<option><?php echo utf8_encode("Aribinda"); ?></option>
                        <option><?php echo utf8_encode("Bagré"); ?></option>
                        <option><?php echo utf8_encode("Banfora"); ?></option>
                        <option><?php echo utf8_encode("Batié"); ?></option>
                        <option><?php echo utf8_encode("Bobo Dioulasso"); ?></option>
                        <option><?php echo utf8_encode("Bogandé"); ?></option>
                        <option><?php echo utf8_encode("Boromo"); ?></option>
                        <option><?php echo utf8_encode("Boulsa"); ?></option>
                        <option><?php echo utf8_encode("Boussé"); ?></option>
                        <option><?php echo utf8_encode("Dano"); ?></option>
                        <option><?php echo utf8_encode("Dédougou"); ?></option>
                        <option><?php echo utf8_encode("Diapaga"); ?></option>
                        <option><?php echo utf8_encode("Diébougou"); ?></option>
                        <option><?php echo utf8_encode("Djibo"); ?></option>
                        <option><?php echo utf8_encode("Dori"); ?></option>
                        <option><?php echo utf8_encode("Fada N'gourma"); ?></option>
                        <option><?php echo utf8_encode("Gaoua"); ?></option>
                        <option><?php echo utf8_encode("Garango"); ?></option>
                        <option><?php echo utf8_encode("Gayéri"); ?></option>
                        <option><?php echo utf8_encode("Gorom-Gorom"); ?></option>
                        <option><?php echo utf8_encode("Gourcy"); ?></option>
                        <option><?php echo utf8_encode("Houndé"); ?></option>
                        <option><?php echo utf8_encode("Kantchari"); ?></option>
                        <option><?php echo utf8_encode("Kaya"); ?></option>
                        <option><?php echo utf8_encode("Kindi"); ?></option>
                        <option><?php echo utf8_encode("Kokologo"); ?></option>
                        <option><?php echo utf8_encode("Kombissiri"); ?></option>
                        <option><?php echo utf8_encode("Kongoussi"); ?></option>
                        <option><?php echo utf8_encode("Kordié"); ?></option>
                        <option><?php echo utf8_encode("Koudougou"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Bam"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Banwa"); ?></option>
                        <option><?php echo utf8_encode("Koupéla"); ?></option>
                        <option><?php echo utf8_encode("Léo"); ?></option>
                        <option><?php echo utf8_encode("Loropeni"); ?></option>
                        <option><?php echo utf8_encode("Manga"); ?></option>
                        <option><?php echo utf8_encode("Méguet"); ?></option>
                        <option><?php echo utf8_encode("Mogtedo"); ?></option>
                        <option><?php echo utf8_encode("Niangoloko"); ?></option>
                        <option><?php echo utf8_encode("Nouna"); ?></option>
                        <option><?php echo utf8_encode("Orodara"); ?></option>
                        <option><?php echo utf8_encode("Ouagadougou (Capital)"); ?></option>
                        <option><?php echo utf8_encode("Ouahigouya"); ?></option>
                        <option><?php echo utf8_encode("Ouargaye"); ?></option>
                        <option><?php echo utf8_encode("Pama"); ?></option>
                        <option><?php echo utf8_encode("Pissila"); ?></option>
                        <option><?php echo utf8_encode("Pô"); ?></option>
                        <option><?php echo utf8_encode("Pouytenga"); ?></option>
                        <option><?php echo utf8_encode("Réo"); ?></option>
                        <option><?php echo utf8_encode("Saponé"); ?></option>
                        <option><?php echo utf8_encode("Sapouy"); ?></option>
                        <option><?php echo utf8_encode("Sebba"); ?></option>
                        <option><?php echo utf8_encode("Séguénéga"); ?></option>
                        <option><?php echo utf8_encode("Sindou"); ?></option>
                        <option><?php echo utf8_encode("Solenzo"); ?></option>
                        <option><?php echo utf8_encode("Tangin Dassouri"); ?></option>
                        <option><?php echo utf8_encode("Tenkodogo"); ?></option>
                        <option><?php echo utf8_encode("Tikaré"); ?></option>
                        <option><?php echo utf8_encode("Titao"); ?></option>
                        <option><?php echo utf8_encode("Toma"); ?></option>
                        <option><?php echo utf8_encode("Tougan"); ?></option>
                        <option><?php echo utf8_encode("Villy"); ?></option>
                        <option><?php echo utf8_encode("Yako"); ?></option>
                        <option><?php echo utf8_encode("Ziniaré"); ?></option>
                        <option><?php echo utf8_encode("Zorgo"); ?></option>
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
                     <label>City</label>
                     <select name="destination" class="form-control">
                     	<option><?php echo utf8_encode("Aribinda"); ?></option>
                        <option><?php echo utf8_encode("Bagré"); ?></option>
                        <option><?php echo utf8_encode("Banfora"); ?></option>
                        <option><?php echo utf8_encode("Batié"); ?></option>
                        <option><?php echo utf8_encode("Bobo Dioulasso"); ?></option>
                        <option><?php echo utf8_encode("Bogandé"); ?></option>
                        <option><?php echo utf8_encode("Boromo"); ?></option>
                        <option><?php echo utf8_encode("Boulsa"); ?></option>
                        <option><?php echo utf8_encode("Boussé"); ?></option>
                        <option><?php echo utf8_encode("Dano"); ?></option>
                        <option><?php echo utf8_encode("Dédougou"); ?></option>
                        <option><?php echo utf8_encode("Diapaga"); ?></option>
                        <option><?php echo utf8_encode("Diébougou"); ?></option>
                        <option><?php echo utf8_encode("Djibo"); ?></option>
                        <option><?php echo utf8_encode("Dori"); ?></option>
                        <option><?php echo utf8_encode("Fada N'gourma"); ?></option>
                        <option><?php echo utf8_encode("Gaoua"); ?></option>
                        <option><?php echo utf8_encode("Garango"); ?></option>
                        <option><?php echo utf8_encode("Gayéri"); ?></option>
                        <option><?php echo utf8_encode("Gorom-Gorom"); ?></option>
                        <option><?php echo utf8_encode("Gourcy"); ?></option>
                        <option><?php echo utf8_encode("Houndé"); ?></option>
                        <option><?php echo utf8_encode("Kantchari"); ?></option>
                        <option><?php echo utf8_encode("Kaya"); ?></option>
                        <option><?php echo utf8_encode("Kindi"); ?></option>
                        <option><?php echo utf8_encode("Kokologo"); ?></option>
                        <option><?php echo utf8_encode("Kombissiri"); ?></option>
                        <option><?php echo utf8_encode("Kongoussi"); ?></option>
                        <option><?php echo utf8_encode("Kordié"); ?></option>
                        <option><?php echo utf8_encode("Koudougou"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Bam"); ?></option>
                        <option><?php echo utf8_encode("Kouka, Banwa"); ?></option>
                        <option><?php echo utf8_encode("Koupéla"); ?></option>
                        <option><?php echo utf8_encode("Léo"); ?></option>
                        <option><?php echo utf8_encode("Loropeni"); ?></option>
                        <option><?php echo utf8_encode("Manga"); ?></option>
                        <option><?php echo utf8_encode("Méguet"); ?></option>
                        <option><?php echo utf8_encode("Mogtedo"); ?></option>
                        <option><?php echo utf8_encode("Niangoloko"); ?></option>
                        <option><?php echo utf8_encode("Nouna"); ?></option>
                        <option><?php echo utf8_encode("Orodara"); ?></option>
                        <option><?php echo utf8_encode("Ouagadougou (Capital)"); ?></option>
                        <option><?php echo utf8_encode("Ouahigouya"); ?></option>
                        <option><?php echo utf8_encode("Ouargaye"); ?></option>
                        <option><?php echo utf8_encode("Pama"); ?></option>
                        <option><?php echo utf8_encode("Pissila"); ?></option>
                        <option><?php echo utf8_encode("Pô"); ?></option>
                        <option><?php echo utf8_encode("Pouytenga"); ?></option>
                        <option><?php echo utf8_encode("Réo"); ?></option>
                        <option><?php echo utf8_encode("Saponé"); ?></option>
                        <option><?php echo utf8_encode("Sapouy"); ?></option>
                        <option><?php echo utf8_encode("Sebba"); ?></option>
                        <option><?php echo utf8_encode("Séguénéga"); ?></option>
                        <option><?php echo utf8_encode("Sindou"); ?></option>
                        <option><?php echo utf8_encode("Solenzo"); ?></option>
                        <option><?php echo utf8_encode("Tangin Dassouri"); ?></option>
                        <option><?php echo utf8_encode("Tenkodogo"); ?></option>
                        <option><?php echo utf8_encode("Tikaré"); ?></option>
                        <option><?php echo utf8_encode("Titao"); ?></option>
                        <option><?php echo utf8_encode("Toma"); ?></option>
                        <option><?php echo utf8_encode("Tougan"); ?></option>
                        <option><?php echo utf8_encode("Villy"); ?></option>
                        <option><?php echo utf8_encode("Yako"); ?></option>
                        <option><?php echo utf8_encode("Ziniaré"); ?></option>
                        <option><?php echo utf8_encode("Zorgo"); ?></option>
                     </select>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="information_product" class="form-control" placeholder="<?php echo utf8_encode("Information sur les produit"); ?>">
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="preferences" class="form-control" placeholder="<?php echo utf8_encode("Préférences:"); ?>"></textarea>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-md-4">
                     <input name="insurances" type="checkbox" id="insurances2"/> Assurances
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
                    	<input style="display:none" name="value_product" class="form-control" id="insurances_value2" placeholder="<?php echo utf8_encode("Valeur de la marchandise"); ?>">
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
            <img src="{{ url('/home/img/truck/others2.png') }}" width="100%" />
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
	
	getData("1", "Camions citterne", "camions-citterne.png");
	function getData(id, type, image)
	{	
		$("#catName").html(type);
		$("#catImage").attr("src","{{ url('/home/img/truck/') }}" + '/' + image);
		switch(id)
		{
			case 99:
				$("#others-form").fadeIn();
				$("#default-form").fadeOut();
			break;
			default:
				$("#others-form").fadeOut();
				$("#default-form").fadeIn();
			break;
		}
	}
	
	$( ".insurances" ).click(function() {
		getData($(this).data("id"), $(this).data("val"), $(this).data("img"))
		$("html, body").animate({ scrollTop: $('#contentDetail').offset().top-200 }, 600);
		
	});
	
	$('#insurances1').change(function(){
        
		if(this.checked)
        {   
			$('#insurances_value1').fadeIn();
			$('#insurances_value1').focus();
		}
        else
		{
            $('#insurances_value1').fadeOut();
		}

    });
	
	$('#insurances2').change(function(){
        
		if(this.checked)
        {   
			$('#insurances_value2').fadeIn();
			$('#insurances_value2').focus();
		}
        else
		{
            $('#insurances_value2').fadeOut();
		}

    });
</script>
@endpush