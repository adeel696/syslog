@extends('layouts.cms')
@section('content')

<div id="content" class="content">
   <!-- begin row -->
   <div class="row">
            <!-- begin col-10 -->
         <div class="col-lg-12">
            <!-- begin radius-container -->
               <div class="radius-container m-b-30">
                  <!-- begin panel -->
                  <div class="panel no-rounded-corner bg-inverse text-white wrapper m-b-0">
                     <!-- begin breadcrumb -->
                     <ol class="breadcrumb pull-right bg-inverse">
                        <a href="{{ url('cms/') }}" class="text-light"><i class="fa fa-home text-light"></i> Dashboard </a> > <a href="{{ url('/cms/City') }}"  class="text-light"><i class="fas fa-globe-asia text-light"></i> City</a>
                        </ol>
                              <!-- end breadcrumb -->
                        <!-- begin page-header -->
                        <h1 class="page-header text-light">Cities</h1>
                        <!-- end page-header -->
                     </div>
                  <!-- end panel -->
                  <!-- begin panel -->
                  <div class="panel pagination-inverse bg-white clearfix no-rounded-corner m-b-0">
                  <div class="container">
                  
                  <!-- begin table -->
                  <ul class="nav navbar-right">
                     <li><a href="{{ url('/cms/city/create') }}"><i class="fa fa-plus"></i> Add New</a></li>
                        </li>
                     </ul>
                  <br>
                  {!! Form::model($info_City, ['method' => 'PATCH', 'url' => ['/cms/city', $info_City->id], 'id' => 'main-form']) !!}
                  <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                           <label>Name</label>
                           {!! Form::text('name', null, ['class' => 'form-control' , 'required' , 'placeholder' => 'City', 'id' => 'name']) !!}
                           @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
                        </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                        <label>Country</label>
                        <select name="country_id" class="form-control form-control-sm" required>
                        <option>Select Country</option>
                           @foreach ($Country as $country) 
                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                        </select>
                           {!! Form::hidden('Country', '',['class' => 'form-control form-control-sm','name'=>'categoty[]']) !!} 
                        </div>
                     </div>
                     <div id="new"></div>
                     <div class="ln_solid"></div>
                     <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection