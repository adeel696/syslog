@extends('cms.layouts.cms')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('cms/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('cms/gooddeal') }}">{{ utf8_encode(__('static.Goods')) }} {{ utf8_encode(__('static.Deals')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Add')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Add')) }} {{ utf8_encode(__('static.Goods')) }} {{ utf8_encode(__('static.Deals')) }} <small></small></h1>
    <!-- end page-header -->
    
    <!-- begin section-container -->
    <div class="section-container section-with-top-border p-b-5">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="col-lg-12">
                <!-- begin panel -->
                <div class="panel p-20">
                    {!! Form::open([ 'url' => '/cms/gooddeal', 'files' => true, 'id' => 'main-form' ]) !!}
                    <input type="hidden" name="user_id" value="{{ Auth::User()->id }}" />
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
                          <label>{{ utf8_encode(__('static.Description')) }}</label>
                          {!! Form::text('description', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Description')), 'id' => 'description']) !!}
                          @if ($errors->has('description'))
                          <p style="color:red;">{!!$errors->first('description')!!}</p>
                          @endif
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Publish')) }}</label>
                          <select name="is_publish" class="form-control">
                          	<option value="1">Oui</option>
                            <option value="0">Non</option>
                          </select>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6 col-sm-6 col-xs-6 col-xs-6 form-group">
                          <label>{{ utf8_encode(__('static.Image')) }}</label><br />
                          {!! Form::file('image', null, ['class' => 'form-control' , 'required' , 'placeholder' => utf8_encode(__('static.Image')), 'id' => 'image']) !!}
                          @if ($errors->has('image'))
                          <p style="color:red;">{!!$errors->first('image')!!}</p>
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