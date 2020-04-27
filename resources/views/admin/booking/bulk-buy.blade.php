@extends('admin.layouts.admin')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Bulk')) }} {{ utf8_encode(__('static.Buy')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Bulk')) }} {{ utf8_encode(__('static.Buy')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Bulk')) }} {{ utf8_encode(__('static.Buy')) }} <small></small></h1>
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
                        </div>
                        <h4 class="panel-title">{{ utf8_encode(__('static.Bulk')) }} {{ utf8_encode(__('static.Buy')) }}</h4>
                    </div>
                    <div class="table-responsive">
                        <table id="viewForm" class="table table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th>{{ utf8_encode(__('static.ID')) }}</th>
                                    <th>{{ utf8_encode(__('static.Offer')) }} {{ utf8_encode(__('static.ID')) }}</th>
                                    <th>{{ utf8_encode(__('static.User')) }}</th>
                                    <th>{{ utf8_encode(__('static.Email')) }}</th>
                                    <th>{{ utf8_encode(__('static.Quantity')) }}</th>
                                    <th>{{ utf8_encode(__('static.Others')) }}</th>
                                    <th>{{ utf8_encode(__('static.Offer')) }}</th>
                                    <th>{{ utf8_encode(__('static.Description')) }}</th>
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
		"ajax": "{{url('/admin/booking/bulk-buy/grid')}}",
        "columns": [
			{ data: 'id', name: 'id' },
			{ data: 'offer_id', name: 'offer_id' },
			{ data: 'user_id', name: 'user_id' },			
			{ data: 'email', name: 'email' },
			{ data: 'quantity', name: 'quantity' },
			{ data: 'others', name: 'others' },
      		{ data: 'offer_name', name: 'offer_name' },
			{ data: 'description', name: 'description' },
		],
		"responsive": true,
		dom: 'Bfrtip',
		buttons: [
			//'copy', 'csv'
		],
		order: [ [0, 'asc'] ]
    });
	
	$(document).on('change', '.changeStatus', function (e) {
		var url = "{{ url('admin/booking/status') }}";		
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