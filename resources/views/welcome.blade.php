@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">

    <table style="width:100%">
        <tr>
            <td style="width:50%">
                  <div class="ftco-cover-1 overlay containerMain" style="background-image: url('home/img/trucksbk.png')">
                    <div class="container">
                      <div class="row align-items-center justify-content-center">
                        <div class="col-lg-9 text-center">
                            <h1><a href="{{ url('/vehicle') }}" style="color:#FFF">Vehicle</a></h1>
                      </div>
                    </div>
                  </div>
            </td>
            <td>
                  <div class="ftco-cover-1 overlay containerMain" style="background-image: url('home/img/warehousebk.jpg')">
                    <div class="container">
                      <div class="row align-items-center justify-content-center">
                        <div class="col-lg-9 text-center">
                            <h1><a href="{{ url('/warehouse') }}" style="color:#FFF">Warehouse</a></h1>
                      </div>
                    </div>
                  </div>
            </td>
        </tr>
    </table>
</div>
@endsection