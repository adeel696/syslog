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
                     <input name="packaging" class="form-control" placeholder="<?php echo utf8_encode("Conditionnement"); ?>">
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
                     <label><?php echo utf8_encode("Préférences:"); ?></label>
                     <select name="needed_space" class="form-control">
                     	<option><?php echo utf8_encode("Villes"); ?></option>
                        <option><?php echo utf8_encode("Autres exigences"); ?></option>
                     </select>
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
            <img id="catImage" src="{{ url('/home/img/warehousebk.jpg') }}" width="100%" />
         </div>
      </div>
    </div>
</div>
@endsection
@push('scripts') 
<script>
	getData();
	function getData()
	{
		$("#catName").html("Warehouse");
		var data = "";
		for(i=0; i<20; i++)
		{
			var data = data + '<div class="col-lg-3 col-md-6 mb-5">' +
					   '<div class="post-entry-1 h-100" style="background:#fff">' +
						  '<a href="#">' +
						  '<img src="{{ url("home/img/warehousebk.jpg") }}" alt="Image" class="img-fluid">' +
						 '</a>' +
						 '<div class="post-entry-1-contents">' +
							 '<a href="#">' +
								'<h2>Best Warehouse</h2>' +
							 '</a>' +
							 '<p>$10/Day</p>' +
							 '<a href="#" class="more">Book</a>' +
						  '</div>' +
					   '</div>' +
					'</div>';
		}
		$("#contentDetail").html(data)
	}
</script>
@endpush
