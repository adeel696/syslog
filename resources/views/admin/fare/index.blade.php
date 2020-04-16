@extends('admin.layouts.admin')

@section('content')
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">{{ utf8_encode(__('static.Dashboard')) }}</a></li>
        <li class="breadcrumb-item active">{{ utf8_encode(__('static.Fare')) }}</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">{{ utf8_encode(__('static.Fare')) }} <small></small></h1>
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
                            <a class="btn btn-xs btn-icon btn-circle btn-grey" href="{{ url('/admin/fare/create') }}"><i class="fa fa-plus"></i></a>
                        </div>
                        <h4 class="panel-title">{{ utf8_encode(__('static.Fares')) }}</h4>
                    </div>
                    <div class="container">
                    	{!! Form::open([ 'url' => '/admin/fare/import', 'files' => true, 'id' => 'sub-form' ]) !!}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="file" name="faresfile" /><br />
                                        @if ($errors->has('faresfile'))
                                        <p style="color:red;">{!!$errors->first('faresfile')!!}</p>
                                        @endif
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Upload</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table id="viewForm" class="table table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th>{{ utf8_encode(__('static.ID')) }}</th>
                                    <th>{{ utf8_encode(__('static.Name')) }}</th>
                                    <th>{{ utf8_encode(__('static.Type')) }}</th>
                                    <th>{{ utf8_encode(__('static.From')) }} {{ utf8_encode(__('static.City')) }}</th>
                                    <th>{{ utf8_encode(__('static.To')) }} {{ utf8_encode(__('static.City')) }}</th>
                                    <th>{{ utf8_encode(__('static.Capacity')) }}</th>
                                    <th>{{ utf8_encode(__('static.Insurances')) }}</th>
                                    <th>{{ utf8_encode(__('static.Loading')) }}</th>
                                    <th>{{ utf8_encode(__('static.Offloading')) }}</th>
                                    <th>{{ utf8_encode(__('static.Fare')) }}</th>
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
		"ajax": "{{url('/admin/fare/grid')}}",
        "columns": [
			{ data: 'id', name: 'id' },
			{ data: 'machine_name', name: 'machine_name' },
      		{ data: 'type_of_vehicle', name: 'type_of_vehicle' },
			{ data: 'from_city', name: 'from_city' },
			{ data: 'to_city', name: 'to_city' },
			{ data: 'capacity', name: 'capacity' },
			{ data: 'insurances_amount', name: 'insurances_amount' },
			{ data: 'loading_price', name: 'loading_price' },
			{ data: 'offloading_price', name: 'offloading_price' },
			{ data: 'fare', name: 'fare' },
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
		if (confirm("Are you sure to delete fare?")) {		
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