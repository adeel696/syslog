@extends('cms.layouts.cms')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/fare') }}">{{ utf8_encode(__('static.Asset')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Add')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Add')) }} {{ utf8_encode(__('static.Asset')) }} <small></small></h1>
    <!-- end page-header -->
    
    <!-- begin section-container -->
    <div class="section-container section-with-top-border p-b-5">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="col-lg-12">
                <!-- begin panel -->
                <div class="panel p-20">
                    {!! Form::open([ 'url' => '/cms/asset', 'files' => true, 'id' => 'main-form' ]) !!}
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Type')) }}</label>
						  <?php
							$defaultSelection = ["1" => utf8_encode(__('static.Vehicles')), "2" => utf8_encode(__('static.Construction'))." ".utf8_encode(__('static.Machines'))];
						  ?>
						  {!! Form::select('type_of_vehicle', $defaultSelection, null, ['class' => 'form-control', 'id' => 'vehicleType']) !!}
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Vehicles')) }}</label>
						  <?php
							$defaultSelection = [];
							foreach($Vehicles as $Vehicle)
							{
								$defaultSelection = $defaultSelection +  array($Vehicle->id => ($Vehicle->name));
							}
						  ?>
                          {!! Form::select('machine_id', $defaultSelection, null, ['class' => 'form-control', 'id' => 'machine_id']) !!}
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Quantity')) }}</label>
                          {!! Form::text('quantity', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Quantity')), 'id' => 'quantity']) !!}
                          @if ($errors->has('quantity'))
                          <p style="color:red;">{!!$errors->first('quantity')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12 col-sm-12 col-xs-12 col-xs-12 form-group">
                          <table id="mapTable" class="table table-bordered" style="width:100%">
                             <thead>
                                <tr>
                                   <th></th>
                                   <th colspan="4"></th>
                                   <th rowspan="2" style="text-align:center">{{ utf8_encode("Distance au compteur") }}</th>
                                   <th colspan="4" style="text-align:center">{{ utf8_encode("Spécifications") }}</th>
                                </tr>
                                <tr>
                                   <th></th>
                                   <th>{{ utf8_encode("Capacité") }}</th>
                                   <th>{{ utf8_encode("N° d'immatriculation") }}</th>
                                   <th>{{ utf8_encode("Date mise en circulation") }}</th>
                                   <th>{{ utf8_encode("Etat") }}</th>
                                    
                                   <th>{{ utf8_encode("Marque") }}</th>
                                   <th>{{ utf8_encode("Fabricant") }}</th>
                                   <th>{{ utf8_encode("Série") }}</th>
                                   <th>{{ utf8_encode("Autres spécifications") }}</th>
                                </tr>
                             </thead>
                             <tbody id="mapBody">
                                <tr>
                                  	<td>
                                    	<a href="javascript:void(0)" class="btn btn-success btn-sm btn-circle addBtn"><i class="fa fa-plus"></i></a>
                                    </td>
                                    <td>
                                    	<input type="text" name="capacity[]" id="capacity" class="form-control capacity"/>
                                    </td>
                                    <td>
                                    	<input type="text" name="registration_number[]" id="registration_number" class="form-control"/>
                                    </td>
                                    <td>
                                    	<input type="text" name="date_of_entry[]" id="date_of_entry" class="form-control"/>
                                    </td>
                                    <td>
                                    	<input type="text" name="state[]" id="state" class="form-control"/>
                                    </td>
                                    <td>
                                    	<input type="text" name="meter_reading[]" id="meter_reading" class="form-control"/>
                                    </td>
                                    <td>
                                    	<input type="text" name="mark[]" id="mark" class="form-control"/>
                                    </td>
                                    <td>
                                    	<input type="text" name="maker[]" id="maker" class="form-control"/>
                                    </td>
                                    <td>
                                    	<input type="text" name="series[]" id="series" class="form-control"/>
                                    </td>
                                    <td>
                                    	<input type="text" name="other_specifications[]" id="other_specifications" class="form-control"/>
                                    </td>
                                </tr>
                             </tbody>
                          </table>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <button type="submit" class="btn btn-purple m-r-5 width-100">{{ utf8_encode(__('static.Submit')) }}</button>
                       </div>
                    </div>  
                    </form>
                </div>
                <!-- end panel -->
            </div>
            <!-- end col-8 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end section-container -->
</div>
<!-- end content -->
@endsection


@push('scripts')

<script type="text/javascript">
    
$('#vehicleType').on('change', function (e) { 
	var vehicle_type = $('#vehicleType option:selected').val();
	if(vehicle_type == 1)
	{
		$(".fromCityDiv").show();
		$(".toCityDiv").show();
		var url = "{{ url('cms/vehicle/list') }}";
	}
	else
	{
		$(".fromCityDiv").hide();
		$(".toCityDiv").hide();
		var url = "{{ url('cms/construction-machine/list') }}";
	}
		
	$.ajax({
		url: url,
		type: 'GET',
		dataType: 'json',
		data: {method: '_GET', "_token": "{{ csrf_token() }}" , submit: true},
		success: function (response) {
			$("#machine_id").html("");
			$.each(response,function(key,value){
				$("#machine_id").append('<option selected value="'+key+'">'+value+'</option>');
			})
		},
		error: function (result, status, err) {
			alert(result.responseText);
			alert(status.responseText);
			alert(err.Message);
		},
	});
});

$(document).on('click', '.addBtn', function (e) { 	
	var rowVal = '<tr>' +
					'<td>' +
					'<div class="btn-group" role="group"><a href="javascript:void(0)" class="btn btn-danger btn-sm btn-circle delBtn"><i class="fa fa-times"></i></a>' +
					'	<a href="javascript:void(0)" class="btn btn-success btn-sm btn-circle addBtn"><i class="fa fa-plus"></i></a></div>' +
					'</td>' +
					'<td>' +
					'	<input type="text" name="capacity[]" id="capacity" class="form-control capacity"/>' +
					'</td>' +
					'<td>' +
					'	<input type="text" name="registration_number[]" id="registration_number" class="form-control"/>' +
					'</td>' +
					'<td>' +
					'	<input type="text" name="date_of_entry[]" id="date_of_entry" class="form-control"/>' +
					'</td>' +
					'<td>' +
					'	<input type="text" name="state[]" id="state" class="form-control"/>' +
					'</td>' +
					'<td>' +
					'	<input type="text" name="meter_reading[]" id="meter_reading" class="form-control"/>' +
					'</td>' +
					'<td>' +
					'	<input type="text" name="mark[]" id="mark" class="form-control"/>' +
					'</td>' +
					'<td>' +
					'	<input type="text" name="maker[]" id="maker" class="form-control"/>' +
					'</td>' +
					'<td>' +
					'	<input type="text" name="series[]" id="series" class="form-control"/>' +
					'</td>' +
					'<td>' +
					'	<input type="text" name="other_specifications[]" id="other_specifications" class="form-control"/>' +
					'</td>' +
				'</tr>';
	$('#mapTable tr:last').after(rowVal);
});

$(document).on('click', '.delBtn', function (e) {
	$(this).closest('tr').remove();
});

$("#main-form").submit(function(){
	var i=0;
	$(".capacity").each(function( index ) {
		i++;
	});
	if($("#quantity").val() != i)
	{
		alert("Vous devriez ajouter "+$("#quantity").val()+" actifs")
		return false;
	}
	
});


</script>
@endpush

