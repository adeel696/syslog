@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('home/img/warehousebk.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-9 text-center">
            <h1>Warehouse</h1><br>      
        </div>
      </div>
    </div>
  </div>
</div>


<div class="bg-light" style="padding:50px">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4" id="catName">Warehouse</h2>
        </div>
    </div>
    <div class="container">
    	<div class="row" id="default">
         <div class="col-lg-6" >
            <form action="#" method="post">
               <div class="form-group row">
                  <div class="col-md-12">
                     <label>Type de produits:</label>
                     <select name="product_type" class="form-control">
                     	<option><?php echo utf8_encode("denrée alimentaire"); ?></option>
                        <option><?php echo utf8_encode("Textile et vêtements"); ?></option>
                        <option><?php echo utf8_encode("Produits chimiques"); ?></option>
                        <option><?php echo utf8_encode("Informatique électronique"); ?></option>
                        <option><?php echo utf8_encode("électroménager"); ?></option>
                        <option><?php echo utf8_encode("fournitures de bureau"); ?></option>
                        <option><?php echo utf8_encode("Matières premières"); ?></option>
                        <option><?php echo utf8_encode("Matériaux de construction"); ?></option>
                        <option><?php echo utf8_encode("Autres"); ?></option>
                     </select>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <textarea name="designation " class="form-control" placeholder="Designation"></textarea>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <label><?php echo utf8_encode("Type de Conditionnement"); ?>:</label>
                     <select name="product_type" class="form-control">
                        <option><?php echo utf8_encode("Carton"); ?></option>
                        <option><?php echo utf8_encode("Palette"); ?></option>
                        <option><?php echo utf8_encode("Caisse en bois"); ?></option>
                        <option><?php echo utf8_encode("Caisse metallique"); ?></option>
                        <option><?php echo utf8_encode("Fût plastique"); ?></option>
                        <option><?php echo utf8_encode("Fût metallique"); ?></option>
                        <option><?php echo utf8_encode("Pack Filmé en plastique"); ?></option>
                        <option><?php echo utf8_encode("Conteneur"); ?></option>
                        <option><?php echo utf8_encode("Sac( jute, plastique...)"); ?></option>
                        <option><?php echo utf8_encode("Bidon"); ?></option>
                        <option><?php echo utf8_encode("Autres"); ?></option>
                     </select>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="weight" class="form-control" placeholder="<?php echo utf8_encode("Poids"); ?>">
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <input name="volume" class="form-control" placeholder="<?php echo utf8_encode("Volume total"); ?>">
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                     <label>Espace desiree (m2):</label>
                     <select name="needed_space" class="form-control">
                     	<option><?php echo utf8_encode("10 - 50m2 "); ?></option>
                        <option><?php echo utf8_encode("50 - 100m2"); ?></option>
                        <option><?php echo utf8_encode("100 - 200m2"); ?></option>
                        <option><?php echo utf8_encode("200 - 300m2 "); ?></option>
                        <option><?php echo utf8_encode("300-400m2 "); ?></option>
                        <option><?php echo utf8_encode("400-500m2"); ?></option>
                        <option><?php echo utf8_encode("more than 500m2"); ?></option>
                     </select>
                  </div>
               </div>
               
               <div class="form-group row">
                  <div class="col-md-12">
                  	<textarea name="preferences" class="form-control" placeholder="<?php echo utf8_encode("Préférences:"); ?>"></textarea>

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
            <img id="catImage" src="{{ url('/home/img/hero-warehouse.png') }}" width="100%" />
         </div>
      </div>
    </div>
</div>
@endsection
@push('scripts') 
<script>
	$("html, body").animate({ scrollTop: $('#default').offset().top-200 }, 600);
</script>
@endpush
