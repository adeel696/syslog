@extends('admin.layouts.admin')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Warehouse')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Warehouse')) }} <small></small></h1>
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
                        <h4 class="panel-title">{{ utf8_encode(__('static.Warehouse')) }}</h4>
                    </div>
                    <div class="table-responsive">
                    	<div class="panel">
                        	<div class="panel-heading">
                                <input type="radio" class="statusChk" name="statusChk" value="0" checked="checked"/> All
                                <input type="radio" class="statusChk" name="statusChk" value="1" /> En attente
                                <input type="radio" class="statusChk" name="statusChk" value="2" /> {{ utf8_encode("Ferm�") }}
                                <input type="radio" class="statusChk" name="statusChk" value="2" /> Annuler
                        	</div>
                        </div>
                        <table id="viewForm" class="table table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th>{{ utf8_encode(__('static.ID')) }}</th>
                                    <th>{{ utf8_encode(__('static.User')) }}</th>
                                    <th>{{ utf8_encode(__('static.Email')) }}</th>
                                    <th>{{ utf8_encode(__('static.Description')) }}</th>
                                    <th>{{ utf8_encode(__('Product Type')) }}</th>
                                    <th>{{ utf8_encode(__('Packaging')) }}</th>
                                    <th>{{ utf8_encode(__('static.Weight')) }}</th>
                                    <th>{{ utf8_encode(__('static.Volume')) }}</th>
                                    <th>{{ utf8_encode(__('static.Amount')) }}</th>
                                    <th>{{ utf8_encode(__('static.Needed Space')) }}</th>
                                    <th>{{ utf8_encode('Dur�e') }}</th>
                                    <th>{{ utf8_encode(__('static.Preference Text')) }}</th>
                                    <th>{{ utf8_encode(__('static.City')) }}</th>
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
		"ajax": "{{url('/admin/booking/warehouse/grid')}}/0",
        "columns": [
			{ data: 'id', name: 'id' },
			{ data: 'user_id', name: 'user_id' },
			{ data: 'email', name: 'email' },
      		{ data: 'description', name: 'description' },
            { data: 'product_type', name: 'product_type' },
            { data: 'packaging', name: 'packaging' },
            { data: 'weight', name: 'weight' },
            { data: 'volume', name: 'volume' },
            { data: 'amount', name: 'amount' },            
      		{ data: 'needed_space', name: 'needed_space' },
            { data: 'approx_storage_time', name: 'approx_storage_time' },
            { data: 'preference_text', name: 'preference_text' },
            { data: 'city_id', name: 'city_id' },
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
	
	$(document).on('change', '.statusChk', function (e) {
		e.preventDefault();		 
		$('#viewForm').DataTable().ajax.url( "{{url('/admin/booking/warehouse/grid')}}/"+$(this).val() ).load();
	});

</script>

@endpush