@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
    <div style="width:100%">
        <div class="row no-gutters">
            <div class="col-sm-6 col-md-3">
              <div class="ftco-cover-1 overlay containerMain" style="background-image: url('home/img/trucksbk.png')">
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-lg-9 text-center">
                        <h1><a class="btn btn-outline-light" href="{{ url('/vehicle') }}" style="color:#FFF">{{ utf8_encode(__('static.Vehicle')) }}</a></h1>
                     </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="ftco-cover-1 overlay containerMain" style="background-image: url('home/img/warehousebk.jpg')">
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-lg-9 text-center">
                        <h1><a class="btn btn-outline-light" href="{{ url('/warehouse') }}">{{ utf8_encode(__('static.Warehouses')) }}</a></h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="ftco-cover-1 overlay containerMain" style="background-image: url('home/img/constructionbk.jpg')">
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-lg-9 text-center">
                        <h1><a class="btn btn-outline-light" href="{{ url('/construction-machinery') }}" style="color:#FFF">{{ utf8_encode('Engins de manutention')}}</a></h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="ftco-cover-1 overlay containerMain" style="background-image: url('home/img/bulkbuying.jpg')">
                <div class="container">
                  <div class="row align-items-center justify-content-center">
                    <div class="col-lg-9 text-center">
                        <h1><a class="btn btn-outline-light" href="{{ url('/bulk-buying') }}">{{ utf8_encode(__('static.Buy')) }} {{ utf8_encode(__('static.Bulk')) }} </a></h1>
                    </div>
                  </div>
                </div>
              </div>
            </div>
       </div>
</div>
</div>
@endsection