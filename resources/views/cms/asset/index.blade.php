@extends('cms.layouts.cms')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('cms/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Assets')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Assets')) }} <small></small></h1>
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
                            <a class="btn btn-xs btn-icon btn-circle btn-grey" href="{{ url('/cms/asset/create') }}"><i class="fa fa-plus"></i></a>
                        </div>
                        <h4 class="panel-title">{{ utf8_encode(__('static.Assets')) }}</h4>
                    </div>
                    <div class="table-responsive">
                        <table id="viewForm" class="table table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th>{{ utf8_encode(__('static.ID')) }}</th>
                                    <th>{{ utf8_encode(__('static.Type')) }}</th>
                                    <th>{{ utf8_encode(__('static.Name')) }}</th>
                                    <th>{{ utf8_encode(__('static.Quantity')) }}</th>
                                    <th>{{ utf8_encode(__('static.Capacity')) }}</th>
                                    <th>{{ utf8_encode("N° d'immatriculation") }}</th>
                                    <th>{{ utf8_encode("Date mise en circulation") }}</th>
                                    <th>{{ utf8_encode("Etat") }}</th>
                                    <th>{{ utf8_encode("Distance au compteur") }}</th>
                                    <th>{{ utf8_encode("Marque") }}</th>
                                    <th>{{ utf8_encode("Fabricant") }}</th>
                                    <th>{{ utf8_encode("Série") }}</th>
                                    <th>{{ utf8_encode("Autres spécifications") }}</th>
                                    <th>{{ utf8_encode(__('static.Action')) }}</th>
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
		"ajax": "{{url('/cms/asset/grid')}}",
        "columns": [
			{ data: 'id', name: 'id' },
      		{ data: 'type', name: 'type' },
			{ data: 'machine_name', name: 'machine_name' },
			{ data: 'quantity', name: 'quantity' },
			{ data: 'capacity', name: 'capacity' },
			{ data: 'registration_number', name: 'registration_number' },
			{ data: 'date_of_entry', name: 'date_of_entry' },
			{ data: 'state', name: 'state' },
			{ data: 'meter_reading', name: 'meter_reading' },
			{ data: 'mark', name: 'mark' },
			{ data: 'maker', name: 'maker' },
			{ data: 'series', name: 'series' },
			{ data: 'other_specifications', name: 'other_specifications' },
			{ data: 'edit', name: 'edit', orderable: false, searchable: false }
		],
		"responsive": true,
		dom: 'Bfrtip',
		buttons: [
			//'copy', 'csv'
		],
		order: [ [0, 'asc'] ]
    });
	
	$('#viewForm').on('click', '#btnDelete[data-remote]', function (e) { 
		if (confirm("Are you sure to delete asset?")) {		
			e.preventDefault();		 
			var url = '{{url("/")}}'+$(this).data('remote');
			// confirm then
			$.ajax({
				url: url,
				type: 'DELETE',
				dataType: 'json',
				data: {method: '_DELETE', "_token": "{{ csrf_token() }}" , submit: true},
				error: function (result, status, err) {
					//alert(result.responseText);
					//alert(status.responseText);
					//alert(err.Message);
				},
			}).always(function (data) {
				$('#viewForm').DataTable().draw(false);
			});
		}
		return false;
	});

</script>

@endpush