@extends('layouts.cms.admin')
@section('content')
<div id="content" class="content">
  <!-- begin row -->
  <div class="row">
            <!-- begin col-10 -->
      <div class="col-lg-12">
          <!-- begin radius-container -->
                <div class="radius-container m-b-30">
                    <!-- begin panel -->
                    <div class="panel no-rounded-corner bg-inverse text-white wrapper m-b-0">
                    <!-- begin breadcrumb -->
                    <ol class="breadcrumb pull-right bg-inverse">
                      <a href="{{ url('cms/admin/') }}" class="text-light"><i class="fa fa-home text-light"></i> Dashboard </a> > <a href="{{ url('/cms/admin/city') }}"  class="text-light"><i class="fas fa-globe-asia text-light"></i> City</a>
                      </ol>
                        <!-- end breadcrumb -->
                      <!-- begin page-header -->
                      <h1 class="page-header text-light">Cities</h1>
                      <!-- end page-header -->
                    </div>
                    <!-- end panel -->
                    <!-- begin panel -->
                    <div class="panel pagination-inverse bg-white clearfix no-rounded-corner m-b-0">
                      <div class="container">
                      
                        <!-- begin table -->
                    <ul class="nav navbar-right">
                      <li><a href="{{ url('/cms/admin/city/create') }}"><i class="fa fa-plus"></i> Add New</a></li>
                      </li>
                    </ul>
                    
                    <table id="viewForm" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Country</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end radius-container -->
      </div>
            <!-- end col-10 -->
  </div>
		    <!-- end row -->
</div>
@endsection

@push('scripts')

<script type="text/javascript">
    $('#viewForm').DataTable({
        "processing": true,
        "serverSide": true,
		"ajax": "{{url('/cms/admin/city/grid')}}",
        "columns": [
			{ data: 'id', name: 'id' },
			{ data: 'name', name: 'name' },
      { data: 'country_id', name: 'country_id' },
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
		if (confirm("Are you sure to delete city?")) {		
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