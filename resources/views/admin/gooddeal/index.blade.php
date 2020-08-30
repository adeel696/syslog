@extends('admin.layouts.admin')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Goods')) }} {{ utf8_encode(__('static.Deals')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Goods')) }} {{ utf8_encode(__('static.Deals')) }} <small></small></h1>
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
                            <!--<a class="btn btn-xs btn-icon btn-circle btn-grey" href="{{ url('/cms/gooddeal/create') }}"><i class="fa fa-plus"></i></a>-->
                        </div>
                        <h4 class="panel-title">{{ utf8_encode(__('static.Goods')) }} {{ utf8_encode(__('static.Deals')) }}</h4>
                    </div>
                    <div class="table-responsive">
                        <table id="viewForm" class="table table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th>{{ utf8_encode(__('static.ID')) }}</th>
                                    <th>{{ utf8_encode(__('static.Title')) }}</th>
                                    <th>{{ utf8_encode(__('static.Description')) }}</th>
                                    <th>{{ utf8_encode(__('static.Image')) }}</th>
                                    <th>{{ utf8_encode(__('static.Publish')) }}</th>
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
		"ajax": "{{url('/admin/gooddeal/grid')}}",
        "columns": [
			{ data: 'id', name: 'id' },
			{ data: 'title', name: 'title' },
      		{ data: 'description', name: 'description' },
			{ data: 'image', name: 'image' },
			{ data: 'is_publish', name: 'is_publish' },
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
		if (confirm("Are you sure to delete offer?")) {		
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
	
	$(document).on('change', '.changeStatus', function (e) {
		var url = "{{ url('admin/gooddeal/') }}" + '/' + $(this).data("id");		
		$.ajax({
			url: url,
			type: 'PATCH',
			dataType: 'text',
			data: {method: '_PATCH', "_token": "{{ csrf_token() }}" , "is_publish": $(this).val(), "type": $(this).data("type"), submit: true},
			success: function (response) {
				console.log(response)
				//$('#viewForm').DataTable().draw(false);
			},
			error: function (result, status, err) {
				console.log(result)
			},
		});
	});

</script>

@endpush