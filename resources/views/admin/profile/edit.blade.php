@extends('admin.layouts.admin')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/profile') }}">{{ utf8_encode(__('static.Profile')) }}</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Profile')) }} <small></small></h1>
    <!-- end page-header -->
    
    <!-- begin section-container -->
    <div class="section-container section-with-top-border p-b-5">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="col-lg-12">
                <!-- begin panel -->
                <div class="panel p-20">
                    {!! Form::model($info_User, ['method' => 'PATCH', 'url' => ['/admin/profile', $info_User->id], 'files' => true,'id' => 'main-form']) !!}
                       <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                           <div class="profile_img">
                              <div id="crop-avatar">
                                @if($info_User->avatar=="")
                                    <img src="{{ asset('media/avatar/').'/demo_user.png' }}" class="img-responsive avatar-view" >
                                @else
                                    <img src="{{ asset('media/avatar/').'/'.$info_User->avatar }}" class="img-responsive avatar-view" >
                                @endif
                              </div>
                           </div>
                       </div>         
                       <div class="ln_solid"></div>
                       <div class="form-group">
                       	  <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                              <label for="exampleInputEmail1">{{ utf8_encode(__('static.Name')) }}</label>
                              {!! Form::text('name', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Name')), 'id' => 'name']) !!}
                              @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
                           </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                              <label for="exampleInputEmail1">{{ utf8_encode(__('static.Email')) }}</label>
                              {!! Form::text('email', null, ['class' => 'form-control' , 'required' , 'placeholder' =>  utf8_encode(__('static.Email')) , 'id' => 'email']) !!}
                              @if ($errors->has('email'))<p style="color:red;">{!!$errors->first('email')!!}</p>@endif
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                              <label for="exampleInputEmail1">{{ utf8_encode(__('static.Password')) }}</label>
                              {!! Form::password('password', ['class' => 'form-control', 'placeholder' =>  utf8_encode(__('static.Password'))]) !!}
                              @if ($errors->has('password'))<p style="color:red;">{!!$errors->first('password')!!}</p>@endif
                           </div>
                           <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                              <label for="exampleInputEmail1">{{ utf8_encode(__('static.Confirm')) }} {{ utf8_encode(__('static.Password')) }}</label>
                              {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => utf8_encode(__('static.Confirm')) ." ". utf8_encode(__('static.Password'))]) !!}
                              @if ($errors->has('password_confirmation'))<p style="color:red;">{!!$errors->first('password_confirmation')!!}</p>@endif
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                              <label for="exampleInputFile">Picture</label><br />
                              {!! Form::file('avatar', null, ['class' => 'form-control', 'required' ]) !!}
                              @if ($errors->has('avatar'))<p style="color:red;">{!!$errors->first('avatar')!!}</p>@endif
                           </div>
                       </div>
                       <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                             <button type="submit" class="btn btn-success">Submit</button>
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