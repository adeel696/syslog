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
                          <label>{{ utf8_encode(__('static.Title')) }}</label>
                          {!! Form::text('title', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Title')), 'id' => 'title']) !!}
                          @if ($errors->has('title'))
                          <p style="color:red;">{!!$errors->first('title')!!}</p>
                          @endif
                       </div>
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
                          <label>{{ utf8_encode(__('static.Image')) }}</label><br />
                          {!! Form::file('image', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Image')), 'id' => 'image']) !!}
                          @if ($errors->has('image'))
                          <p style="color:red;">{!!$errors->first('image')!!}</p>
                          @endif
                          <img src="{{ url('/media/offers/')."/".$info_Offer->image }}" style="width:50%"/>
                       </div>
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          
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