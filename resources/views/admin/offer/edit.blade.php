@extends('admin.layouts.admin')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/city') }}">{{ utf8_encode(__('static.Offer')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Add')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Add')) }} {{ utf8_encode(__('static.Offer')) }} <small></small></h1>
    <!-- end page-header -->
    
    <!-- begin section-container -->
    <div class="section-container section-with-top-border p-b-5">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="col-lg-12">
                <!-- begin panel -->
                <div class="panel p-20">
                    {!! Form::model($info_Offer, ['method' => 'PATCH', 'files' => true, 'url' => ['/admin/offer', $info_Offer->id], 'id' => 'main-form']) !!}
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Type')) }}</label>
                          <select id="type" name="type" class="form-control">
                          	<option value="1" {{ $info_Offer->type==1 ? "selected" : ""  }}>Assurance </option>
                            <option value="2" {{ $info_Offer->type==2 ? "selected" : ""  }}>{{ utf8_encode('Pièces détachées') }}</option>
                            <option value="3" {{ $info_Offer->type==3 ? "selected" : ""  }}>Lubrifiants </option>
                            <option value="4" {{ $info_Offer->type==4 ? "selected" : ""  }}>Autres</option>
                          </select>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Title')) }}</label>
                          {!! Form::text('title', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Title')), 'id' => 'title']) !!}
                          @if ($errors->has('title'))
                          <p style="color:red;">{!!$errors->first('title')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div id="typeInputs">
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Desription')) }}</label>
                          {!! Form::text('description', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Desription')), 'id' => 'description']) !!}
                          @if ($errors->has('description'))
                          <p style="color:red;">{!!$errors->first('description')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Amount')) }}</label>
                          {!! Form::text('amount', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Amount')), 'id' => 'amount']) !!}
                          @if ($errors->has('amount'))
                          <p style="color:red;">{!!$errors->first('amount')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Image')) }}</label><br />
                          {!! Form::file('image', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Image')), 'id' => 'image']) !!}
                          @if ($errors->has('image'))
                          <p style="color:red;">{!!$errors->first('image')!!}</p>
                          @endif
                          <img src="{{ url('/media/offers/')."/".$info_Offer->image }}" style="width:50%"/>
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

<div id="insuranceInputs" style="display:none">
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>Type assurance </label>
          {!! Form::text('insurance_type', null, ['class' => 'form-control' , 'required' , 'placeholder' =>'Type assurance', 'id' => 'insurance_type']) !!}
          @if ($errors->has('insurance_type'))
          <p style="color:red;">{!!$errors->first('insurance_type')!!}</p>
          @endif
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>Age de vehicule </label>
          {!! Form::text('range_of_age_of_vehicule', null, ['class' => 'form-control' , 'required' , 'placeholder' =>'Age de vehicule ', 'id' => 'range_of_age_of_vehicule']) !!}
          @if ($errors->has('range_of_age_of_vehicule'))
          <p style="color:red;">{!!$errors->first('range_of_age_of_vehicule')!!}</p>
          @endif
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>Value of vehicule  </label>
          {!! Form::text('value_of_vehicle', null, ['class' => 'form-control' , 'required' , 'placeholder' =>'Value of vehicule ', 'id' => 'value_of_vehicle']) !!}
          @if ($errors->has('value_of_vehicle'))
          <p style="color:red;">{!!$errors->first('value_of_vehicle')!!}</p>
          @endif
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>Puissance moteur  </label>
          {!! Form::text('power', null, ['class' => 'form-control' , 'required' , 'placeholder' =>'Puissance moteur ', 'id' => 'power']) !!}
          @if ($errors->has('power'))
          <p style="color:red;">{!!$errors->first('power')!!}</p>
          @endif
       </div>
    </div>
</div>

<div id="sparePartsInputs" style="display:none">
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>{{ utf8_encode('Désignation') }}</label>
          {!! Form::text('designation', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode('Désignation'), 'id' => 'designation']) !!}
          @if ($errors->has('designation'))
          <p style="color:red;">{!!$errors->first('designation')!!}</p>
          @endif
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>{{ utf8_encode('Référence') }}</label>
          {!! Form::text('reference', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode('Référence'), 'id' => 'reference']) !!}
          @if ($errors->has('reference'))
          <p style="color:red;">{!!$errors->first('reference')!!}</p>
          @endif
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>{{ utf8_encode('Caractéristique') }}</label>
          {!! Form::text('caracteristics', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode('Caractéristique'), 'id' => 'caracteristics']) !!}
          @if ($errors->has('caracteristics'))
          <p style="color:red;">{!!$errors->first('caracteristics')!!}</p>
          @endif
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>{{ utf8_encode('Marque') }}</label>
          {!! Form::text('brand', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode('Marque'), 'id' => 'brand']) !!}
          @if ($errors->has('brand'))
          <p style="color:red;">{!!$errors->first('brand')!!}</p>
          @endif
       </div>
    </div>
</div>

<div id="lubricantsInputs" style="display:none">
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>{{ utf8_encode('Désignation') }}</label>
          {!! Form::text('designation', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode('Désignation'), 'id' => 'designation']) !!}
          @if ($errors->has('designation'))
          <p style="color:red;">{!!$errors->first('designation')!!}</p>
          @endif
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>{{ utf8_encode('Emballage') }}</label>
          {!! Form::text('packaging', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode('Emballage'), 'id' => 'packaging']) !!}
          @if ($errors->has('packaging'))
          <p style="color:red;">{!!$errors->first('packaging')!!}</p>
          @endif
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>{{ utf8_encode('Caractéristique') }}</label>
          {!! Form::text('caracteristics', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode('Caractéristique'), 'id' => 'caracteristics']) !!}
          @if ($errors->has('caracteristics'))
          <p style="color:red;">{!!$errors->first('caracteristics')!!}</p>
          @endif
       </div>
    </div>
    <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
          <label>{{ utf8_encode('Marque') }}</label>
          {!! Form::text('brand', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode('Marque'), 'id' => 'brand']) !!}
          @if ($errors->has('brand'))
          <p style="color:red;">{!!$errors->first('brand')!!}</p>
          @endif
       </div>
    </div>
</div>
@endsection

@push('scripts')

<script type="text/javascript">
	$('#type').on('change', function (e) { 
		addTypeForm($(this).val());
	});
	addTypeForm("{{ $info_Offer->type }}");
	function addTypeForm(type)
	{		
		switch(type)
		{
			case "1":
				$("#typeInputs").html($("#insuranceInputs").html());
			break;
			case "2":
				$("#typeInputs").html($("#sparePartsInputs").html());
			break;
			case "3":
				$("#typeInputs").html($("#lubricantsInputs").html());
			break;
			case "4":
				$("#typeInputs").html('');
			break;
		}
	}

</script>

@endpush