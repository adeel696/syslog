@extends('cms.layouts.cms')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('cms/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Construction')) }} {{ utf8_encode(__('static.Machines')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Construction')) }} {{ utf8_encode(__('static.Machines')) }}<small></small></h1>
    <!-- end page-header -->
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <span class="alert">
            @if(session('booking_message') != "")
	            {{ utf8_encode(__('static.Booking Message')) }}
            @endif
            </span>
        </div>
    </div>
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
                            <a class="btn btn-xs btn-icon btn-circle btn-grey" href="{{ url('/') }}"><i class="fa fa-plus"></i></a>
                        </div>
                        <h4 class="panel-title">{{ utf8_encode(__('static.Construction')) }} {{ utf8_encode(__('static.Machines')) }}</h4>
                    </div>
                    <div class="table-responsive">
                        <table id="viewForm" class="table table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th>{{ utf8_encode(__('static.ID')) }}</th>
                                    <th>{{ utf8_encode(__('static.User')) }}</th>
                                    <th>{{ utf8_encode(__('static.Construction')) }} {{ utf8_encode(__('static.Machine')) }}</th>
                                    <th>{{ utf8_encode(__('Type of Machinery')) }}</th>
                                    <th>{{ utf8_encode(__('static.Description')) }}</th>
                                    <th>{{ utf8_encode(__('static.Specifications')) }}</th>
                                    <th>{{ utf8_encode(__('static.Amount')) }}</th>
                                    <th>{{ utf8_encode(__('static.City')) }}</th>
                                    <th>{{ utf8_encode(__('static.Delivery Deadline')) }}</th>
                                    <th>{{ utf8_encode(__('static.Duration of User')) }}</th>
                                    <th>{{ utf8_encode(__('static.Preferences')) }}</th>
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
		"ajax": "{{url('/cms/booking/construction-machine/grid')}}",
        "columns": [
			{ data: 'id', name: 'id' },
			{ data: 'user_id', name: 'user_id' },
      		{ data: 'contruction_machinary_id', name: 'contruction_machinary_id' },
            { data: 'type_of_machinery', name: 'type_of_machinery' },
            { data: 'description', name: 'description' },
            { data: 'specification', name: 'specification' },
            { data: 'amount', name: 'amount' },
            { data: 'delivery_place_city_id', name: 'delivery_place_city_id' },
            { data: 'delivery_deadline', name: 'delivery_deadline' },
            { data: 'duration_of_user', name: 'duration_of_user' },
            { data: 'preferences', name: 'preferences' },
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
	
	$(document).on('change', '.changeStatus', function (e) {
		var url = "{{ url('cms/booking/status') }}";		
		$.ajax({
			url: url,
			type: 'POST',
			dataType: 'text',
			data: {method: '_POST', "_token": "{{ csrf_token() }}" , "booking_id": $(this).data("id"), "status": $(this).val(), "type": $(this).data("type"), submit: true},
			success: function (response) {
				console.log(response)
				$('#viewForm').DataTable().draw(false);
			},
			error: function (result, status, err) {
				console.log(result)
			},
		});
	});

</script>

@endpush