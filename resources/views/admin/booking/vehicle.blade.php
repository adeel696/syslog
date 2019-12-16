@extends('admin.layouts.admin')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Vehicle')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Vehicle')) }} <small></small></h1>
    <!-- end page-header -->
    
    <!-- begin section-container -->
    <div class="section-container section-with-top-border p-b-5">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-8 -->
            <div class="col-lg-12">
                <!-- begin panel -->
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a class="btn btn-xs btn-icon btn-circle btn-grey" href="{{ url('/admin/city/create') }}"><i class="fa fa-plus"></i></a>
                        </div>
                        <h4 class="panel-title">{{ utf8_encode(__('static.Vehicles')) }}</h4>
                    </div>
                    <div class="table-responsive">
                        <table id="viewForm" class="table table-td-valign-middle">
                            <thead><tr>
                                    <th>{{ utf8_encode(__('static.ID')) }}</th>
                                    <th>{{ utf8_encode(__('static.User')) }}</th>
                                    <th>{{ utf8_encode(__('static.Email')) }}</th>
                                    <th>{{ utf8_encode(__('static.Vehicle')) }}</th>
                                    <th>{{ utf8_encode(__('Departure City')) }}</th>
                                    <th>{{ utf8_encode(__('Arrival City')) }}</th>
                                    <th>{{ utf8_encode(__('static.Capacity')) }}</th>
                                    <th>{{ utf8_encode(__("static.Duration")) }}</th>
                                    <th>{{ utf8_encode(__('static.Amount')) }}</th>
                                    <th>{{ utf8_encode(__('static.Description')) }}</th>
                                    <th>{{ utf8_encode(__('static.Preferences')) }}</th>
                                    <th>{{ utf8_encode(__('static.Specifications')) }}</th>
                                    <th>{{ utf8_encode(__('static.Insurances')) }}</th>
                                    <th>{{ utf8_encode(__('static.Loading')) }}</th>
                                    <th>{{ utf8_encode(__('static.Loading')) }}</th>
                                    <th>{{ utf8_encode(__('static.OffLoading')) }}</th>
                                    <th>{{ utf8_encode(__('static.Others')) }}</th>
                                    <th>{{ utf8_encode(__('static.Status')) }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
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

@push('scripts')

<script type="text/javascript">
    $('#viewForm').DataTable({
        "processing": true,
        "serverSide": true,
		"ajax": "{{url('/admin/booking/vehicle/grid')}}",
        "columns": [
			{ data: 'id', name: 'id' },
            { data: 'user_id', name: 'user_id' },
			{ data: 'email', name: 'email' },
            { data: 'vehicle_id', name: 'vehicle_id' }, 
            { data: 'place_of_departure_city_id', name: 'place_of_departure_city_id' },
            { data: 'place_of_arrival_city_id', name: 'place_of_arrival_city_id' },
            { data: 'capacity', name: 'capacity' },
            { data: 'duration', name: 'duration' },
            { data: 'amount', name: 'amount' },            
      		{ data: 'description', name: 'description' },
            { data: 'preferences', name: 'preferences' },
            { data: 'specifications', name: 'specifications' },
            { data: 'insurances', name: 'insurances' },
			{ data: 'loading', name: 'loading' },
            { data: 'offloading', name: 'offloading' },
            { data: 'others', name: 'others' },
			{ data: 'status', name: 'status' },
		],
		"responsive": true,
		dom: 'Bfrtip',
		buttons: [
			//'copy', 'csv'
		],
		order: [ [0, 'asc'] ]
    });

</script>

@endpush