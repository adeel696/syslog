@extends('layouts.app')
@section('content')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay" style="background-image: url('home/img/warehousebk.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-9 text-center">
            <h1>We can make it together</h1><br>      
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section bg-light">
    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-6">
            <h2 class="mb-4" id="catName">Warehouse</h2>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-stretch" id="contentDetail">
        </div>
        <div class="col-12">
            <span class="p-3">1</span>
            <a href="#" class="p-3">2</a>
            <a href="#" class="p-3">3</a>
            <a href="#" class="p-3">4</a>
        </div>
    </div>
</div>
@endsection
@push('scripts') 
<script>
	getData();
	function getData()
	{
		$("#catName").html("Warehouse");
		var data = "";
		for(i=0; i<20; i++)
		{
			var data = data + '<div class="col-lg-3 col-md-6 mb-5">' +
					   '<div class="post-entry-1 h-100" style="background:#fff">' +
						  '<a href="#">' +
						  '<img src="{{ url("home/img/warehousebk.jpg") }}" alt="Image" class="img-fluid">' +
						 '</a>' +
						 '<div class="post-entry-1-contents">' +
							 '<a href="#">' +
								'<h2>Best Warehouse</h2>' +
							 '</a>' +
							 '<p>$10/Day</p>' +
							 '<a href="#" class="more">Book</a>' +
						  '</div>' +
					   '</div>' +
					'</div>';
		}
		$("#contentDetail").html(data)
	}
</script>
@endpush
