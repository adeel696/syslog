@extends('admin.layouts.admin')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/fare') }}">{{ utf8_encode(__('static.Fare')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Add')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Add')) }} {{ utf8_encode(__('static.Fare')) }} <small></small></h1>
    <!-- end page-header -->
    
    <!-- begin section-container -->
    <div class="section-container section-with-top-border p-b-5">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="col-lg-12">
                <!-- begin panel -->
                <div class="panel p-20">
                    {!! Form::open([ 'url' => '/admin/fare', 'files' => true, 'id' => 'main-form' ]) !!}
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
                          <label>{{ utf8_encode(__('static.Country')) }}</label>
						  <?php
							$defaultSelection = [];
							foreach(App\Models\Country::All() as $Country)
							{
								$defaultSelection = $defaultSelection +  array($Country->id => ($Country->name));
							}
						  ?>
						  {!! Form::select('country_id', $defaultSelection, null, ['class' => 'form-control', 'id' => 'countryCity']) !!}
                       </div>
                    </div>
                    <div class="row fromCityDiv">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.From')) }} {{ utf8_encode(__('static.City')) }}</label>
						  <?php
							$defaultSelection = ["" => utf8_encode(__('static.Select'))." ".utf8_encode(__('static.City'))];
							foreach($Cities as $City)
							{
								$defaultSelection = $defaultSelection +  array($City->id => ($City->name));
							}
						  ?>
						  {!! Form::select('from_city', $defaultSelection, null, ['class' => 'form-control', 'id' => 'from_city']) !!}
                       </div>
                    </div>
                    <div class="row toCityDiv">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.To')) }} {{ utf8_encode(__('static.City')) }}</label>
						  <?php
							$defaultSelection = ["" => utf8_encode(__('static.Select'))." ".utf8_encode(__('static.City'))];
							foreach($Cities as $City)
							{
								$defaultSelection = $defaultSelection +  array($City->id => ($City->name));
							}
						  ?>
						  {!! Form::select('to_city', $defaultSelection, null, ['class' => 'form-control', 'id' => 'to_city']) !!}
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Capacity')) }}</label>
                          {!! Form::text('capacity', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Capacity')), 'id' => 'capacity']) !!}
                          @if ($errors->has('capacity'))
                          <p style="color:red;">{!!$errors->first('capacity')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Insurances'))." ".utf8_encode(__('static.Amount')) }}</label>
                          {!! Form::text('insurances_amount', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Insurances'))." ".utf8_encode(__('static.Amount')), 'id' => 'insurances_amount']) !!}
                          @if ($errors->has('insurances_amount'))
                          <p style="color:red;">{!!$errors->first('insurances_amount')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Loading')) }} {{ utf8_encode(__('static.Price')) }}</label>
                          {!! Form::text('loading_price', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Loading'))." ".utf8_encode(__('static.Price')), 'id' => 'loading_price']) !!}
                          @if ($errors->has('loading_price'))
                          <p style="color:red;">{!!$errors->first('loading_price')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Offloading')) }} {{ utf8_encode(__('static.Price')) }}</label>
                          {!! Form::text('offloading_price', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Offloading'))." ".utf8_encode(__('static.Price')), 'id' => 'offloading_price']) !!}
                          @if ($errors->has('offloading_price'))
                          <p style="color:red;">{!!$errors->first('offloading_price')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Fare')) }}</label>
                          {!! Form::text('fare', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Fare')), 'id' => 'fare']) !!}
                          @if ($errors->has('fare'))
                          <p style="color:red;">{!!$errors->first('fare')!!}</p>
                          @endif
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

$('#countryCity').change(function(){
	var url = "{{url('getCities')}}"+'?id='+$(this).val();
	$.ajax({
		   url: url,
		   type:"GET",
		   dataType:"json",
		   success:function(response) {
				$("#from_city").empty();
				$("#from_city").append('<option>{{ utf8_encode(__('static.Select')) }} {{ utf8_encode(__('static.City')) }}</option>');
				$.each(response,function(key,value){
					$("#from_city").append('<option value="'+value.id+'">'+value.name+'</option>');
				});
				
				$("#to_city").empty();
				$("#to_city").append('<option>{{ utf8_encode(__('static.Select')) }} {{ utf8_encode(__('static.City')) }}</option>');
				$.each(response,function(key,value){
					$("#to_city").append('<option value="'+value.id+'">'+value.name+'</option>');
				});
		   },
		   error: function (jqXHR, textStatus, errorThrown)
		   { alert(errorThrown) }
	 }); 
});
$('#vehicleType').on('change', function (e) { 
	var vehicle_type = $('#vehicleType option:selected').val();
	if(vehicle_type == 1)
	{
		$(".fromCityDiv").show();
		$(".toCityDiv").show();
		var url = "{{ url('admin/vehicle/list') }}";
	}
	else
	{
		$(".fromCityDiv").hide();
		$(".toCityDiv").hide();
		var url = "{{ url('admin/construction-machine/list') }}";
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
</script>

@endpush




