@extends('admin.layouts.admin')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/user') }}">{{ utf8_encode(__('static.User')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Add')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Add')) }} {{ utf8_encode(__('static.User')) }} <small></small></h1>
    <!-- end page-header -->
    
    <!-- begin section-container -->
    <div class="section-container section-with-top-border p-b-5">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="col-lg-12">
                <!-- begin panel -->
                <div class="panel p-20">
                    {!! Form::model($info_Admin, ['method' => 'PATCH', 'files' => true, 'url' => ['/admin/user', $info_Admin->id], 'id' => 'main-form']) !!}
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Name')) }}</label>
                          {!! Form::text('name', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Name')), 'id' => 'name']) !!}
                          @if ($errors->has('name'))
                          <p style="color:red;">{!!$errors->first('name')!!}</p>
                          @endif
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Email')) }}</label>
                          {!! Form::text('email', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Email')), 'id' => 'email']) !!}
                          @if ($errors->has('email'))
                          <p style="color:red;">{!!$errors->first('email')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Password')) }}</label>
                          {!! Form::password('password', ['class' => 'form-control' , 'placeholder' => utf8_encode(__('static.Password')), 'id' => 'password']) !!}
                          @if ($errors->has('password'))
                          <p style="color:red;">{!!$errors->first('password')!!}</p>
                          @endif
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Confirm')) }} {{ utf8_encode(__('static.Password')) }}</label>
                          {!! Form::password('password_confirmation', ['class' => 'form-control' , 'placeholder' => utf8_encode(__('static.Confirm')) .' '. utf8_encode(__('static.Password')), 'id' => 'password_confirmation']) !!}
                          @if ($errors->has('password_confirmation'))
                          <p style="color:red;">{!!$errors->first('password_confirmation')!!}</p>
                          @endif
                       </div>
                    </div>
                    @if($info_Admin->id == "1")
                    <div class="row" style="display:none">
                    @else
                    <div class="row">
                    @endif
                       	<div class="col-md-12 col-sm-12 col-xs-12 col-xs-12 form-group">
                            <label>Autorisation</label>
                            <p>
                                <input name="booking" type="checkbox" data-render="switchery" data-theme="primary" {{ $info_Admin->booking == 1 ? "checked" : "" }} /> 
                                <span class="m-l-5 m-r-20">{{ utf8_encode(__('static.Booking')) }}</span>
                            </p>
                            <p>
                                <input name="users" type="checkbox" data-render="switchery" data-theme="primary" {{ $info_Admin->users == 1 ? "checked" : "" }} /> 
                                <span class="m-l-5 m-r-20">{{ utf8_encode(__('static.Users')) }}</span>
                            </p>
                            <p>
                                <input name="fares" type="checkbox" data-render="switchery" data-theme="primary" {{ $info_Admin->fares == 1 ? "checked" : "" }} /> 
                                <span class="m-l-5 m-r-20">{{ utf8_encode(__('static.Fares')) }}</span>
                            </p>
                            <p>
                                <input name="vehicles" type="checkbox" data-render="switchery" data-theme="primary" {{ $info_Admin->booking == 1 ? "checked" : "" }} /> 
                                <span class="m-l-5 m-r-20">{{ utf8_encode(__('static.Vehicles')) }}</span>
                            </p>
                            <p>
                                <input name="construction_machines" type="checkbox" data-render="switchery" data-theme="primary" {{ $info_Admin->construction_machines == 1 ? "checked" : "" }} /> 
                                <span class="m-l-5 m-r-20">{{ utf8_encode(__('static.Construction')) }} {{ utf8_encode(__('static.Machines')) }}</span>
                            </p>
                            <p>
                                <input name="offer" type="checkbox" data-render="switchery" data-theme="primary" {{ $info_Admin->offer == 1 ? "checked" : "" }} /> 
                                <span class="m-l-5 m-r-20">{{ utf8_encode(__('static.Offer')) }}</span>
                            </p>
                            <p>
                                <input name="packaging" type="checkbox" data-render="switchery" data-theme="primary" {{ $info_Admin->packaging == 1 ? "checked" : "" }} /> 
                                <span class="m-l-5 m-r-20">{{ utf8_encode(__('static.Packaging')) }}</span>
                            </p>
                            <p>
                                <input name="goods_deals" type="checkbox" data-render="switchery" data-theme="primary" {{ $info_Admin->goods_deals == 1 ? "checked" : "" }} /> 
                                <span class="m-l-5 m-r-20">{{ utf8_encode(__('static.Goods')) }} {{ utf8_encode(__('static.Deals')) }}</span>
                            </p>
                            <p>
                                <input name="cities" type="checkbox" data-render="switchery" data-theme="primary" {{ $info_Admin->cities == 1 ? "checked" : "" }} /> 
                                <span class="m-l-5 m-r-20">{{ utf8_encode(__('static.Cities')) }}</span>
                            </p>
                                
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