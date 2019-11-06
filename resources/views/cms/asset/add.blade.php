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
                          <label>{{ utf8_encode(__('static.Capacity')) }}</label>
                          {!! Form::text('capacity', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Capacity')), 'id' => 'capacity']) !!}
                          @if ($errors->has('capacity'))
                          <p style="color:red;">{!!$errors->first('capacity')!!}</p>
                          @endif
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
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.State')) }}</label>
                          {!! Form::text('state', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.State')), 'id' => 'state']) !!}
                          @if ($errors->has('state'))
                          <p style="color:red;">{!!$errors->first('state')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Meter Reading')) }}</label>
                          {!! Form::text('meter_reading', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Meter Reading')), 'id' => 'meter_reading']) !!}
                          @if ($errors->has('meter_reading'))
                          <p style="color:red;">{!!$errors->first('meter_reading')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Specifications')) }}</label>
                          {!! Form::text('specifications', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Specifications')), 'id' => 'specifications']) !!}
                          @if ($errors->has('specifications'))
                          <p style="color:red;">{!!$errors->first('specifications')!!}</p>
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
</script>

@endpush




