@extends('cms.layouts.cms')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Dashboard <small></small></h1>
    <!-- end page-header -->
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-12">
            @if(session('register_success') != "")
                <h1>{{ utf8_encode(__('static.Register Success')) }}</h1>
            @endif
        </div>
    </div>
    <!-- begin row -->
    <div class="row">
        <div class="col-sm-12 col-lg-12">
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end content -->
@endsection
