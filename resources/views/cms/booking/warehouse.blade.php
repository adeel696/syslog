@extends('cms.layouts.cms')

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
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <span class="alert">{{ utf8_encode(session('flash_message')) }}</span>
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
                            <a class="btn btn-xs btn-icon btn-circle btn-grey" href="{{ url('/admin/city/create') }}"><i class="fa fa-plus"></i></a>
                        </div>
                        <h4 class="panel-title">{{ utf8_encode(__('static.Warehouse')) }}</h4>
                    </div>
                    <div class="table-responsive">
                        <table id="viewForm" class="table table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th>{{ utf8_encode(__('static.ID')) }}</th>
                                    <th>{{ utf8_encode(__('static.User')) }}</th>
                                    <th>{{ utf8_encode(__('static.Description')) }}</th>
                                    <th>{{ utf8_encode(__('Product Type')) }}</th>
                                    <th>{{ utf8_encode(__('Packaging')) }}</th>
                                    <th>{{ utf8_encode(__('static.Weight')) }}</th>
                                    <th>{{ utf8_encode(__('static.Volume')) }}</th>
                                    <th>{{ utf8_encode(__('static.Amount')) }}</th>
                                    <th>{{ utf8_encode(__('static.Needed Space')) }}</th>
                                    <th>{{ utf8_encode(__('static.Preferences')) }}</th>
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
		"ajax": "{{url('/cms/booking/warehouse/grid')}}",
        "columns": [
			{ data: 'id', name: 'id' },
			{ data: 'user_id', name: 'user_id' },
      		{ data: 'description', name: 'description' },
            { data: 'product_type', name: 'product_type' },
            { data: 'packaging', name: 'packaging' },
            { data: 'weight', name: 'weight' },
            { data: 'volume', name: 'volume' },
            { data: 'amount', name: 'amount' },            
      		{ data: 'needed_space', name: 'needed_space' },
            { data: 'preferences', name: 'preferences' },
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

</script>

@endpush