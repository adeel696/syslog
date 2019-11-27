@extends('cms.layouts.cms')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('admin/fare') }}">{{ utf8_encode(__('static.Profile')) }}</a></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Profile')) }} <small></small></h1>
    <!-- end page-header -->
    
    <!-- begin section-container -->
    <div class="section-container section-with-top-border p-b-5">
        <!-- begin row -->
        <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                 <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                       <div class="profile_img">
                          <div id="crop-avatar">
                            @if($info_User->avatar=="")
                                <img src="{{ asset('media/avatar/').'/demo_user.png' }}" alt="{{ Auth::User()->name }}" class="img-responsive avatar-view" >
                            @else
                                <img src="{{ asset('media/avatar/').'/'.$info_User->avatar }}" alt="{{ Auth::User()->name }}" class="img-responsive avatar-view" >
                            @endif
                          </div>
                       </div>
                       <h3>{{ Auth::User()->name }}</h3>
                       <ul class="list-unstyled user_data">
                          <li><i class="fa fa-user"></i>&nbsp;{{ Auth::User()->getRoleNames()[0] }}</li>
                       </ul>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                       <div class="x_panel">
                         <div class="x_content">
                            {!! Form::model($info_User, ['method' => 'PATCH', 'url' => ['/Foreman/Profile', $info_User->id], 'files' => true,'id' => 'main-form']) !!}
                                <input type="hidden" name="type" value="{{ $info_User->type }}" />
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <label for="exampleInputEmail1">Name</label>
                                      {!! Form::text('name', null, ['class' => 'form-control' , 'required' , 'placeholder' => 'Name', 'id' => 'name']) !!}
                                      @if ($errors->has('name'))<p style="color:red;">{!!$errors->first('name')!!}</p>@endif
                                   </div>
                                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <label for="exampleInputEmail1">Username</label>
                                      {!! Form::text('username', null, ['class' => 'form-control' , 'required' , 'placeholder' => 'username', 'id' => 'username']) !!}
                                      @if ($errors->has('username'))<p style="color:red;">{!!$errors->first('username')!!}</p>@endif
                                   </div>
                                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <label for="exampleInputEmail1">Email</label>
                                      {!! Form::text('email', null, ['class' => 'form-control' , 'required' , 'placeholder' => 'Email', 'id' => 'email']) !!}
                                      @if ($errors->has('email'))<p style="color:red;">{!!$errors->first('email')!!}</p>@endif
                                   </div>
                                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <label for="exampleInputEmail1">Password</label>
                                      {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) !!}
                                      @if ($errors->has('password'))<p style="color:red;">{!!$errors->first('password')!!}</p>@endif
                                   </div>
                                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <label for="exampleInputEmail1">Confirm Password</label>
                                      {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'confirm password']) !!}
                                      @if ($errors->has('password_confirmation'))<p style="color:red;">{!!$errors->first('password_confirmation')!!}</p>@endif
                                   </div>
                                   <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                      <label for="exampleInputFile">Picture</label>
                                      {!! Form::file('avatar', null, ['class' => 'form-control', 'required' ]) !!}
                                      <p class="help-block">Please upload picture</p>
                                      @if ($errors->has('avatar'))<p style="color:red;">{!!$errors->first('avatar')!!}</p>@endif
                                   </div>
                               </div>
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
           </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end section-container -->
</div>
<!-- end content -->
@endsection
